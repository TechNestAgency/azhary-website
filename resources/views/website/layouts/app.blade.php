<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <!-- Primary Meta Tags -->
  <title>@yield('title', 'Madrassat Azhary - Islamic Education Online')</title>
  <meta name="title" content="@yield('title', 'Madrassat Azhary - Islamic Education Online')">
  <meta name="description" content="@yield('meta_description', 'Learn Quran recitation, tajweed, Arabic language, and Islamic studies online with native French-speaking teachers. Personalized learning for all levels.')">
  <meta name="keywords" content="@yield('meta_keywords', 'Quran online, Islamic studies, Arabic language, French Quran teachers, tajweed, Quran memorization, Islamic education, online Islamic classes')">
  <meta name="author" content="Azhary Academy">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="@yield('title', 'Madrassat Azhary - Islamic Education Online')">
  <meta property="og:description" content="@yield('meta_description', 'Learn Quran recitation, tajweed, Arabic language, and Islamic studies online with native French-speaking teachers. Personalized learning for all levels.')">
  <meta property="og:image" content="@yield('og_image', asset('website_assets/img/hero-main.png'))">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:locale" content="{{ app()->getLocale() }}">
  <meta property="og:site_name" content="Azhary Academy">
  
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="{{ url()->current() }}">
  <meta property="twitter:title" content="@yield('title', 'Madrassat Azhary - Islamic Education Online')">
  <meta property="twitter:description" content="@yield('meta_description', 'Learn Quran recitation, tajweed, Arabic language, and Islamic studies online with native French-speaking teachers. Personalized learning for all levels.')">
  <meta property="twitter:image" content="@yield('og_image', asset('website_assets/img/hero-main.png'))">
  
  <!-- Additional SEO Meta Tags -->
  <meta name="theme-color" content="#02256c">
  <meta name="msapplication-TileColor" content="#02256c">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta name="apple-mobile-web-app-title" content="Azhary Academy">
  
  <!-- Canonical URL -->
  <link rel="canonical" href="{{ url()->current() }}">
  
  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('website_assets/img/logo-no.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('website_assets/img/logo-no.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('website_assets/img/apple-touch-icon.png') }}">
  <link rel="manifest" href="{{ asset('website_assets/manifest.json') }}">
  
  <!-- Preconnect to external domains for performance -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://www.google-analytics.com">
  <link rel="preconnect" href="https://www.googletagmanager.com">
  
  <!-- DNS Prefetch for performance -->
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="dns-prefetch" href="//www.google-analytics.com">
  <link rel="dns-prefetch" href="//www.googletagmanager.com">
  
  <!-- Critical CSS Inline -->
  <style>
    /* IMMEDIATE CONTENT VISIBILITY - CRITICAL */
    html, body {
      display: block !important;
      visibility: visible !important;
      opacity: 1 !important;
      height: auto !important;
      overflow: visible !important;
      margin: 0 !important;
      padding: 0 !important;
    }
    
    /* Force all content to be visible immediately */
    * {
      visibility: visible !important;
      opacity: 1 !important;
    }
    
    /* Critical CSS for above-the-fold content */
    :root {
      --islamic-gold: #d4af37;
      --islamic-green: #228b22;
      --islamic-blue: #1e3a8a;
      --islamic-burgundy: #800020;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Roboto', system-ui, -apple-system, sans-serif;
      line-height: 1.6;
      color: #212529;
      background-color: #ffffff;
      display: block !important;
      visibility: visible !important;
      opacity: 1 !important;
    }
    
    .main {
      padding-top: 140px;
      display: block !important;
      visibility: visible !important;
      opacity: 1 !important;
    }
    
    .navbar {
      background-color: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      transition: all 0.3s ease;
    }
    
    .btn-primary {
      background: linear-gradient(135deg, var(--islamic-gold), var(--islamic-green));
      border: none;
      color: white;
      padding: 0.75rem 2rem;
      border-radius: 25px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
      background: linear-gradient(135deg, var(--islamic-green), var(--islamic-blue));
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
      color: white;
    }
    
    /* Loading animation */
    .loading {
      display: inline-block;
      width: 20px;
      height: 20px;
      border: 3px solid rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      border-top-color: #fff;
      animation: spin 1s ease-in-out infinite;
    }
    
    @keyframes spin {
      to { transform: rotate(360deg); }
    }
    
    /* Accessibility improvements */
    .sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border: 0;
    }
    
    /* Focus styles for accessibility */
    a:focus,
    button:focus,
    input:focus,
    textarea:focus,
    select:focus {
      outline: 2px solid var(--islamic-gold);
      outline-offset: 2px;
    }
    
    /* Ensure main content is always visible */
    html, body {
      display: block !important;
      visibility: visible !important;
      opacity: 1 !important;
      height: auto !important;
      overflow: visible !important;
    }
    
    main, .main, #main-content, .container, .row, .col-* {
      display: block !important;
      visibility: visible !important;
      opacity: 1 !important;
      height: auto !important;
      overflow: visible !important;
    }
    
    /* Force all content to be visible */
    * {
      visibility: visible !important;
    }
    
    /* Override any hidden elements */
    [style*="display: none"], [style*="visibility: hidden"], [style*="opacity: 0"] {
      display: block !important;
      visibility: visible !important;
      opacity: 1 !important;
    }
    
    /* Override AOS styles that hide content */
    [data-aos] {
      opacity: 1 !important;
      visibility: visible !important;
      transform: none !important;
    }
    
    /* Override any AOS animations */
    [data-aos^="fade"], [data-aos^="slide"], [data-aos^="zoom"], [data-aos^="flip"] {
      opacity: 1 !important;
      visibility: visible !important;
      transform: none !important;
    }
    
    /* Skip to main content link */
    .skip-link {
      position: absolute;
      top: -40px;
      left: 6px;
      background: var(--islamic-blue);
      color: white;
      padding: 8px;
      text-decoration: none;
      border-radius: 4px;
      z-index: 10000;
    }
    
    .skip-link:focus {
      top: 6px;
    }
  </style>
  
  <!-- Load critical CSS synchronously to prevent content hiding -->
  <link rel="stylesheet" href="{{ asset('website_assets/css/critical.min.css') }}">
  <link rel="stylesheet" href="{{ asset('website_assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('website_assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  
  <!-- Fonts with display=swap for better performance -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Poppins:wght@400;500;600;700&family=Raleway:wght@400;500;600&display=swap" rel="stylesheet">
  
  <!-- Load optimized CSS synchronously for proper styling -->
  <link href="{{ asset('website_assets/css/optimized.css') }}" rel="stylesheet">
  <link href="{{ asset('website_assets/vendor/aos/aos.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  <link href="{{ asset('website_assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  <link href="{{ asset('website_assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  
  <!-- Toastr CSS -->
  <link href="{{ asset('vendor/flasher/css/flasher.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/flasher/css/toastr.min.css') }}" rel="stylesheet">
  
  <!-- Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "EducationalOrganization",
    "name": "Azhary Academy",
    "description": "Online Quran and Islamic studies academy for French-speaking Muslims worldwide",
    "url": "{{ url('/') }}",
    "logo": "{{ asset('website_assets/img/logo-no.png') }}",
    "image": "{{ asset('website_assets/img/hero-main.png') }}",
    "telephone": "+33 7 58 68 41 70",
    "email": "Madrassatazhary4@gmail.com",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "FR"
    },
    "sameAs": [
      "https://www.facebook.com/share/1FjSh3nMAU/",
      "https://x.com/MadrassatAzhary",
      "https://www.instagram.com/madrassat.azhary"
    ],
    "offers": {
      "@type": "Offer",
      "description": "Online Quran and Islamic studies courses",
      "availability": "https://schema.org/InStock"
    },
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Islamic Education Courses",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Course",
            "name": "Quran Recitation and Tajweed",
            "description": "Learn proper Quran recitation with tajweed rules"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Course",
            "name": "Arabic Language",
            "description": "Master Arabic language from basic to advanced levels"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Course",
            "name": "Islamic Studies",
            "description": "Comprehensive Islamic education including Aqeedah and Fiqh"
          }
        }
      ]
    }
  }
  </script>
  
  @stack('styles')
  
  <!-- IMMEDIATE CONTENT VISIBILITY SCRIPT -->
  <script>
    // Run immediately to ensure content is visible
    (function() {
      // Force content visibility immediately
      document.documentElement.style.display = 'block';
      document.documentElement.style.visibility = 'visible';
      document.documentElement.style.opacity = '1';
      
      // Also run when body is available
      if (document.body) {
        document.body.style.display = 'block';
        document.body.style.visibility = 'visible';
        document.body.style.opacity = '1';
      }
      
      // Override any hidden elements
      function forceVisibility() {
        const elements = document.querySelectorAll('*');
        elements.forEach(element => {
          if (element.style.display === 'none' || 
              element.style.visibility === 'hidden' || 
              element.style.opacity === '0') {
            element.style.display = 'block';
            element.style.visibility = 'visible';
            element.style.opacity = '1';
          }
        });
      }
      
      // Run immediately and continuously
      forceVisibility();
      setTimeout(forceVisibility, 50);
      setTimeout(forceVisibility, 100);
      setTimeout(forceVisibility, 200);
      setTimeout(forceVisibility, 500);
      setTimeout(forceVisibility, 1000);
      setTimeout(forceVisibility, 2000);
      
      // Also run on DOM changes
      const observer = new MutationObserver(forceVisibility);
      observer.observe(document.documentElement, {
        childList: true,
        subtree: true,
        attributes: true,
        attributeFilter: ['style', 'class']
      });
    })();
  </script>
</head>

<body>
  <!-- Skip to main content for accessibility -->
  <a href="#main-content" class="skip-link sr-only">{{ __('website.Skip to main content') }}</a>

  <!-- Include Header -->
  @include('website.partials.header')

  <main id="main-content" class="main" role="main">
    @yield('content')
  </main>

  <!-- Include Footer -->
  @include('website.partials.footer')

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center" aria-label="{{ __('website.Scroll to top') }}">
    <i class="bi bi-arrow-up-short" aria-hidden="true"></i>
  </a>

  <!-- Preloader - Disabled to prevent loading issues -->
  <!-- <div id="preloader" aria-hidden="true"></div> -->

  <!-- WhatsApp Float Button -->
  <div id="whatsapp-float" class="whatsapp-float" role="complementary">
    <a href="https://wa.me/33758684170" target="_blank" class="whatsapp-link" aria-label="{{ __('website.Contact us on WhatsApp') }}">
      <i class="bi bi-whatsapp" aria-hidden="true"></i>
    </a>
  </div>

  <!-- Deferred JavaScript Loading -->
  <script>
    // Performance optimization: Defer non-critical JavaScript
    function loadScript(src, callback) {
      const script = document.createElement('script');
      script.src = src;
      script.async = true;
      if (callback) script.onload = callback;
      document.head.appendChild(script);
    }
    
    // Load critical scripts immediately
    loadScript('{{ asset("website_assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}');
    
    // Load non-critical scripts after DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
      loadScript('{{ asset("website_assets/js/optimized.min.js") }}');
      loadScript('{{ asset("website_assets/vendor/aos/aos.js") }}');
      loadScript('{{ asset("website_assets/vendor/glightbox/js/glightbox.min.js") }}');
      loadScript('{{ asset("website_assets/vendor/swiper/swiper-bundle.min.js") }}');
    });
  </script>

  <!-- Enhanced Accessibility Scripts -->
  <script>
    // Ensure content is always visible
    document.addEventListener('DOMContentLoaded', function() {
      // Force content visibility
      document.documentElement.style.display = 'block';
      document.documentElement.style.visibility = 'visible';
      document.documentElement.style.opacity = '1';
      
      document.body.style.display = 'block';
      document.body.style.visibility = 'visible';
      document.body.style.opacity = '1';
      
      // Force all main content to be visible
      const mainElements = document.querySelectorAll('main, .main, #main-content, .container, .row, .col-*');
      mainElements.forEach(element => {
        element.style.display = 'block';
        element.style.visibility = 'visible';
        element.style.opacity = '1';
        element.style.height = 'auto';
        element.style.overflow = 'visible';
      });
      
      // Override any hidden elements
      const hiddenElements = document.querySelectorAll('[style*="display: none"], [style*="visibility: hidden"], [style*="opacity: 0"]');
      hiddenElements.forEach(element => {
        element.style.display = 'block';
        element.style.visibility = 'visible';
        element.style.opacity = '1';
      });
      
      // Override AOS elements that might be hidden
      const aosElements = document.querySelectorAll('[data-aos]');
      aosElements.forEach(element => {
        element.style.opacity = '1';
        element.style.visibility = 'visible';
        element.style.transform = 'none';
      });
    });
    
    // Also run on window load to catch any late changes
    window.addEventListener('load', function() {
      document.documentElement.style.display = 'block';
      document.documentElement.style.visibility = 'visible';
      document.documentElement.style.opacity = '1';
      
      document.body.style.display = 'block';
      document.body.style.visibility = 'visible';
      document.body.style.opacity = '1';
    });
    
    document.addEventListener('DOMContentLoaded', function() {
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
      
      // Add ARIA labels to interactive elements
      const buttons = document.querySelectorAll('button:not([aria-label])');
      buttons.forEach(button => {
        if (button.textContent.trim()) {
          button.setAttribute('aria-label', button.textContent.trim());
        }
      });
      
      // Improve form accessibility
      const forms = document.querySelectorAll('form');
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
      
      // Lazy load images for better performance
      if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              const img = entry.target;
              img.src = img.dataset.src;
              img.classList.remove('lazy');
              imageObserver.unobserve(img);
            }
          });
        });
        
        const lazyImages = document.querySelectorAll('img[data-src]');
        lazyImages.forEach(img => imageObserver.observe(img));
      }
      
      // Smooth scrolling is handled by optimized.js
    });
  </script>

  <!-- WhatsApp Float Styles -->
  <style>
    .whatsapp-float {
      position: fixed;
      bottom: 30px;
      right: 30px;
      z-index: 1000;
      animation: whatsapp-bounce 2s infinite;
    }
    
    .whatsapp-link {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 60px;
      height: 60px;
      background-color: #25d366;
      color: white;
      border-radius: 50%;
      text-decoration: none;
      box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4);
      transition: all 0.3s ease;
    }
    
    .whatsapp-link:hover,
    .whatsapp-link:focus {
      background-color: #128c7e;
      color: white;
      transform: scale(1.1);
      box-shadow: 0 6px 20px rgba(37, 211, 102, 0.6);
    }
    
    .whatsapp-link i {
      font-size: 28px;
    }
    
    @keyframes whatsapp-bounce {
      0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
      }
      40% {
        transform: translateY(-10px);
      }
      60% {
        transform: translateY(-5px);
      }
    }
    
    @media (max-width: 768px) {
      .whatsapp-float {
        bottom: 20px;
        right: 20px;
      }
      
      .whatsapp-link {
        width: 50px;
        height: 50px;
      }
      
      .whatsapp-link i {
        font-size: 24px;
      }
    }
    
    /* High contrast mode support */
    @media (prefers-contrast: high) {
      .btn-primary {
        border: 2px solid currentColor;
      }
      
      .whatsapp-link {
        border: 2px solid white;
      }
    }
    
    /* Reduced motion support */
    @media (prefers-reduced-motion: reduce) {
      *,
      *::before,
      *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
      }
      
      .whatsapp-float {
        animation: none;
      }
    }
  </style>

  <!-- Toastr JavaScript -->
  <script src="{{ asset('vendor/flasher/js/flasher.min.js') }}"></script>
  <script src="{{ asset('vendor/flasher/js/toastr.min.js') }}"></script>
  
  <!-- Cache Buster (only runs when clear-cache=true) -->
  <script src="{{ asset('cache-buster.js') }}"></script>
  
  <!-- Service Worker Registration -->
  <script>
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', function() {
        navigator.serviceWorker.register('/sw.js')
          .then(function(registration) {
            console.log('Service Worker registered successfully:', registration.scope);
            
            // Check for updates but don't auto-reload
            registration.addEventListener('updatefound', function() {
              const newWorker = registration.installing;
              newWorker.addEventListener('statechange', function() {
                if (newWorker.state === 'installed' && navigator.serviceWorker.controller) {
                  console.log('New service worker available. Please refresh the page to update.');
                  // Don't auto-reload, just log the message
                }
              });
            });
          })
          .catch(function(error) {
            console.log('Service Worker registration failed:', error);
          });
      });
    }
  </script>
  
  @stack('scripts')
</body>
</html> 