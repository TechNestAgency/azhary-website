// Critical JavaScript - Essential functionality only
(function() {
  'use strict';

  // Lazy loading for images
  function initLazyLoading() {
    if ('IntersectionObserver' in window) {
      const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const img = entry.target;
            if (img.dataset.src) {
              img.src = img.dataset.src;
              img.classList.add('loaded');
              img.removeAttribute('data-src');
              imageObserver.unobserve(img);
            }
          }
        });
      });

      document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
      });
    }
  }

  // Mobile navigation toggle
  function initMobileNav() {
    const mobileToggle = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    if (mobileToggle && navbarCollapse) {
      mobileToggle.addEventListener('click', function() {
        navbarCollapse.classList.toggle('show');
      });

      // Close mobile menu when clicking outside
      document.addEventListener('click', function(e) {
        if (!mobileToggle.contains(e.target) && !navbarCollapse.contains(e.target)) {
          navbarCollapse.classList.remove('show');
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

  // Initialize critical functionality when DOM is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function() {
      initLazyLoading();
      initMobileNav();
      initSmoothScrolling();
    });
  } else {
    // DOM is already ready
    initLazyLoading();
    initMobileNav();
    initSmoothScrolling();
  }

  // Load non-critical JavaScript after page load
  window.addEventListener('load', function() {
    // Load additional scripts asynchronously
    const script = document.createElement('script');
    script.src = '/website_assets/js/optimized.js';
    script.async = true;
    document.head.appendChild(script);
  });

})();
