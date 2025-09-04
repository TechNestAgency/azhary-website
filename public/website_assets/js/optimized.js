// Optimized JavaScript for Azhary Academy - Non-critical functionality
(function() {
    'use strict';

    // Performance detection
    const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    const isLowEndDevice = navigator.hardwareConcurrency && navigator.hardwareConcurrency <= 2;
    
    // Initialize AOS (Animate On Scroll) with performance optimizations
    function initAOS() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: isMobile ? 600 : 800,
                easing: 'ease-out-cubic',
                once: true,
                offset: 100,
                delay: isMobile ? 0 : 50,
                disable: isLowEndDevice ? true : false
            });
        }
    }
    
    // Initialize Swiper sliders with performance optimizations
    function initSwipers() {
        // Teachers slider
        const teachersSlider = document.querySelector('.teachers-slider');
        if (teachersSlider && typeof Swiper !== 'undefined') {
            const config = JSON.parse(teachersSlider.querySelector('.swiper-config').textContent);
            config.speed = isMobile ? 600 : 800;
            config.autoplay.delay = isMobile ? 5000 : 4000;
            
            new Swiper(teachersSlider, config);
        }
        
        // Testimonials slider
        const testimonialsSlider = document.querySelector('.testimonials-slider');
        if (testimonialsSlider && typeof Swiper !== 'undefined') {
            const config = JSON.parse(testimonialsSlider.querySelector('.swiper-config').textContent);
            config.speed = isMobile ? 600 : 800;
            config.autoplay.delay = isMobile ? 6000 : 5000;
            
            new Swiper(testimonialsSlider, config);
        }
    }
    
    // Initialize GLightbox with performance optimizations
    function initGLightbox() {
        if (typeof GLightbox !== 'undefined') {
            GLightbox({
                selector: '.glightbox',
                touchNavigation: true,
                loop: false,
                autoplayVideos: false,
                skin: 'modern',
                width: '90%',
                height: '90%'
            });
        }
    }
    
    // Optimized scroll-to-top functionality
    function initScrollToTop() {
        const scrollTopBtn = document.getElementById('scroll-top');
        if (!scrollTopBtn) return;
        
        let ticking = false;
        
        function updateScrollTop() {
            const scrollY = window.scrollY;
            if (scrollY > 300) {
                scrollTopBtn.style.display = 'flex';
                scrollTopBtn.style.opacity = '1';
            } else {
                scrollTopBtn.style.opacity = '0';
                setTimeout(() => {
                    if (window.scrollY <= 300) {
                        scrollTopBtn.style.display = 'none';
                    }
                }, 300);
            }
            ticking = false;
        }
        
        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(updateScrollTop);
                ticking = true;
            }
        }
        
        window.addEventListener('scroll', requestTick, { passive: true });
        
        scrollTopBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // Optimized WhatsApp float button
    function initWhatsAppFloat() {
        const whatsappFloat = document.getElementById('whatsapp-float');
        if (!whatsappFloat) return;
        
        let ticking = false;
        
        function updateWhatsAppFloat() {
            const scrollY = window.scrollY;
            if (scrollY > 500) {
                whatsappFloat.style.display = 'block';
                whatsappFloat.style.opacity = '1';
            } else {
                whatsappFloat.style.opacity = '0';
                setTimeout(() => {
                    if (window.scrollY <= 500) {
                        whatsappFloat.style.display = 'none';
                    }
                }, 300);
            }
            ticking = false;
        }
        
        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(updateWhatsAppFloat);
                ticking = true;
            }
        }
        
        window.addEventListener('scroll', requestTick, { passive: true });
    }
    
    // Optimized form validation
    function initFormValidation() {
        const forms = document.querySelectorAll('.needs-validation');
        forms.forEach(form => {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            });
        });
    }
    
    // Optimized dropdown functionality
    function initDropdowns() {
        const dropdownToggleList = [].slice.call(document.querySelectorAll('[data-bs-toggle="dropdown"]'));
        const dropdownList = dropdownToggleList.map(function (dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl);
        });
        
        // Add click event listeners to dropdown items
        document.querySelectorAll('.dropdown-item').forEach(function(item) {
            item.addEventListener('click', function(e) {
                const dropdown = bootstrap.Dropdown.getInstance(this.closest('.dropdown').querySelector('[data-bs-toggle="dropdown"]'));
                if (dropdown) {
                    dropdown.hide();
                }
            });
        });
    }
    
    // Optimized language switcher
    function initLanguageSwitcher() {
        const languageLinks = document.querySelectorAll('.language-switcher a');
        languageLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const locale = this.getAttribute('href').split('/').pop();
                
                // Show loading state
                this.style.opacity = '0.5';
                this.style.pointerEvents = 'none';
                
                // Make request
                fetch(`/language/${locale}`, {
                    method: 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.reload();
                    }
                })
                .catch(error => {
                    console.error('Language switch error:', error);
                    // Reset button state
                    this.style.opacity = '1';
                    this.style.pointerEvents = 'auto';
                });
            });
        });
    }
    
    // Optimized preloader
    function initPreloader() {
        const preloader = document.getElementById('preloader');
        if (preloader) {
            window.addEventListener('load', function() {
                preloader.style.opacity = '0';
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 500);
            });
        }
    }
    
    // Initialize Bootstrap carousel with mobile-specific fixes
    function initBootstrapCarousel() {
        const heroCarousel = document.getElementById('heroCarousel');
        if (heroCarousel && typeof bootstrap !== 'undefined') {
            // Check if carousel is already initialized
            const existingCarousel = bootstrap.Carousel.getInstance(heroCarousel);
            if (!existingCarousel) {
                const carouselOptions = {
                    interval: isMobile ? 4000 : 5000,
                    ride: 'carousel',
                    wrap: true,
                    touch: true,
                    keyboard: true,
                    pause: 'hover'
                };
                
                const bsCarousel = new bootstrap.Carousel(heroCarousel, carouselOptions);
                
                // Additional mobile fix - ensure carousel starts
                if (isMobile) {
                    setTimeout(() => {
                        if (bsCarousel && !bsCarousel._isSliding) {
                            bsCarousel.cycle();
                        }
                    }, 500);
                    
                    // Add touch event listener to ensure carousel starts on first touch
                    heroCarousel.addEventListener('touchstart', function() {
                        if (bsCarousel && !bsCarousel._isSliding) {
                            bsCarousel.cycle();
                        }
                    }, { once: true, passive: true });
                    
                    // Also add click event as fallback
                    heroCarousel.addEventListener('click', function() {
                        if (bsCarousel && !bsCarousel._isSliding) {
                            bsCarousel.cycle();
                        }
                    }, { once: true, passive: true });
                }
            }
        }
    }
    
    // Initialize all non-critical functionality
    function init() {
        // Initialize with delays to prevent blocking
        setTimeout(initAOS, 100);
        setTimeout(initSwipers, 200);
        setTimeout(initGLightbox, 300);
        setTimeout(initBootstrapCarousel, 350); // Initialize carousel early
        setTimeout(initScrollToTop, 400);
        setTimeout(initWhatsAppFloat, 500);
        setTimeout(initFormValidation, 600);
        setTimeout(initDropdowns, 700);
        setTimeout(initLanguageSwitcher, 800);
        setTimeout(initPreloader, 900);
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
    
})();