// Service Worker for Azhary Academy - Performance Optimization
const CACHE_NAME = 'azhary-academy-v1.0.0';
const STATIC_CACHE = 'azhary-static-v1.0.0';
const DYNAMIC_CACHE = 'azhary-dynamic-v1.0.0';

// Static assets to cache immediately
const STATIC_ASSETS = [
  '/',
  '/website_assets/css/critical.css',
  '/website_assets/css/main.css',
  '/website_assets/js/critical.js',
  '/website_assets/js/optimized.js',
  '/website_assets/img/logo-no.png',
  '/website_assets/img/apple-touch-icon.png',
  '/hero-back.jpg',
  '/presenting.png',
  '/website_assets/vendor/bootstrap/css/bootstrap.min.css',
  '/website_assets/vendor/bootstrap-icons/bootstrap-icons.css'
];

// Install event - cache static assets
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(STATIC_CACHE)
      .then(cache => {
        console.log('Caching static assets');
        return cache.addAll(STATIC_ASSETS);
      })
      .catch(error => {
        console.log('Failed to cache static assets:', error);
      })
  );
  self.skipWaiting();
});

// Activate event - clean up old caches
self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (cacheName !== STATIC_CACHE && cacheName !== DYNAMIC_CACHE) {
            console.log('Deleting old cache:', cacheName);
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
  self.clients.claim();
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
  if (!url.origin.includes(location.origin)) {
    return;
  }

  // Handle different types of requests
  if (request.destination === 'style' || request.destination === 'script') {
    // Cache CSS and JS files
    event.respondWith(cacheFirst(request, DYNAMIC_CACHE));
  } else if (request.destination === 'image') {
    // Cache images with network first strategy
    event.respondWith(networkFirst(request, DYNAMIC_CACHE));
  } else {
    // For other requests, try network first
    event.respondWith(networkFirst(request, DYNAMIC_CACHE));
  }
});

// Cache first strategy for static assets
async function cacheFirst(request, cacheName) {
  const cachedResponse = await caches.match(request);
  if (cachedResponse) {
    return cachedResponse;
  }

  try {
    const networkResponse = await fetch(request);
    if (networkResponse.ok) {
      const cache = await caches.open(cacheName);
      cache.put(request, networkResponse.clone());
    }
    return networkResponse;
  } catch (error) {
    // Return a fallback response if available
    const fallbackResponse = await caches.match('/offline.html');
    if (fallbackResponse) {
      return fallbackResponse;
    }
    throw error;
  }
}

// Network first strategy for dynamic content
async function networkFirst(request, cacheName) {
  try {
    const networkResponse = await fetch(request);
    if (networkResponse.ok) {
      const cache = await caches.open(cacheName);
      cache.put(request, networkResponse.clone());
    }
    return networkResponse;
  } catch (error) {
    const cachedResponse = await caches.match(request);
    if (cachedResponse) {
      return cachedResponse;
    }
    throw error;
  }
}

// Background sync for offline actions
self.addEventListener('sync', event => {
  if (event.tag === 'background-sync') {
    event.waitUntil(doBackgroundSync());
  }
});

async function doBackgroundSync() {
  try {
    // Handle any pending offline actions
    console.log('Background sync completed');
  } catch (error) {
    console.log('Background sync failed:', error);
  }
}

// Push notification handling
self.addEventListener('push', event => {
  const options = {
    body: event.data ? event.data.text() : 'New notification from Azhary Academy',
    icon: '/website_assets/img/logo-no.png',
    badge: '/website_assets/img/logo-no.png',
    vibrate: [100, 50, 100],
    data: {
      dateOfArrival: Date.now(),
      primaryKey: 1
    },
    actions: [
      {
        action: 'explore',
        title: 'View',
        icon: '/website_assets/img/logo-no.png'
      },
      {
        action: 'close',
        title: 'Close',
        icon: '/website_assets/img/logo-no.png'
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