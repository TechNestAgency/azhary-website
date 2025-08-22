// Service Worker for Azhary Academy - Performance Optimization
const CACHE_NAME = 'azhary-academy-v1.0.0';
const STATIC_CACHE = 'azhary-static-v1.0.0';
const DYNAMIC_CACHE = 'azhary-dynamic-v1.0.0';

// Critical resources to cache immediately
const CRITICAL_RESOURCES = [
  '/',
  '/website_assets/css/critical.css',
  '/website_assets/js/critical.js',
  '/website_assets/img/logo-no.webp',
  '/website_assets/img/favicon.png'
];

// Static assets to cache
const STATIC_RESOURCES = [
  '/website_assets/css/optimized.css',
  '/website_assets/js/optimized.js',
  '/website_assets/img/hero-main.webp',
  '/website_assets/img/presenting.webp',
  '/website_assets/img/man2.webp',
  '/website_assets/img/man3.webp',
  '/hero-back.webp'
];

// Install event - cache critical resources
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(STATIC_CACHE)
      .then(cache => {
        console.log('Caching critical resources');
        return cache.addAll(CRITICAL_RESOURCES);
      })
      .then(() => {
        console.log('Critical resources cached successfully');
        return self.skipWaiting();
      })
      .catch(error => {
        console.error('Error caching critical resources:', error);
      })
  );
});

// Activate event - clean up old caches
self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys()
      .then(cacheNames => {
        return Promise.all(
          cacheNames.map(cacheName => {
            if (cacheName !== STATIC_CACHE && cacheName !== DYNAMIC_CACHE) {
              console.log('Deleting old cache:', cacheName);
              return caches.delete(cacheName);
            }
          })
        );
      })
      .then(() => {
        console.log('Service Worker activated');
        return self.clients.claim();
      })
  );
});

// Fetch event - serve from cache when possible
self.addEventListener('fetch', event => {
  const { request } = event;
  const url = new URL(request.url);

  // Skip non-GET requests
  if (request.method !== 'GET') {
    return;
  }

  // Skip external requests
  if (url.origin !== location.origin) {
    return;
  }

  // Handle different types of requests
  if (isStaticAsset(request)) {
    // Cache-first strategy for static assets
    event.respondWith(cacheFirst(request, STATIC_CACHE));
  } else if (isHtmlRequest(request)) {
    // Network-first strategy for HTML pages
    event.respondWith(networkFirst(request, DYNAMIC_CACHE));
  } else {
    // Default: try network, fallback to cache
    event.respondWith(networkFirst(request, DYNAMIC_CACHE));
  }
});

// Cache-first strategy
async function cacheFirst(request, cacheName) {
  const cache = await caches.open(cacheName);
  const cachedResponse = await cache.match(request);
  
  if (cachedResponse) {
    return cachedResponse;
  }

  try {
    const networkResponse = await fetch(request);
    if (networkResponse.ok) {
      cache.put(request, networkResponse.clone());
    }
    return networkResponse;
  } catch (error) {
    console.error('Network request failed:', error);
    return new Response('Network error', { status: 503 });
  }
}

// Network-first strategy
async function networkFirst(request, cacheName) {
  try {
    const networkResponse = await fetch(request);
    if (networkResponse.ok) {
      const cache = await caches.open(cacheName);
      cache.put(request, networkResponse.clone());
    }
    return networkResponse;
  } catch (error) {
    console.log('Network failed, trying cache:', error);
    const cache = await caches.open(cacheName);
    const cachedResponse = await cache.match(request);
    
    if (cachedResponse) {
      return cachedResponse;
    }
    
    // Return offline page for HTML requests
    if (isHtmlRequest(request)) {
      return cache.match('/offline.html');
    }
    
    return new Response('Offline', { status: 503 });
  }
}

// Check if request is for static asset
function isStaticAsset(request) {
  const url = new URL(request.url);
  return url.pathname.match(/\.(css|js|png|jpg|jpeg|gif|svg|webp|ico|woff|woff2|ttf|eot)$/i) ||
         url.pathname.startsWith('/website_assets/') ||
         url.pathname.startsWith('/vendor/');
}

// Check if request is for HTML
function isHtmlRequest(request) {
  const url = new URL(request.url);
  return url.pathname.endsWith('/') || 
         url.pathname.endsWith('.html') || 
         request.headers.get('accept').includes('text/html');
}

// Background sync for offline form submissions
self.addEventListener('sync', event => {
  if (event.tag === 'background-sync') {
    event.waitUntil(doBackgroundSync());
  }
});

async function doBackgroundSync() {
  try {
    const cache = await caches.open(DYNAMIC_CACHE);
    const requests = await cache.keys();
    
    for (const request of requests) {
      if (request.method === 'POST') {
        try {
          const response = await fetch(request);
          if (response.ok) {
            await cache.delete(request);
          }
        } catch (error) {
          console.error('Background sync failed:', error);
        }
      }
    }
  } catch (error) {
    console.error('Background sync error:', error);
  }
}

// Push notification handling
self.addEventListener('push', event => {
  const options = {
    body: event.data ? event.data.text() : 'New update available!',
    icon: '/website_assets/img/favicon.png',
    badge: '/website_assets/img/favicon.png',
    vibrate: [100, 50, 100],
    data: {
      dateOfArrival: Date.now(),
      primaryKey: 1
    },
    actions: [
      {
        action: 'explore',
        title: 'View',
        icon: '/website_assets/img/favicon.png'
      },
      {
        action: 'close',
        title: 'Close',
        icon: '/website_assets/img/favicon.png'
      }
    ]
  };

  event.waitUntil(
    self.registration.showNotification('Azhary Academy', options)
  );
});

// Notification click handling
self.addEventListener('notificationclick', event => {
  event.notification.close();

  if (event.action === 'explore') {
    event.waitUntil(
      clients.openWindow('/')
    );
  }
}); 