// Optimized JavaScript for Azhary Academy - Performance Focused
(function() {
  'use strict';

  // Performance optimization: Use requestIdleCallback for non-critical tasks
  const requestIdleCallback = window.requestIdleCallback || function(cb) {
    return setTimeout(cb, 1);
  };

  // Lazy loading for images
  function initLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src;
          img.classList.add('loaded');
          img.removeAttribute('data-src');
          observer.unobserve(img);
        }
      });
    });

    images.forEach(img => imageObserver.observe(img));
  }

  // Optimized counter animation
  function initCounters() {
    const counters = document.querySelectorAll('.counter');
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
          animateCounter(entry.target);
          entry.target.classList.add('animated');
        }
      });
    });

    counters.forEach(counter => counterObserver.observe(counter));
  }

  function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-target'));
    const duration = 2000;
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

  // Optimized scroll handling
  function initScrollEffects() {
    let ticking = false;
    
    function updateScrollEffects() {
      const header = document.getElementById('fixedHeader');
      if (header) {
        if (window.scrollY > 10) {
          header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
        } else {
          header.style.boxShadow = 'none';
        }
      }

      const scrollTop = document.querySelector('.scroll-top');
      if (scrollTop) {
        if (window.scrollY > 100) {
          scrollTop.classList.add('active');
        } else {
          scrollTop.classList.remove('active');
        }
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

  // Mobile navigation
  function initMobileNav() {
    const mobileNavToggle = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    if (mobileNavToggle && navbarCollapse) {
      mobileNavToggle.addEventListener('click', () => {
        navbarCollapse.classList.toggle('show');
      });

      // Close mobile nav when clicking on links
      const navLinks = navbarCollapse.querySelectorAll('.nav-link');
      navLinks.forEach(link => {
        link.addEventListener('click', () => {
          navbarCollapse.classList.remove('show');
        });
      });
    }
  }

  // Smooth scroll for anchor links
  function initSmoothScroll() {
    const scrollTop = document.querySelector('.scroll-top');
    if (scrollTop) {
      scrollTop.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    }

    // Smooth scroll for anchor links (only for hash links, not language switcher)
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

  // Carousel optimization
  function initCarousel() {
    const carousel = document.getElementById('heroCarousel');
    if (carousel) {
      // Use Intersection Observer to start carousel only when visible
      const carouselObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            // Initialize carousel only when visible
            if (typeof bootstrap !== 'undefined') {
              const bsCarousel = new bootstrap.Carousel(carousel, {
                interval: 2000,
                ride: true,
                wrap: true
              });
              bsCarousel.cycle();
            }
            carouselObserver.unobserve(entry.target);
          }
        });
      });

      carouselObserver.observe(carousel);
    }
  }

  // Preload critical resources
  function preloadCriticalResources() {
    const criticalImages = [
      '{{ asset("website_assets/img/logo-no.png") }}',
      '{{ asset("hero-back.jpg") }}'
    ];

    criticalImages.forEach(src => {
      const link = document.createElement('link');
      link.rel = 'preload';
      link.as = 'image';
      link.href = src;
      document.head.appendChild(link);
    });
  }

  // Language switcher functionality
  function initLanguageSwitcher() {
    const languageLinks = document.querySelectorAll('.language-link');
    
    languageLinks.forEach(link => {
      link.addEventListener('click', function(e) {
        const lang = this.getAttribute('data-lang');
        const href = this.getAttribute('href');
        
        console.log('Language link clicked:', lang, href);
        
        // Allow the default navigation to proceed
        // Don't prevent default - let the link work normally
      });
    });
  }

  // Initialize all functions when DOM is ready
  document.addEventListener('DOMContentLoaded', function() {
    initLazyLoading();
    initCounters();
    initScrollEffects();
    initMobileNav();
    initSmoothScroll();
    initCarousel();
    initLanguageSwitcher();
    preloadCriticalResources();
  });

  // Initialize when DOM is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

  // Service Worker registration for caching
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('/sw.js')
        .then(registration => {
          console.log('SW registered: ', registration);
        })
        .catch(registrationError => {
          console.log('SW registration failed: ', registrationError);
        });
    });
  }

})(); 