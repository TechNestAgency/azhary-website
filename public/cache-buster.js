/**
 * Cache Buster for Azhary Academy
 * Only runs when explicitly called to avoid infinite reloads
 */

(function() {
    'use strict';
    
    // Only run if explicitly requested
    if (!window.location.search.includes('clear-cache=true')) {
        return;
    }
    
    console.log('Cache buster activated...');
    
    // Clear all caches
    if ('caches' in window) {
        caches.keys().then(function(cacheNames) {
            return Promise.all(
                cacheNames.map(function(cacheName) {
                    console.log('Deleting cache:', cacheName);
                    return caches.delete(cacheName);
                })
            );
        }).then(function() {
            console.log('All caches cleared');
            
            // Clear service worker
            if ('serviceWorker' in navigator) {
                navigator.serviceWorker.getRegistrations().then(function(registrations) {
                    return Promise.all(
                        registrations.map(function(registration) {
                            console.log('Unregistering service worker:', registration.scope);
                            return registration.unregister();
                        })
                    );
                }).then(function() {
                    console.log('Service workers cleared');
                    
                    // Clear storage
                    localStorage.clear();
                    sessionStorage.clear();
                    
                    // Remove cache-buster parameter and reload
                    const url = new URL(window.location);
                    url.searchParams.delete('clear-cache');
                    window.location.href = url.toString();
                });
            } else {
                // Clear storage and reload
                localStorage.clear();
                sessionStorage.clear();
                
                const url = new URL(window.location);
                url.searchParams.delete('clear-cache');
                window.location.href = url.toString();
            }
        });
    } else {
        // Fallback for browsers without cache API
        localStorage.clear();
        sessionStorage.clear();
        
        const url = new URL(window.location);
        url.searchParams.delete('clear-cache');
        window.location.href = url.toString();
    }
})();
