/**
 * Optimized JavaScript for Azhary Academy
 * Performance & Accessibility Focused
 */

(function() {
  'use strict';

  // Performance optimization: Use requestAnimationFrame for smooth animations
  const raf = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function(callback) { setTimeout(callback, 16); };

  // Utility functions
  const $ = (selector) => document.querySelector(selector);
  const $$ = (selector) => document.querySelectorAll(selector);

  // Debounce function for performance
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

  // Throttle function for performance
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

  // Intersection Observer for lazy loading and animations
  function createIntersectionObserver(callback, options = {}) {
    if (!('IntersectionObserver' in window)) {
      // Fallback for older browsers
      return {
        observe: () => {},
        unobserve: () => {}
      };
    }
    return new IntersectionObserver(callback, {
      threshold: 0.1,
      rootMargin: '50px',
      ...options
    });
  }

  // Lazy loading for images
  function initLazyLoading() {
    const imageObserver = createIntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          if (img.dataset.src) {
            img.src = img.dataset.src;
            img.classList.remove('lazy');
            imageObserver.unobserve(img);
          }
        }
      });
    });

    const lazyImages = $$('img[data-src]');
    lazyImages.forEach(img => imageObserver.observe(img));
  }

  // Counter animation with performance optimization
  function animateCounter(element, target, duration = 2000) {
    const start = 0;
    const increment = target / (duration / 16);
    let current = start;
    
    function updateCounter() {
      current += increment;
      if (current >= target) {
        current = target;
        element.textContent = Math.floor(current);
        return;
      }
      element.textContent = Math.floor(current);
      raf(updateCounter);
    }
    
    raf(updateCounter);
  }

  // Live counter updates
  function startLiveCounter(element, baseTarget, increment) {
    let currentValue = baseTarget;
    
    setInterval(() => {
      currentValue += increment;
      element.textContent = Math.floor(currentValue);
    }, 3000);
  }

  // Statistics counter initialization
  function initStatisticsCounters() {
    const statObserver = createIntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const counter = entry.target.querySelector('.counter');
          if (counter && !counter.classList.contains('animated')) {
            const target = parseInt(counter.dataset.target);
            const isLive = counter.dataset.live === 'true';
            const liveIncrement = parseInt(counter.dataset.liveIncrement) || 1;
            
            counter.classList.add('animated');
            animateCounter(counter, target);
            
            if (isLive) {
              setTimeout(() => {
                startLiveCounter(counter, target, liveIncrement);
              }, 2000);
            }
          }
        }
      });
    });

    const statCards = $$('.stat-card');
    statCards.forEach(card => statObserver.observe(card));
  }

  // Navigation improvements
  function initNavigation() {
    const navbar = $('#fixedHeader');
    const mobileToggle = $('.mobile-nav-toggle');
    const navMenu = $('#mainNavbar');

    // Smooth scroll shadow effect
    const handleScroll = throttle(() => {
      if (navbar) {
        if (window.scrollY > 10) {
          navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
        } else {
          navbar.style.boxShadow = 'none';
        }
      }
    }, 16);

    window.addEventListener('scroll', handleScroll);

    // Mobile navigation
    if (mobileToggle && navMenu) {
      mobileToggle.addEventListener('click', () => {
        document.body.classList.toggle('mobile-nav-active');
        mobileToggle.classList.toggle('bi-list');
        mobileToggle.classList.toggle('bi-x');
      });

      // Close mobile nav on link click
      const navLinks = navMenu.querySelectorAll('a');
      navLinks.forEach(link => {
        link.addEventListener('click', () => {
          if (document.body.classList.contains('mobile-nav-active')) {
            document.body.classList.remove('mobile-nav-active');
            mobileToggle.classList.add('bi-list');
            mobileToggle.classList.remove('bi-x');
          }
        });
      });
    }

    // Bootstrap dropdown compatibility - don't override Bootstrap's dropdown system
    // Just ensure proper ARIA attributes for accessibility
    const dropdowns = $$('.dropdown-toggle');
    dropdowns.forEach(dropdown => {
      // Add proper ARIA attributes if not already present
      if (!dropdown.getAttribute('aria-expanded')) {
        dropdown.setAttribute('aria-expanded', 'false');
      }
      if (!dropdown.getAttribute('aria-haspopup')) {
        dropdown.setAttribute('aria-haspopup', 'true');
      }
    });
  }

  // Scroll to top functionality
  function initScrollToTop() {
    const scrollTop = $('#scroll-top');
    
    if (scrollTop) {
      const handleScrollTop = throttle(() => {
        if (window.scrollY > 100) {
          scrollTop.classList.add('active');
        } else {
          scrollTop.classList.remove('active');
        }
      }, 16);

      window.addEventListener('scroll', handleScrollTop);

      scrollTop.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    }
  }

  // Accessibility improvements
  function initAccessibility() {
    // Add ARIA labels to interactive elements
    const buttons = $$('button:not([aria-label])');
    buttons.forEach(button => {
      if (button.textContent.trim()) {
        button.setAttribute('aria-label', button.textContent.trim());
      }
    });

    // Improve form accessibility
    const forms = $$('form');
    forms.forEach(form => {
      const inputs = form.querySelectorAll('input, textarea, select');
      inputs.forEach(input => {
        if (!input.id && input.name) {
          input.id = input.name;
        }
        if (input.type !== 'hidden' && !input.getAttribute('aria-describedby')) {
          const label = form.querySelector(`label[for="${input.id}"]`);
          if (label) {
            input.setAttribute('aria-describedby', `${input.id}-help`);
          }
        }
      });
    });

    // Keyboard navigation improvements
    const focusableElements = 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';
    
    // Trap focus in modals
    function trapFocus(element) {
      const focusableContent = element.querySelectorAll(focusableElements);
      const firstFocusableElement = focusableContent[0];
      const lastFocusableElement = focusableContent[focusableContent.length - 1];
      
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Tab') {
          if (e.shiftKey) {
            if (document.activeElement === firstFocusableElement) {
              lastFocusableElement.focus();
              e.preventDefault();
            }
          } else {
            if (document.activeElement === lastFocusableElement) {
              firstFocusableElement.focus();
              e.preventDefault();
            }
          }
        }
      });
    }

    // Apply focus trap to modals
    const modals = $$('.modal');
    modals.forEach(modal => {
      if (modal.style.display === 'block') {
        trapFocus(modal);
      }
    });
  }

  // Smooth scrolling for internal anchor links only
  function initSmoothScrolling() {
    const anchorLinks = $$('a[href^="#"]');
    anchorLinks.forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        // Only prevent default for internal anchor links
        const href = this.getAttribute('href');
        if (href && href.startsWith('#') && href !== '#') {
          e.preventDefault();
          const target = $(href);
          if (target) {
            target.scrollIntoView({
              behavior: 'smooth',
              block: 'start'
            });
          }
        }
      });
    });
  }

  // Performance monitoring
  function initPerformanceMonitoring() {
    // Monitor Core Web Vitals
    if ('PerformanceObserver' in window) {
      try {
        const observer = new PerformanceObserver((list) => {
          for (const entry of list.getEntries()) {
            if (entry.entryType === 'largest-contentful-paint') {
              console.log('LCP:', entry.startTime);
            }
            if (entry.entryType === 'first-input') {
              console.log('FID:', entry.processingStart - entry.startTime);
            }
            if (entry.entryType === 'layout-shift') {
              console.log('CLS:', entry.value);
            }
          }
        });
        
        observer.observe({ entryTypes: ['largest-contentful-paint', 'first-input', 'layout-shift'] });
      } catch (e) {
        console.warn('Performance monitoring not supported');
      }
    }
  }

  // Preloader functionality - Disabled to prevent loading issues
  function initPreloader() {
    // Preloader disabled to prevent loading spinner issues
    // const preloader = $('#preloader');
    // if (preloader) {
    //   preloader.remove();
    // }
  }

  // Carousel improvements
  function initCarousels() {
    const carousels = $$('.carousel');
    carousels.forEach(carousel => {
      const slides = carousel.querySelectorAll('.carousel-item');
      const indicators = carousel.querySelectorAll('.carousel-indicators button');
      const prevBtn = carousel.querySelector('.carousel-control-prev');
      const nextBtn = carousel.querySelector('.carousel-control-next');
      
      let currentSlide = 0;
      const totalSlides = slides.length;
      
      function showSlide(index) {
        slides.forEach((slide, i) => {
          slide.classList.toggle('active', i === index);
        });
        
        indicators.forEach((indicator, i) => {
          indicator.classList.toggle('active', i === index);
        });
        
        currentSlide = index;
      }
      
      function nextSlide() {
        showSlide((currentSlide + 1) % totalSlides);
      }
      
      function prevSlide() {
        showSlide((currentSlide - 1 + totalSlides) % totalSlides);
      }
      
      // Auto-play
      let autoplayInterval;
      function startAutoplay() {
        autoplayInterval = setInterval(nextSlide, 5000);
      }
      
      function stopAutoplay() {
        clearInterval(autoplayInterval);
      }
      
      // Event listeners
      if (nextBtn) nextBtn.addEventListener('click', nextSlide);
      if (prevBtn) prevBtn.addEventListener('click', prevSlide);
      
      indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => showSlide(index));
      });
      
      // Pause autoplay on hover
      carousel.addEventListener('mouseenter', stopAutoplay);
      carousel.addEventListener('mouseleave', startAutoplay);
      
      // Start autoplay
      startAutoplay();
    });
  }

  // Form validation and improvements
  function initFormValidation() {
    const forms = $$('form');
    forms.forEach(form => {
      const inputs = form.querySelectorAll('input, textarea, select');
      
      inputs.forEach(input => {
        // Real-time validation
        input.addEventListener('blur', () => {
          validateField(input);
        });
        
        input.addEventListener('input', debounce(() => {
          validateField(input);
        }, 300));
      });
      
      // Form submission
      form.addEventListener('submit', (e) => {
        const isValid = validateForm(form);
        if (!isValid) {
          e.preventDefault();
        }
      });
    });
  }

  function validateField(field) {
    const value = field.value.trim();
    const type = field.type;
    const required = field.hasAttribute('required');
    
    let isValid = true;
    let message = '';
    
    // Required field validation
    if (required && !value) {
      isValid = false;
      message = 'This field is required';
    }
    
    // Email validation
    if (type === 'email' && value) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(value)) {
        isValid = false;
        message = 'Please enter a valid email address';
      }
    }
    
    // Phone validation
    if (type === 'tel' && value) {
      const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
      if (!phoneRegex.test(value.replace(/\s/g, ''))) {
        isValid = false;
        message = 'Please enter a valid phone number';
      }
    }
    
    // Update field state
    updateFieldState(field, isValid, message);
  }

  function validateForm(form) {
    const inputs = form.querySelectorAll('input, textarea, select');
    let isValid = true;
    
    inputs.forEach(input => {
      if (!validateField(input)) {
        isValid = false;
      }
    });
    
    return isValid;
  }

  function updateFieldState(field, isValid, message) {
    const container = field.closest('.form-group') || field.parentElement;
    const existingMessage = container.querySelector('.error-message');
    
    if (existingMessage) {
      existingMessage.remove();
    }
    
    field.classList.toggle('is-invalid', !isValid);
    field.classList.toggle('is-valid', isValid && field.value.trim());
    
    if (!isValid && message) {
      const errorDiv = document.createElement('div');
      errorDiv.className = 'error-message text-danger small mt-1';
      errorDiv.textContent = message;
      container.appendChild(errorDiv);
    }
  }

  // Initialize everything when DOM is ready
  function init() {
    // Initialize core functionality
    initLazyLoading();
    initNavigation();
    initScrollToTop();
    initAccessibility();
    initSmoothScrolling();
    initPreloader();
    initCarousels();
    initFormValidation();
    initStatisticsCounters();
    initPerformanceMonitoring();
    
    // Add loading states only for form submit buttons
    const submitButtons = $$('button[type="submit"], .btn[type="submit"], form .btn-primary');
    submitButtons.forEach(button => {
      button.addEventListener('click', function(e) {
        // Only show loading for actual form submissions
        if (this.closest('form') && !this.classList.contains('loading')) {
          this.classList.add('loading');
          const originalText = this.innerHTML;
          this.innerHTML = '<span class="loading"></span> Loading...';
          
          // Remove loading state after a delay (simulate async operation)
          setTimeout(() => {
            this.classList.remove('loading');
            this.innerHTML = originalText;
          }, 2000);
        }
      });
    });
  }

  // Initialize when DOM is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

  // Export functions for global access if needed
  window.AzharyAcademy = {
    animateCounter,
    initLazyLoading,
    initStatisticsCounters,
    debounce,
    throttle
  };

})(); 