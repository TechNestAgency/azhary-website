// Optimized JavaScript for Azhary Academy - Performance Focused
(function() {
  'use strict';

  // Performance optimization: Use requestIdleCallback for non-critical tasks
  const requestIdleCallback = window.requestIdleCallback || function(cb) {
    return setTimeout(cb, 1);
  };

  // Lazy loading for images with Intersection Observer
  function initLazyLoading() {
    if ('IntersectionObserver' in window) {
      const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const img = entry.target;
            if (img.dataset.src) {
              img.src = img.dataset.src;
              img.classList.add('loaded');
              img.removeAttribute('data-src');
              observer.unobserve(img);
            }
          }
        });
      }, { rootMargin: '50px' });

      document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
      });
    }
  }

  // Optimized counter animation with reduced complexity
  function initCounters() {
    const counters = document.querySelectorAll('.counter');
    if (counters.length === 0) return;

    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
          animateCounter(entry.target);
          entry.target.classList.add('animated');
        }
      });
    }, { threshold: 0.3 });

    counters.forEach(counter => counterObserver.observe(counter));
  }

  function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-target')) || 0;
    const duration = 1000; // Reduced from 2000ms
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

  // Optimized scroll handling with throttling
  function initScrollEffects() {
    let ticking = false;
    
    function updateScrollEffects() {
      const header = document.getElementById('fixedHeader');
      if (header) {
        header.style.boxShadow = window.scrollY > 10 ? '0 2px 20px rgba(0, 0, 0, 0.1)' : 'none';
      }

      const scrollTop = document.querySelector('.scroll-top');
      if (scrollTop) {
        scrollTop.classList.toggle('active', window.scrollY > 100);
      }

      ticking = false;
    }

    function requestTick() {
      if (!ticking) {
        requestAnimationFrame(updateScrollEffects);
        ticking = true;
      }
    }

    window.addEventListener('scroll', requestTick, { passive: true });
  }

  // Mobile navigation with performance optimizations
  function initMobileNav() {
    const mobileNavToggle = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    if (mobileNavToggle && navbarCollapse) {
      mobileNavToggle.addEventListener('click', function(e) {
        e.preventDefault();
        navbarCollapse.classList.toggle('show');
      });

      // Close mobile menu when clicking outside
      document.addEventListener('click', function(e) {
        if (!mobileNavToggle.contains(e.target) && !navbarCollapse.contains(e.target)) {
          navbarCollapse.classList.remove('show');
        }
      }, { passive: true });
    }
  }

  // Initialize AOS (Animate On Scroll) with reduced settings
  function initAOS() {
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 600, // Reduced from default
        easing: 'ease-out',
        once: true, // Only animate once
        offset: 50,
        delay: 0,
        disable: 'mobile' // Disable on mobile for performance
      });
    }
  }

  // Initialize Swiper with performance optimizations
  function initSwiper() {
    if (typeof Swiper !== 'undefined') {
      const swiperElements = document.querySelectorAll('.swiper');
      swiperElements.forEach(element => {
        new Swiper(element, {
          slidesPerView: 1,
          spaceBetween: 20,
          loop: false, // Disable loop for performance
          autoplay: {
            delay: 5000,
            disableOnInteraction: false,
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          breakpoints: {
            768: {
              slidesPerView: 2,
            },
            1024: {
              slidesPerView: 3,
            }
          }
        });
      });
    }
  }

  // Initialize GLightbox with reduced features
  function initGLightbox() {
    if (typeof GLightbox !== 'undefined') {
      GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: false,
        autoplayVideos: false,
        plyr: {
          config: {
            hideControls: true
          }
        }
      });
    }
  }

  // Smooth scrolling for anchor links
  function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  }

  // Initialize all functionality when DOM is ready
  function init() {
    // Critical functionality
    initLazyLoading();
    initMobileNav();
    initScrollEffects();
    initSmoothScrolling();
    
    // Non-critical functionality - defer to idle time
    requestIdleCallback(() => {
      initCounters();
      initAOS();
      initSwiper();
      initGLightbox();
    });
  }

  // Initialize when DOM is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

  // Additional optimizations after page load
  window.addEventListener('load', function() {
    // Remove loading classes
    document.body.classList.remove('loading');
    
    // Optimize images that might not have been lazy loaded
    const images = document.querySelectorAll('img:not([data-src])');
    images.forEach(img => {
      if (img.complete && img.naturalWidth === 0) {
        img.style.display = 'none';
      }
    });
  });

})(); 