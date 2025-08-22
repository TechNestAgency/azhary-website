<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <!-- Primary Meta Tags -->
  <title>Azhary Academy - Online Quran & Islamic Studies for French Speakers</title>
  <meta name="description" content="Learn Quran recitation, tajweed, Arabic language, and Islamic studies online with native French-speaking teachers. Personalized learning for all levels.">
  <meta name="keywords" content="Quran online, Islamic studies, Arabic language, French Quran teachers, tajweed, Quran memorization, Islamic education, online Islamic classes">
  <meta name="author" content="Azhary Academy">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="Azhary Academy - Online Quran & Islamic Studies for French Speakers">
  <meta property="og:description" content="Learn Quran recitation, tajweed, Arabic language, and Islamic studies online with native French-speaking teachers. Personalized learning for all levels.">
  <meta property="og:image" content="{{ asset('website_assets/img/hero-main.webp') }}">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:locale" content="{{ app()->getLocale() }}">
  <meta property="og:site_name" content="Azhary Academy">
  
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="{{ url()->current() }}">
  <meta property="twitter:title" content="Azhary Academy - Online Quran & Islamic Studies for French Speakers">
  <meta property="twitter:description" content="Learn Quran recitation, tajweed, Arabic language, and Islamic studies online with native French-speaking teachers. Personalized learning for all levels.">
  <meta property="twitter:image" content="{{ asset('website_assets/img/hero-main.webp') }}">
  
  <!-- Additional SEO Meta Tags -->
  <meta name="theme-color" content="#02256c">
  <meta name="msapplication-TileColor" content="#02256c">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta name="apple-mobile-web-app-title" content="Azhary Academy">
  
  <!-- Canonical URL -->
  <link rel="canonical" href="{{ url()->current() }}">
  
  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('website_assets/img/favicon.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('website_assets/img/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('website_assets/img/apple-touch-icon.png') }}">
  <link rel="manifest" href="{{ asset('website_assets/manifest.json') }}">
  
  <!-- Preconnect to external domains for performance -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
  <!-- DNS Prefetch for performance -->
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  
  <!-- Critical CSS Inline -->
  <style>
    /* Critical CSS - Above the fold styles only */
    :root {
      --islamic-gold: #d4af37;
      --islamic-green: #228b22;
      --islamic-blue: #1e3a8a;
      --islamic-navy: #02256c;
      --islamic-cream: #f5f5dc;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    html {
      scroll-behavior: smooth;
    }
    
    body {
      font-family: 'Roboto', system-ui, -apple-system, sans-serif;
      line-height: 1.6;
      color: #212529;
      background-color: #ffffff;
      overflow-x: hidden;
    }
    
    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
    }
    
    .row {
      display: flex;
      flex-wrap: wrap;
      margin: 0 -15px;
    }
    
    .col-12, .col-lg-6 {
      padding: 0 15px;
      flex: 0 0 100%;
      max-width: 100%;
    }
    
    @media (min-width: 992px) {
      .col-lg-6 {
        flex: 0 0 50%;
        max-width: 50%;
      }
    }
    
    .navbar {
      background: rgba(255, 255, 255, 0.95) !important;
      backdrop-filter: blur(10px);
      border: none !important;
      padding: 1rem 0;
      transition: all 0.3s ease;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
    }
    
    .navbar-brand img {
      max-height: 50px;
      width: auto;
    }
    
    .hero {
      background: linear-gradient(135deg, var(--islamic-navy) 0%, var(--islamic-blue) 100%);
      position: relative;
      min-height: 500px;
      display: flex;
      align-items: center;
      color: white;
      padding: 4rem 0;
      margin-top: 80px;
    }
    
    .hero .container {
      position: relative;
      z-index: 2;
    }
    
    .btn {
      display: inline-block;
      padding: 0.75rem 2rem;
      border-radius: 25px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      border: none;
      cursor: pointer;
      text-align: center;
    }
    
    .btn-primary {
      background: linear-gradient(135deg, var(--islamic-gold), var(--islamic-green));
      color: white;
    }
    
    .btn-primary:hover {
      background: linear-gradient(135deg, var(--islamic-green), var(--islamic-blue));
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
      color: white;
    }
    
    .btn-lg {
      padding: 1rem 2.5rem;
      font-size: 1.1rem;
    }
    
    h1, h2, h3, h4, h5, h6 {
      margin-bottom: 1rem;
      font-weight: 700;
      line-height: 1.2;
    }
    
    h1 {
      font-size: 2.5rem;
    }
    
    h2 {
      font-size: 2rem;
    }
    
    p {
      margin-bottom: 1rem;
    }
    
    .lead {
      font-size: 1.25rem;
      font-weight: 300;
    }
    
    .img-fluid {
      max-width: 100%;
      height: auto;
    }
    
    .lazy {
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    
    .lazy.loaded {
      opacity: 1;
    }
    
    .text-center {
      text-align: center;
    }
    
    .text-white {
      color: white;
    }
    
    .mb-4 {
      margin-bottom: 1.5rem;
    }
    
    .mt-4 {
      margin-top: 1.5rem;
    }
    
    .py-5 {
      padding-top: 3rem;
      padding-bottom: 3rem;
    }
    
    @media (max-width: 768px) {
      h1 {
        font-size: 2rem;
      }
      
      h2 {
        font-size: 1.75rem;
      }
      
      .hero {
        min-height: 400px;
        padding: 2rem 0;
      }
      
      .btn-lg {
        padding: 0.875rem 2rem;
        font-size: 1rem;
      }
    }
    
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
    
    a:focus,
    button:focus,
    input:focus,
    textarea:focus,
    select:focus {
      outline: 2px solid var(--islamic-gold);
      outline-offset: 2px;
    }
  </style>
  
  <!-- Preload critical resources -->
  <link rel="preload" href="{{ asset('website_assets/js/critical.js') }}" as="script">
  <link rel="preload" href="{{ asset('website_assets/img/logo-no.webp') }}" as="image">
  
  <!-- Load critical JavaScript -->
  <script src="{{ asset('website_assets/js/critical.js') }}"></script>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('website_assets/img/logo-no.webp') }}" alt="Azhary Academy" loading="eager">
      </a>
      
      <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#courses">{{ __('website.Courses') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('website.teachers.index') }}">{{ __('website.Teachers') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('enroll.show') }}">{{ __('website.Enroll') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('language.switch', app()->getLocale() == 'en' ? 'fr' : 'en') }}">
              {{ app()->getLocale() == 'en' ? 'FR' : 'EN' }}
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-lg-6 text-center text-lg-start">
          <h1>{{ __('website.Welcome to Azhary Academy') }}</h1>
          <p class="lead mb-4">
            {{ __('website.Experience personalized Quran and Islamic education with native French-speaking teachers') }}
          </p>
          <a href="{{ route('enroll.show') }}" class="btn btn-primary btn-lg">
            {{ __('website.Enroll Now') }}
          </a>
        </div>
        <div class="col-12 col-lg-6 text-center">
          <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400'%3E%3Crect width='400' height='400' fill='%23f0f0f0'/%3E%3C/svg%3E" 
               data-src="{{ asset('presenting.webp') }}" 
               alt="Welcome to Azhary Academy" 
               class="img-fluid lazy" 
               loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Courses Section -->
  <section id="courses" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mb-5">
          <h2>{{ __('website.Our Courses') }}</h2>
          <p class="lead">{{ __('website.Comprehensive Islamic education tailored for French-speaking students') }}</p>
        </div>
      </div>
      
      <div class="row g-4">
        <div class="col-md-6">
          <div class="card h-100">
            <div class="card-body text-center">
              <h3>{{ __('website.Quran (Recitation, Tajweed & Memorization)') }}</h3>
              <p>{{ __('website.Comprehensive Quran learning program covering recitation, tajweed rules, and memorization techniques.') }}</p>
              <a href="{{ route('website.courses.quran') }}" class="btn btn-primary">
                {{ __('website.Learn More') }}
              </a>
            </div>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="card h-100">
            <div class="card-body text-center">
              <h3>{{ __('website.Arabic Language') }}</h3>
              <p>{{ __('website.Master the Arabic language with native speakers - from basic conversation to advanced grammar.') }}</p>
              <a href="{{ route('website.courses.arabic-language') }}" class="btn btn-primary">
                {{ __('website.Learn More') }}
              </a>
            </div>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="card h-100">
            <div class="card-body text-center">
              <h3>{{ __('website.Islamic Studies') }}</h3>
              <p>{{ __('website.Explore the fundamentals of Islam including Aqeedah, Fiqh, and Seerah.') }}</p>
              <a href="{{ route('website.courses.islamic-studies') }}" class="btn btn-primary">
                {{ __('website.Learn More') }}
              </a>
            </div>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="card h-100">
            <div class="card-body text-center">
              <h3>{{ __('website.Ijazah (Qur\'an Certification)') }}</h3>
              <p>{{ __('website.Advanced program for those seeking formal authorization in Quran recitation.') }}</p>
              <a href="{{ route('website.courses.ijazah') }}" class="btn btn-primary">
                {{ __('website.Learn More') }}
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="py-5" style="background: linear-gradient(135deg, var(--islamic-blue) 0%, var(--islamic-navy) 100%);">
    <div class="container text-center">
      <h2 class="text-white mb-4">{{ __('website.Ready to Start Your Quranic Journey?') }}</h2>
      <p class="text-white-50 mb-4 lead">{{ __('website.Join thousands of students worldwide and begin your Islamic education today') }}</p>
      <a href="{{ route('enroll.show') }}" class="btn btn-primary btn-lg">
        {{ __('website.Enroll Now') }}
      </a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-4" style="background-color: #f8f9fa;">
    <div class="container text-center">
      <p>&copy; {{ date('Y') }} Azhary Academy. {{ __('website.All rights reserved.') }}</p>
    </div>
  </footer>

  <!-- Load non-critical CSS asynchronously -->
  <link rel="preload" href="{{ asset('website_assets/css/optimized.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="{{ asset('website_assets/css/optimized.css') }}"></noscript>
</body>
</html>
