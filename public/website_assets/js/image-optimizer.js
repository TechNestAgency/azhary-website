// Image Optimization Script for Azhary Academy - Server Safe Version
(function() {
    'use strict';

    // Check if browser supports modern image formats
    const supportsWebP = () => {
        const canvas = document.createElement('canvas');
        canvas.width = 1;
        canvas.height = 1;
        return canvas.toDataURL('image/webp').indexOf('data:image/webp') === 0;
    };

    const supportsAVIF = () => {
        const canvas = document.createElement('canvas');
        canvas.width = 1;
        canvas.height = 1;
        return canvas.toDataURL('image/avif').indexOf('data:image/avif') === 0;
    };

    // Optimize images based on device capabilities - Server Safe
    function optimizeImages() {
        const images = document.querySelectorAll('img');
        const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
        const isLowEndDevice = navigator.hardwareConcurrency && navigator.hardwareConcurrency <= 2;
        
        images.forEach(img => {
            // Skip if already optimized
            if (img.dataset.optimized) return;
            
            // Ensure image is visible
            img.style.display = '';
            img.style.visibility = 'visible';
            img.style.opacity = '1';
            
            // Only add lazy loading to images that explicitly have data-src
            if (!img.hasAttribute('loading') && img.dataset.src && !img.src) {
                img.loading = 'lazy';
            }
            
            // Add decoding optimization only if image has src
            if (!img.hasAttribute('decoding') && img.src) {
                img.decoding = 'async';
            }
            
            // Optimize for mobile devices
            if (isMobile) {
                img.style.imageRendering = 'optimizeSpeed';
                
                // Reduce quality for low-end devices
                if (isLowEndDevice) {
                    img.style.filter = 'contrast(1.1) saturate(0.9)';
                }
            }
            
            // Add error handling - but don't hide images on server
            img.addEventListener('error', function() {
                console.warn('Failed to load image:', this.src);
                // Don't hide images on server - just log the error
            });
            
            // Mark as optimized
            img.dataset.optimized = 'true';
        });
    }

    // Lazy load images with Intersection Observer
    function initLazyLoading() {
        if (!('IntersectionObserver' in window)) {
            // Fallback for older browsers
            const lazyImages = document.querySelectorAll('img[loading="lazy"]');
            lazyImages.forEach(img => {
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                }
            });
            return;
        }

        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    
                    // Load the image
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                    }
                    
                    // Add fade-in effect only if image has data-src
                    if (img.dataset.src) {
                        img.style.opacity = '0';
                        img.style.transition = 'opacity 0.3s ease';
                        
                        img.onload = function() {
                            this.style.opacity = '1';
                        };
                    }
                    
                    observer.unobserve(img);
                }
            });
        }, {
            rootMargin: '50px 0px',
            threshold: 0.01
        });

        // Observe only images that have data-src attribute (lazy loaded images)
        document.querySelectorAll('img[loading="lazy"][data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // Preload critical images
    function preloadCriticalImages() {
        const criticalImages = [
            '/website_assets/img/logo-no.png',
            '/hero-back.jpg',
            '/presenting.png'
        ];

        criticalImages.forEach(src => {
            const link = document.createElement('link');
            link.rel = 'preload';
            link.as = 'image';
            link.href = src;
            document.head.appendChild(link);
        });
    }

    // Optimize background images
    function optimizeBackgroundImages() {
        const elements = document.querySelectorAll('[style*="background-image"]');
        elements.forEach(element => {
            const style = element.style.backgroundImage;
            if (style && style.includes('url(')) {
                // Add will-change for better performance
                element.style.willChange = 'auto';
                element.style.transform = 'translateZ(0)';
            }
        });
    }

    // Initialize image optimizations
    function init() {
        optimizeImages();
        initLazyLoading();
        preloadCriticalImages();
        optimizeBackgroundImages();
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    // Re-optimize images when new content is added
    const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
            if (mutation.type === 'childList') {
                mutation.addedNodes.forEach((node) => {
                    if (node.nodeType === 1) { // Element node
                        const images = node.querySelectorAll ? node.querySelectorAll('img') : [];
                        images.forEach(img => {
                            if (!img.dataset.optimized) {
                                optimizeImages();
                            }
                        });
                    }
                });
            }
        });
    });

    observer.observe(document.body, {
        childList: true,
        subtree: true
    });

})();
