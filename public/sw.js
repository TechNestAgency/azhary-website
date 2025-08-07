// Service Worker for Azhary Academy - Performance Caching
const CACHE_NAME = 'azhary-academy-v1';
const STATIC_CACHE = 'azhary-static-v1';
const DYNAMIC_CACHE = 'azhary-dynamic-v1';

// Critical resources to cache immediately
const CRITICAL_RESOURCES = [
  '/',
  '/website_assets/css/optimized.css',
  '/website_assets/js/optimized.js',
  '/website_assets/img/logo-no.png',
  '/hero-back.jpg',
  '/presenting.png',
  '/man2.png',
  '/man3.png',
  '/man4.png',
  '/about.png'
];

// Static assets to cache
const STATIC_RESOURCES = [
  '/website_assets/vendor/bootstrap/css/bootstrap.min.css',
  '/website_assets/vendor/bootstrap-icons/bootstrap-icons.css',
  '/website_assets/vendor/aos/aos.css',
  '/website_assets/vendor/glightbox/css/glightbox.min.css',
  '/website_assets/vendor/swiper/swiper-bundle.min.css',
  '/website_assets/css/main.css',
  '/website_assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
  '/website_assets/vendor/aos/aos.js',
  '/website_assets/vendor/glightbox/js/glightbox.min.js',
  '/website_assets/vendor/swiper/swiper-bundle.min.js',
  '/website_assets/js/main.js'
];

// Install event - cache critical resources
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        console.log('Caching critical resources');
        return cache.addAll(CRITICAL_RESOURCES);
      })
      .then(() => {
        console.log('Critical resources cached');
        return self.skipWaiting();
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
            if (cacheName !== CACHE_NAME && 
                cacheName !== STATIC_CACHE && 
                cacheName !== DYNAMIC_CACHE) {
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

// Fetch event - serve from cache, fallback to network
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
  if (isCriticalResource(request.url)) {
    // Critical resources - cache first
    event.respondWith(cacheFirst(request, CACHE_NAME));
  } else if (isStaticResource(request.url)) {
    // Static resources - cache first
    event.respondWith(cacheFirst(request, STATIC_CACHE));
  } else if (isImage(request.url)) {
    // Images - cache first with fallback
    event.respondWith(cacheFirst(request, DYNAMIC_CACHE));
  } else {
    // Other requests - network first with fallback
    event.respondWith(networkFirst(request, DYNAMIC_CACHE));
  }
});

// Cache first strategy
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
    console.log('Network failed for:', request.url);
    return new Response('Network error', { status: 503 });
  }
}

// Network first strategy
async function networkFirst(request, cacheName) {
  try {
    const networkResponse = await fetch(request);
    if (networkResponse.ok) {
      const cache = await caches.open(cacheName);
      cache.put(request, networkResponse.clone());
    }
    return networkResponse;
  } catch (error) {
    const cache = await caches.open(cacheName);
    const cachedResponse = await cache.match(request);
    if (cachedResponse) {
      return cachedResponse;
    }
    return new Response('Network error', { status: 503 });
  }
}

// Helper functions
function isCriticalResource(url) {
  return CRITICAL_RESOURCES.some(resource => url.includes(resource));
}

function isStaticResource(url) {
  return STATIC_RESOURCES.some(resource => url.includes(resource)) ||
         url.includes('/website_assets/vendor/') ||
         url.includes('/website_assets/css/') ||
         url.includes('/website_assets/js/');
}

function isImage(url) {
  return url.match(/\.(jpg|jpeg|png|gif|webp|svg)$/i);
}

// Background sync for offline form submissions
self.addEventListener('sync', event => {
  if (event.tag === 'background-sync') {
    event.waitUntil(doBackgroundSync());
  }
});

async function doBackgroundSync() {
  // Handle offline form submissions
  const requests = await indexedDB.open('offline-forms');
  // Implementation for offline form handling
}

// Push notifications (if needed in future)
self.addEventListener('push', event => {
  const options = {
    body: event.data ? event.data.text() : 'New notification from Azhary Academy',
    icon: '/website_assets/img/logo-no.png',
    badge: '/website_assets/img/favicon.png',
    vibrate: [100, 50, 100],
    data: {
      dateOfArrival: Date.now(),
      primaryKey: 1
    },
    actions: [
      {
        action: 'explore',
        title: 'View Website',
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

// Notification click handler
self.addEventListener('notificationclick', event => {
  event.notification.close();

  if (event.action === 'explore') {
    event.waitUntil(
      clients.openWindow('/')
    );
  }
}); 