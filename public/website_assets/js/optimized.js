/**
 * Optimized JavaScript for Azhary Academy
 * Performance-focused with minimal dependencies
 */

(function() {
    'use strict';

    // Performance optimization: Use requestAnimationFrame for smooth animations
    const raf = window.requestAnimationFrame || window.setTimeout;
    
    // Throttle function for scroll events
    function throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }

    // Debounce function for resize events
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    // Optimized scroll handler
    function handleScroll() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const header = document.getElementById('fixedHeader');
        const scrollTopBtn = document.getElementById('scroll-top');
        
        // Header shadow effect
        if (header) {
            header.style.boxShadow = scrollTop > 10 ? '0 2px 20px rgba(0, 0, 0, 0.1)' : 'none';
        }
        
        // Scroll to top button
        if (scrollTopBtn) {
            if (scrollTop > 300) {
                scrollTopBtn.classList.add('show');
            } else {
                scrollTopBtn.classList.remove('show');
            }
        }
    }

    // Optimized counter animation
    function animateCounter(element, target, duration = 2000) {
        const start = performance.now();
        const startValue = 0;
        
        function updateCounter(currentTime) {
            const elapsed = currentTime - start;
            const progress = Math.min(elapsed / duration, 1);
            
            // Easing function for smooth animation
            const easeOutQuart = 1 - Math.pow(1 - progress, 4);
            const currentValue = Math.floor(startValue + (target - startValue) * easeOutQuart);
            
            element.textContent = currentValue;
            
            if (progress < 1) {
                raf(updateCounter);
            }
        }
        
        raf(updateCounter);
    }

    // Intersection Observer for counter animations
    function initCounterAnimations() {
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

        // Observe all stat cards
        document.querySelectorAll('.stat-card').forEach(card => {
            counterObserver.observe(card);
        });
    }

    // Optimized image lazy loading
    function initLazyLoading() {
        if (!('IntersectionObserver' in window)) return;
        
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        observer.unobserve(img);
                    }
                }
            });
        });

        // Observe lazy images
        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // Smooth scroll for anchor links
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    const headerHeight = document.querySelector('.fixed-top')?.offsetHeight || 0;
                    const targetPosition = target.offsetTop - headerHeight - 20;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // Optimized loading spinner
    function initLoadingSpinner() {
        const loadingSpinner = document.getElementById('loading-spinner');
        if (!loadingSpinner) return;
        
        // Hide spinner after critical content loads
        function hideSpinner() {
            loadingSpinner.classList.add('hidden');
            setTimeout(() => {
                if (loadingSpinner.parentNode) {
                    loadingSpinner.parentNode.removeChild(loadingSpinner);
                }
            }, 500);
        }
        
        // Hide spinner after a short delay or when page is fully loaded
        setTimeout(hideSpinner, 1500);
        window.addEventListener('load', hideSpinner);
    }

    // Initialize Swiper with optimized settings
    function initSwiper() {
        if (typeof Swiper === 'undefined') return;
        
        // Teachers slider
        const teachersSlider = document.querySelector('.teachers-slider');
        if (teachersSlider) {
            const config = JSON.parse(teachersSlider.querySelector('.swiper-config')?.textContent || '{}');
            new Swiper(teachersSlider, {
                ...config,
                lazy: {
                    loadPrevNext: true,
                },
                watchSlidesProgress: true,
                watchSlidesVisibility: true,
            });
        }
        
        // Testimonials slider
        const testimonialsSlider = document.querySelector('.testimonials-slider');
        if (testimonialsSlider) {
            const config = JSON.parse(testimonialsSlider.querySelector('.swiper-config')?.textContent || '{}');
            new Swiper(testimonialsSlider, {
                ...config,
                lazy: {
                    loadPrevNext: true,
                },
                watchSlidesProgress: true,
                watchSlidesVisibility: true,
            });
        }
    }

    // Initialize AOS with optimized settings
    function initAOS() {
        if (typeof AOS === 'undefined') return;
        
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100,
            disable: function() {
                // Disable AOS on mobile for better performance
                return window.innerWidth < 768;
            }
        });
    }

    // Initialize GLightbox with optimized settings
    function initGLightbox() {
        if (typeof GLightbox === 'undefined') return;
        
        GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: false,
            autoplayVideos: false,
        });
    }

    // Mobile performance optimizations
    function initMobileOptimizations() {
        const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
        
        if (isMobile) {
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
    }

    // Initialize all components when DOM is ready
    function init() {
        // Critical functionality - load immediately
        initLoadingSpinner();
        initSmoothScroll();
        initMobileOptimizations();
        
        // Add scroll listener with throttling
        window.addEventListener('scroll', throttle(handleScroll, 16), { passive: true });
        
        // Add resize listener with debouncing
        window.addEventListener('resize', debounce(() => {
            // Handle resize events
        }, 250));
        
        // Non-critical functionality - load after a short delay
        setTimeout(() => {
            initCounterAnimations();
            initLazyLoading();
            initSwiper();
            initAOS();
            initGLightbox();
        }, 100);
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    // Service Worker registration for caching
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register('/sw.js')
                .then(function(registration) {
                    console.log('Service Worker registered successfully:', registration.scope);
                })
                .catch(function(error) {
                    console.log('Service Worker registration failed:', error);
                });
        });
    }

})();