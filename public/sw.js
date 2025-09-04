/**
 * Service Worker for Azhary Academy
 * Implements caching strategies for optimal performance
 */

const CACHE_NAME = 'azhary-academy-v1.0.0';
const STATIC_CACHE = 'azhary-static-v1.0.0';
const DYNAMIC_CACHE = 'azhary-dynamic-v1.0.0';

// Static assets to cache immediately
const STATIC_ASSETS = [
    '/',
    '/website_assets/css/optimized.css',
    '/website_assets/css/critical.css',
    '/website_assets/js/optimized.js',
    '/website_assets/vendor/bootstrap/css/bootstrap.min.css',
    '/website_assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
    '/website_assets/vendor/bootstrap-icons/bootstrap-icons.css',
    '/website_assets/img/logo-no.png',
    '/website_assets/img/apple-touch-icon.png',
    '/hero-back.jpg',
    '/presenting.png',
    '/man2.png',
    '/man3.png',
    '/man4.png',
    '/about.png',
    'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap',
    'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap',
    'https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap'
];

// Dynamic assets to cache on demand
const DYNAMIC_ASSETS = [
    '/website_assets/vendor/aos/aos.css',
    '/website_assets/vendor/aos/aos.js',
    '/website_assets/vendor/glightbox/css/glightbox.min.css',
    '/website_assets/vendor/glightbox/js/glightbox.min.js',
    '/website_assets/vendor/swiper/swiper-bundle.min.css',
    '/website_assets/vendor/swiper/swiper-bundle.min.js'
];

// Install event - cache static assets
self.addEventListener('install', event => {
    console.log('Service Worker installing...');
    
    event.waitUntil(
        caches.open(STATIC_CACHE)
            .then(cache => {
                console.log('Caching static assets...');
                return cache.addAll(STATIC_ASSETS);
            })
            .then(() => {
                console.log('Static assets cached successfully');
                return self.skipWaiting();
            })
            .catch(error => {
                console.error('Error caching static assets:', error);
            })
    );
});

// Activate event - clean up old caches
self.addEventListener('activate', event => {
    console.log('Service Worker activating...');
    
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

// Fetch event - implement caching strategies
self.addEventListener('fetch', event => {
    const { request } = event;
    const url = new URL(request.url);
    
    // Skip non-GET requests
    if (request.method !== 'GET') {
        return;
    }
    
    // Skip chrome-extension and other non-http requests
    if (!request.url.startsWith('http')) {
        return;
    }
    
    // Strategy: Cache First for static assets
    if (isStaticAsset(request.url)) {
        event.respondWith(
            caches.match(request)
                .then(response => {
                    if (response) {
                        return response;
                    }
                    
                    return fetch(request)
                        .then(fetchResponse => {
                            // Cache successful responses
                            if (fetchResponse.status === 200) {
                                const responseClone = fetchResponse.clone();
                                caches.open(STATIC_CACHE)
                                    .then(cache => {
                                        cache.put(request, responseClone);
                                    });
                            }
                            return fetchResponse;
                        })
                        .catch(error => {
                            console.error('Fetch failed for static asset:', error);
                            // Return offline page or fallback
                            return new Response('Offline', { status: 503 });
                        });
                })
        );
        return;
    }
    
    // Strategy: Network First for HTML pages
    if (request.headers.get('accept').includes('text/html')) {
        event.respondWith(
            fetch(request)
                .then(response => {
                    // Cache successful responses
                    if (response.status === 200) {
                        const responseClone = response.clone();
                        caches.open(DYNAMIC_CACHE)
                            .then(cache => {
                                cache.put(request, responseClone);
                            });
                    }
                    return response;
                })
                .catch(error => {
                    console.error('Network failed for HTML:', error);
                    // Try to serve from cache
                    return caches.match(request)
                        .then(response => {
                            if (response) {
                                return response;
                            }
                            // Return offline page
                            return caches.match('/')
                                .then(offlineResponse => {
                                    return offlineResponse || new Response('Offline', { status: 503 });
                                });
                        });
                })
        );
        return;
    }
    
    // Strategy: Stale While Revalidate for API calls and other resources
    event.respondWith(
        caches.match(request)
            .then(cachedResponse => {
                const fetchPromise = fetch(request)
                    .then(fetchResponse => {
                        // Cache successful responses
                        if (fetchResponse.status === 200) {
                            const responseClone = fetchResponse.clone();
                            caches.open(DYNAMIC_CACHE)
                                .then(cache => {
                                    cache.put(request, responseClone);
                                });
                        }
                        return fetchResponse;
                    })
                    .catch(error => {
                        console.error('Fetch failed:', error);
                        return cachedResponse;
                    });
                
                // Return cached response immediately if available
                return cachedResponse || fetchPromise;
            })
    );
});

// Helper function to identify static assets
function isStaticAsset(url) {
    const staticExtensions = ['.css', '.js', '.png', '.jpg', '.jpeg', '.gif', '.svg', '.woff', '.woff2', '.ttf', '.eot'];
    const staticPaths = ['/website_assets/', '/vendor/', '/images/', '/css/', '/js/'];
    
    // Check file extensions
    if (staticExtensions.some(ext => url.includes(ext))) {
        return true;
    }
    
    // Check paths
    if (staticPaths.some(path => url.includes(path))) {
        return true;
    }
    
    // Check for Google Fonts
    if (url.includes('fonts.googleapis.com') || url.includes('fonts.gstatic.com')) {
        return true;
    }
    
    return false;
}

// Background sync for offline form submissions
self.addEventListener('sync', event => {
    if (event.tag === 'background-sync') {
        event.waitUntil(doBackgroundSync());
    }
});

function doBackgroundSync() {
    // Handle offline form submissions
    return Promise.resolve();
}

// Push notifications (if needed in the future)
self.addEventListener('push', event => {
    if (event.data) {
        const data = event.data.json();
        const options = {
            body: data.body,
            icon: '/website_assets/img/logo-no.png',
            badge: '/website_assets/img/logo-no.png',
            vibrate: [100, 50, 100],
            data: {
                dateOfArrival: Date.now(),
                primaryKey: 1
            }
        };
        
        event.waitUntil(
            self.registration.showNotification(data.title, options)
        );
    }
});

// Notification click handler
self.addEventListener('notificationclick', event => {
    event.notification.close();
    
    event.waitUntil(
        clients.openWindow('/')
    );
});