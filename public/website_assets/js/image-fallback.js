// Image Fallback Script for Azhary Academy - Server Safe
(function() {
    'use strict';

    // Ensure all images are visible on server
    function ensureImagesVisible() {
        const images = document.querySelectorAll('img');
        
        images.forEach(img => {
            // Force visibility
            img.style.display = '';
            img.style.visibility = 'visible';
            img.style.opacity = '1';
            
            // Ensure proper loading
            if (img.src && !img.complete) {
                img.onload = function() {
                    this.style.display = '';
                    this.style.visibility = 'visible';
                    this.style.opacity = '1';
                };
            }
            
            // Handle broken images gracefully
            img.onerror = function() {
                console.warn('Image failed to load:', this.src);
                // Don't hide broken images - just log the error
            };
        });
    }

    // Initialize immediately
    ensureImagesVisible();

    // Re-run on DOM changes
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', ensureImagesVisible);
    }

    // Re-run when new content is added
    const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
            if (mutation.type === 'childList') {
                mutation.addedNodes.forEach((node) => {
                    if (node.nodeType === 1) { // Element node
                        const images = node.querySelectorAll ? node.querySelectorAll('img') : [];
                        images.forEach(img => {
                            img.style.display = '';
                            img.style.visibility = 'visible';
                            img.style.opacity = '1';
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
