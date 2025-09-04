// Critical JavaScript for Azhary Academy - Above-the-fold functionality only
(function() {
    'use strict';

    // Performance optimizations
    const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    const isLowEndDevice = navigator.hardwareConcurrency && navigator.hardwareConcurrency <= 2;
    
    // Optimized scroll handler with throttling
    let scrollTimeout;
    function optimizedScrollHandler() {
        if (scrollTimeout) {
            clearTimeout(scrollTimeout);
        }
        scrollTimeout = setTimeout(handleScroll, 16); // ~60fps
    }
    
    function handleScroll() {
        const header = document.getElementById('fixedHeader');
        if (header) {
            header.style.boxShadow = window.scrollY > 10 ? '0 2px 20px rgba(0, 0, 0, 0.1)' : 'none';
        }
    }
    
    // Optimized loading spinner handler
    function hideLoadingSpinner() {
        const loadingSpinner = document.getElementById('loading-spinner');
        if (loadingSpinner) {
            loadingSpinner.classList.add('hidden');
            setTimeout(() => {
                if (loadingSpinner.parentNode) {
                    loadingSpinner.parentNode.removeChild(loadingSpinner);
                }
            }, 500);
        }
    }
    
    // Optimized counter animation with Intersection Observer
    function initCounterAnimation() {
        if (!('IntersectionObserver' in window)) return;
        
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                    const counter = entry.target.querySelector('.counter');
                    if (counter) {
                        const target = parseInt(counter.getAttribute('data-target')) || 0;
                        animateCounter(counter, target);
                        entry.target.classList.add('animated');
                    }
                }
            });
        }, { threshold: 0.3 });

        document.querySelectorAll('.stat-card').forEach(card => {
            counterObserver.observe(card);
        });
    }
    
    function animateCounter(element, target) {
        const duration = 1500;
        const increment = target / (duration / 16);
        let current = 0;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = Math.floor(current);
        }, 16);
    }
    
    // Optimized image lazy loading - Server Safe
    function initLazyLoading() {
        if (!('IntersectionObserver' in window)) return;
        
        // Only observe images that have data-src attribute (lazy loaded images)
        const lazyImages = document.querySelectorAll('img[loading="lazy"][data-src]:not(.hero img)');
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src && !img.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                    }
                    img.classList.remove('lazy');
                    observer.unobserve(img);
                }
            });
        });
        
        lazyImages.forEach(img => imageObserver.observe(img));
    }
    
    // Mobile-specific optimizations
    function initMobileOptimizations() {
        if (!isMobile) return;
        
        // Reduce animation complexity on mobile
        const animatedElements = document.querySelectorAll('.stat-card, .testimonial-card, .teacher-profile-card');
        animatedElements.forEach(el => {
            el.style.transition = 'none';
        });
        
        // Optimize images for mobile
        const images = document.querySelectorAll('img');
        images.forEach(img => {
            img.style.imageRendering = 'optimizeSpeed';
            if (img.closest('.hero') || img.closest('.carousel-item')) {
                img.loading = 'eager';
            }
        });
    }
    
    // Initialize critical functionality
    function init() {
        // Hide loading spinner after critical content loads
        setTimeout(hideLoadingSpinner, 1500);
        
        // Initialize scroll handler
        window.addEventListener('scroll', optimizedScrollHandler, { passive: true });
        
        // Initialize counter animation
        initCounterAnimation();
        
        // Initialize lazy loading
        initLazyLoading();
        
        // Initialize mobile optimizations
        initMobileOptimizations();
        
        // Initialize carousel if available
        const heroCarousel = document.getElementById('heroCarousel');
        if (heroCarousel && typeof bootstrap !== 'undefined') {
            const bsCarousel = new bootstrap.Carousel(heroCarousel, {
                interval: isMobile ? 3000 : 4000,
                ride: true,
                wrap: true,
                touch: true
            });
        }
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
    
    // Fallback: hide spinner when page is fully loaded
    window.addEventListener('load', hideLoadingSpinner);
    
})();