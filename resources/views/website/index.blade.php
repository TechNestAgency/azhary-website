<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes" name="viewport">
  <meta name="theme-color" content="#0a2260">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="format-detection" content="telephone=no">
  <title>Madrassat Azhary - Islamic Education Online</title>
  <meta name="description" content="Learn Quran, Arabic, and Islamic studies online with qualified French-speaking teachers. Join our community of learners worldwide.">
  <meta name="keywords" content="Quran online, Arabic learning, Islamic studies, French Muslim education, online Islamic academy">
  
  <!-- CSRF Token for AJAX requests -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <!-- Performance Optimizations -->
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
  <!-- Preload critical resources -->
  <link rel="preload" href="{{ asset('website_assets/vendor/bootstrap/css/bootstrap.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="{{ asset('website_assets/vendor/bootstrap/css/bootstrap.min.css') }}"></noscript>
  
  <!-- Preload hero images for better LCP -->
  <link rel="preload" href="{{ asset('presenting.png') }}" as="image" media="(max-width: 768px)">
  <link rel="preload" href="{{ asset('hero-back.jpg') }}" as="image">
  
  <!-- Critical CSS Inline - Only essential styles for above-the-fold content -->
  <style>
    /* Critical CSS for above-the-fold content - Optimized */
    :root {
      --islamic-gold: #d4af37;
      --islamic-green: #228b22;
      --islamic-blue: #1e3a8a;
    }
    
    /* Essential body styles */
    body {
      font-family: "Roboto", system-ui, -apple-system, sans-serif;
      line-height: 1.6;
      color: #212529;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }
    
    /* Critical header styles */
    .fixed-top {
      background-color: rgb(2, 37, 108);
      opacity: 0.88;
      color: #fff;
      z-index: 1040;
      transition: box-shadow 0.3s ease;
    }
    
    .navbar {
      background: white !important;
      border: none !important;
    }
    
    .navbar-brand img {
      max-height: 60px;
    }
    
    /* Critical hero styles */
    .hero {
      background: url('{{ asset("hero-back.jpg") }}') no-repeat center center;
      background-size: cover;
      position: relative;
      direction: ltr;
      min-height: 560px;
    }
    
    .hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgb(2, 37, 108);
      opacity: 0.88;
    }
    
    /* Critical button styles */
    .btn-islamic {
      background: linear-gradient(135deg, var(--islamic-gold), var(--islamic-green));
      border: none;
      color: white;
      padding: 12px 30px;
      border-radius: 25px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      display: inline-block;
    }
    
    /* Loading spinner - Critical for UX */
    .loading-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.98);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      transition: opacity 0.5s ease;
    }
    
    .loading-overlay.hidden {
      opacity: 0;
      pointer-events: none;
    }
    
    .loading-content {
      text-align: center;
    }
    
    .loading-spinner {
      width: 50px;
      height: 50px;
      border: 4px solid #f3f3f3;
      border-top: 4px solid #d4af37;
      border-radius: 50%;
      animation: spin 1s linear infinite;
      margin: 20px auto;
    }
    
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    
    /* Critical mobile styles */
    @media (max-width: 768px) {
      .hero {
        min-height: 400px;
      }
      
      .btn-islamic {
        padding: 10px 25px;
        font-size: 0.9rem;
      }
    }
    
    /* Performance optimizations */
    * {
      box-sizing: border-box;
    }
    
    img {
      max-width: 100%;
      height: auto;
    }
    
    /* Reduce paint operations */
    .hero, .navbar, .fixed-top {
      will-change: auto;
      transform: translateZ(0);
    }
  </style>
  
  <!-- Favicons and PWA -->
  <link href="{{ asset('website_assets/img/logo-no.png') }}" rel="icon">
  <link href="{{ asset('website_assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <link href="{{ asset('website_assets/manifest.json') }}" rel="manifest">

  <!-- Fonts - Optimized loading -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"></noscript>

  <!-- CSS Files - Deferred loading for non-critical styles -->
  <link href="{{ asset('website_assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="{{ asset('website_assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet"></noscript>
  
  <link href="{{ asset('website_assets/vendor/aos/aos.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="{{ asset('website_assets/vendor/aos/aos.css') }}" rel="stylesheet"></noscript>
  
  <link href="{{ asset('website_assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="{{ asset('website_assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet"></noscript>
  
  <link href="{{ asset('website_assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="{{ asset('website_assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet"></noscript>
  
  <link href="{{ asset('website_assets/css/language-switcher.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="{{ asset('website_assets/css/language-switcher.css') }}" rel="stylesheet"></noscript>
  
  <!-- Main CSS - Loaded after critical content -->
  <link href="{{ asset('website_assets/css/main.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="{{ asset('website_assets/css/main.css') }}" rel="stylesheet"></noscript>
</head>

<body class="index-page">

  <!-- Loading Spinner - Optimized -->
  <div id="loading-spinner" class="loading-overlay">
    <div class="loading-content">
      <img src="{{asset('website_assets/img/logo-no.png')}}" alt="Madrassat Azhary" width="80" height="80" style="margin-bottom: 20px;">
      <div class="loading-spinner"></div>
      <div style="margin-top: 15px; font-family: 'Roboto', sans-serif; font-size: 16px; color: #333;">Chargement...</div>
    </div>
  </div>

  <!-- Fixed Top Bar with Social Links and Navigation -->
  <div class="fixed-top" id="fixedHeader" style="background-color:rgb(2, 37, 108);opacity: 0.88; color: #fff; z-index: 1040; transition: box-shadow 0.3s ease;">
    <!-- Social Links Section -->
    <div class="px-3 py-2 d-none d-md-block" style="border-bottom: 1px solid rgba(255,255,255,0.2);">
      <div class="container-fluid">
        <div class="row align-items-center flex-column flex-md-row text-center text-md-start">
          <div class="col-12 col-md-auto d-flex align-items-center justify-content-center justify-content-md-start gap-3 flex-wrap mb-2 mb-md-0">
            <span class="d-flex align-items-center"><i class="bi bi-telephone-fill me-2"></i> {{ __('website.Whatsapp') }} : +33 7 58 68 41 70</span>
          </div>
          <div class="col-12 col-md d-flex align-items-center justify-content-center justify-content-md-end gap-3 flex-wrap">
            <a href="#" style="color: #fff; text-decoration: none;">{{ __('website.Our Social') }}</a>
            <a href="mailto:Madrassatazhary4@gmail.com" style="color: #ffd600;"><i class="bi bi-envelope-fill"></i></a>
            <a href="https://www.facebook.com/share/1FjSh3nMAU/" target="_blank" style="color: #ffd600;"><i class="bi bi-facebook"></i></a>
            <a href="https://x.com/MadrassatAzhary?t=7nDlU99ZIjGwJTPM0daDwQ&s=09" target="_blank" style="color: #ffd600;"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.instagram.com/madrassat.azhary?igsh=MXMxd3E5bnhxdzBjNw==" target="_blank" style="color: #ffd600;"><i class="bi bi-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="border: none !important;">
    <div class="container">
      <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center me-auto me-xl-0" style="min-width: 120px;">
        <img src="{{asset('website_assets/img/logo-no.png')}}" alt="Madrassat Azhary Logo" style="max-height: 80px;" data-critical="true">
      </a>
      
      <!-- Mobile Trial Button - Centered in Mobile Topbar -->
      <div class="d-flex d-lg-none justify-content-center position-fixed mobile-enroll-btn" style="left: 50%; transform: translateX(-50%); width: auto; max-width: 140px; z-index: 1050; top: 50px;">
        <a href="{{ route('enroll.show') }}" class="btn btn-primary btn-sm mobile-enroll-link" style="background-color:rgb(2, 37, 108); opacity: 0.88; padding: 0.3rem 0.5rem; font-size: 0.65rem; white-space: nowrap;">
          {{ __('website.Register Now & Seize the Opportunity') }}
        </a>
      </div>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation" style="z-index: 2; min-width: 60px;">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">{{ __('website.Home Page') }}</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="coursesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ __('website.Our Courses') }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="coursesDropdown">
              <li><a class="dropdown-item" href="{{ route('website.courses.quran') }}">{{ __('website.Quran (Recitation, Tajweed & Memorization)') }}</a></li>
              <li><a class="dropdown-item" href="{{ route('website.courses.arabic-language') }}">{{ __('website.Arabic Language') }}</a></li>
              <li><a class="dropdown-item" href="{{ route('website.courses.islamic-studies') }}">{{ __('website.Islamic Studies') }}</a></li>
              <li><a class="dropdown-item" href="{{ route('website.courses.ijazah') }}">{{ __('website.Ijazah (Qur\'an Certification)') }}</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('website.teachers.index') }}">{{ __('website.Our Teachers') }}</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="ratesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              🪙 {{ __('website.Rates') }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="ratesDropdown">
              <li><a class="dropdown-item" href="{{ route('rates.confirmed') }}">{{ __('website.Confirmed Teachers') }} ✔️</a></li>
              <li><a class="dropdown-item" href="{{ route('rates.super') }}">{{ __('website.Super Teachers') }} ⚡</a></li>
              <li><a class="dropdown-item" href="{{ route('rates.ambassador') }}">{{ __('website.Ambassador Teachers') }} 🚀</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('website.articles.index') }}">{{ __('website.Articles') }}</a>
          </li>
          <li class="nav-item d-flex align-items-center">
            <div class="language-switcher d-flex align-items-center gap-1">
              <a href="{{ route('language.switch', 'en') }}" class="nav-link p-0" style="color: {{ app()->getLocale() == 'en' ? '#0a2260' : '#0a2260b0' }}; font-weight: {{ app()->getLocale() == 'en' ? 'bold' : 'normal' }};">EN</a>
              <span style="color: #0a2260; font-weight: bold;">|</span>
              <a href="{{ route('language.switch', 'fr') }}" class="nav-link p-0" style="color: {{ app()->getLocale() == 'fr' ? '#0a2260' : '#0a2260b0' }}; font-weight: {{ app()->getLocale() == 'fr' ? 'bold' : 'normal' }};">FR</a>
            </div>
          </li>
          <li class="nav-item mt-2 mt-lg-0">
            <a class="btn btn-primary w-100 w-lg-auto" href="{{ route('enroll.show') }}" style="background-color:rgb(2, 37, 108); opacity: 0.88; padding: 0.75rem 2rem; font-size: 1.1rem;">{{ __('website.Enroll Now') }}</a>
          </li>
        </ul>
      </div>
    </div>
    </nav>
  </div>

  <main class="main" style="padding-top: 170px;">

    <!-- Hero Section -->
    <section id="hero" class="hero section p-0" style="background: url('{{ asset('hero-back.jpg') }}') no-repeat center center; background-size: cover; position: relative; direction: ltr;">
      <!-- Transparent Overlay -->
      <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color:rgb(2, 37, 108); opacity: 0.88;"></div>
      <!-- Carousel Content (Third Layer) -->
      <div id="heroCarousel" class="carousel slide" style="position: relative; z-index: 2;">
        <div class="carousel-inner pt-5">
          <!-- Slide 1: Welcome (default/active) -->
          <div class="carousel-item active">
            <div class="container">
              <div class="row align-items-center flex-column flex-lg-row" style="min-height: 560px;">
                <!-- Image (left) -->
                <div class="col-12 col-lg-6 text-center mb-4 mb-lg-0">
                  <img src="{{ asset('presenting.png') }}" alt="Welcome Man" class="img-fluid" style="max-height: 400px;" loading="lazy" width="400" height="400">
                </div>
                <!-- Welcome Title (right) -->
                <div class="col-12 col-lg-6 text-white text-center text-lg-start">
                  <h3 class="display-5 fw-bold" style="color: white; letter-spacing: 2px; margin-bottom: 1.5rem;">{{ __('website.Welcome to Azhary Academy') }}</h3>
                  <a href="{{ route('enroll.show') }}" class="btn btn-islamic btn-lg">{{ __('website.Enroll Now') }}</a>
                </div>
              </div>
            </div>
          </div>
         
          
          <div class="carousel-item">
            <div class="container">
              <div class="row align-items-center flex-column flex-lg-row" style="min-height: 560px;">
                <!-- Image (left) -->
                <div class="col-12 col-lg-6 text-center mb-4 mb-lg-0">
                  <img src="{{ asset('man2.png') }}" alt="Online Learning" class="img-fluid" style="max-height: 400px;" loading="lazy" width="400" height="400">
                </div>
                <!-- Online Learning Content (right) -->
                <div class="col-12 col-lg-6 text-white text-center text-lg-start">
                  <h1 class="mb-4" style="color: #36b6e7; font-weight: bold;">{{ __('website.Interactive Online Learning') }}</h1>
                  <p class="mb-4" style="font-size: 1.2rem;">
                    {{ __('website.Experience our state-of-the-art virtual classroom designed specifically for Quranic education. Learn from qualified teachers through interactive sessions, real-time feedback, and personalized attention, all from the comfort of your home.') }}
                  </p>
                  <a href="{{ route('enroll.show') }}" class="btn btn-islamic btn-lg">{{ __('website.Start Learning Today') }}</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 4: French-Speaking Community -->
          <div class="carousel-item">
            <div class="container">
              <div class="row align-items-center flex-column flex-lg-row" style="min-height: 560px;">
                <!-- Image (left) -->
                <div class="col-12 col-lg-6 text-center mb-4 mb-lg-0">
                  <img src="{{ asset('man3.png') }}" alt="French Community" class="img-fluid" style="max-height: 400px;" loading="lazy" width="400" height="400">
                </div>
                <!-- French Community Content (right) -->
                <div class="col-12 col-lg-6 text-white text-center text-lg-start">
                  <h1 class="mb-4" style="color: #36b6e7; font-weight: bold;">{{ __('website.Join Our French-Speaking Community') }}</h1>
                  <p class="mb-4" style="font-size: 1.2rem;">
                    {{ __('website.Connect with fellow French-speaking Muslims worldwide in our supportive learning environment. Our native French-speaking teachers ensure you understand every aspect of your Islamic education in your preferred language.') }}
                  </p>
                  <a href="{{ route('enroll.show') }}" class="btn btn-islamic btn-lg">{{ __('website.Join Our Community') }}</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 5: Children's Arabic Program -->
          <div class="carousel-item">
            <div class="container">
              <div class="row align-items-center flex-column flex-lg-row" style="min-height: 560px;">
                <!-- Image (left) -->
                <div class="col-12 col-lg-6 text-center mb-4 mb-lg-0">
                  <img src="{{ asset('man4.png') }}" alt="Children's Arabic Learning" class="img-fluid" style="max-height: 400px;" loading="lazy" width="400" height="400">
                </div>
                <!-- Children's Program Content (right) -->
                <div class="col-12 col-lg-6 text-white text-center text-lg-start">
                  <h1 class="mb-4" style="color: #36b6e7; font-weight: bold;">{{ __('website.Arabic Learning for Children') }}</h1>
                  <p class="mb-4" style="font-size: 1.2rem;">
                    {{ __('website.Our specialized Arabic program for children combines fun, interactive learning with effective teaching methods. Using games, stories, and cultural activities, we help children master Arabic alphabet, numbers, colors, and basic conversation skills while developing a deep appreciation for Arabic culture.') }}
                  </p>
                  <div class="d-flex gap-3 mb-4 flex-wrap">
                    <span class="badge bg-light text-primary">{{ __('website.Interactive Learning') }}</span>
                    <span class="badge bg-light text-primary">{{ __('website.Qualified Teachers') }}</span>
                    <span class="badge bg-light text-primary">{{ __('website.Flexible Schedule') }}</span>
                  </div>
                  <a href="{{ route('enroll.show') }}" class="btn btn-islamic btn-lg">{{ __('website.Start Your Child\'s Journey') }}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Carousel controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <!-- Why Choose Section -->
    <section id="why-choose" class="why-choose section py-5">
      <div class="container">
        <div class="text-center mb-5 islamic-section-header">
          <h2>
            ✨ {{ __('website.why_choose_title') }}
          </h2>
          <p class="lead">{{ __('website.why_choose_subtitle') }}</p>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-md-4">
            <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white islamic-card">
              <div class="mb-3" style="font-size:2rem;">👩‍🏫</div>
              <h4 class="mb-2 text-success">{{ __('website.individual_courses_title') }}</h4>
              <p>{{ __('website.individual_courses_desc') }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white islamic-card">
              <div class="mb-3" style="font-size:2rem;">🕒</div>
              <h4 class="mb-2 text-primary">{{ __('website.flexible_hours_title') }}</h4>
              <p>{{ __('website.flexible_hours_desc') }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white islamic-card">
              <div class="mb-3" style="font-size:2rem;">📊</div>
              <h4 class="mb-2 text-purple">{{ __('website.monthly_reports_title') }}</h4>
              <p>{{ __('website.monthly_reports_desc') }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white islamic-card">
              <div class="mb-3" style="font-size:2rem;">🎮</div>
              <h4 class="mb-2 text-warning">{{ __('website.games_activities_title') }}</h4>
              <p>{{ __('website.games_activities_desc') }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white islamic-card">
              <div class="mb-3" style="font-size:2rem;">🎧</div>
              <h4 class="mb-2 text-danger">{{ __('website.recorded_lessons_title') }}</h4>
              <p>{{ __('website.recorded_lessons_desc') }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white islamic-card">
              <div class="mb-3" style="font-size:2rem;">🎓</div>
              <h4 class="mb-2 text-success">{{ __('website.certified_teachers_title') }}</h4>
              <p>{{ __('website.certified_teachers_desc') }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white islamic-card">
              <div class="mb-3" style="font-size:2rem;">📜</div>
              <h4 class="mb-2 text-orange">{{ __('website.certificates_title') }}</h4>
              <p>{{ __('website.certificates_desc') }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white islamic-card">
              <div class="mb-3" style="font-size:2rem;">🌍</div>
              <h4 class="mb-2 text-info">{{ __('website.international_title') }}</h4>
              <p>{{ __('website.international_desc') }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Why Choose Section -->

    <!-- Statistics Section -->
    <section id="statistics" class="statistics-section py-5" style="background: linear-gradient(135deg, #0a2260 0%, #1e3a8a 50%, #3b82f6 100%); position: relative; overflow: hidden;">
      <!-- Islamic Pattern Overlay -->
      <div class="islamic-pattern-overlay"></div>
      
      <div class="container position-relative" style="z-index: 2;">
        <div class="text-center mb-5">
          <h2 class="text-white display-4 fw-bold mb-3" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
            🏆 {{ __('website.Our Achievements') }}
          </h2>
          <p class="text-white-50 lead" style="font-size: 1.2rem;">
            {{ __('website.Join our dedicated community of students who have transformed their Quranic journey with us') }}
          </p>
        </div>

        <div class="row g-4 justify-content-center">
          <!-- Students Counter -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="stat-card text-center p-4">
              <div class="stat-icon mb-3">
                <i class="bi bi-people-fill"></i>
              </div>
              <div class="stat-number mb-2">
                <span class="counter" data-target="65" data-live="true" data-live-increment="1">0</span>+
              </div>
              <div class="stat-label">{{ __('website.Happy Students') }}</div>
              <div class="stat-description">{{ __('website.Enrolled worldwide') }}</div>
            </div>
          </div>

          <!-- Teachers Counter -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="stat-card text-center p-4">
              <div class="stat-icon mb-3">
                <i class="bi bi-person-workspace"></i>
              </div>
              <div class="stat-number mb-2">
                <span class="counter" data-target="7" data-live="true" data-live-increment="1">0</span>+
              </div>
              <div class="stat-label">{{ __('website.Expert Teachers') }}</div>
              <div class="stat-description">{{ __('website.Certified instructors') }}</div>
            </div>
          </div>

          <!-- Hours Conducted Counter -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="stat-card text-center p-4">
              <div class="stat-icon mb-3">
                <i class="bi bi-clock-history"></i>
              </div>
              <div class="stat-number mb-2">
                <span class="counter" data-target="480" data-live="true" data-live-increment="2">0</span>+
              </div>
              <div class="stat-label">{{ __('website.Hours Conducted') }}</div>
              <div class="stat-description">{{ __('website.Quranic lessons') }}</div>
            </div>
          </div>

          <!-- Countries Counter -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="stat-card text-center p-4">
              <div class="stat-icon mb-3">
                <i class="bi bi-globe"></i>
              </div>
              <div class="stat-number mb-2">
                <span class="counter" data-target="4" data-live="true" data-live-increment="1">0</span>+
              </div>
              <div class="stat-label">{{ __('website.Countries') }}</div>
              <div class="stat-description">{{ __('website.Worldwide reach') }}</div>
            </div>
          </div>
        </div>

        <!-- Additional Achievement Row -->
        <div class="row g-4 justify-content-center mt-4">
          <!-- Certificates Awarded -->
          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="stat-card text-center p-4">
              <div class="stat-icon mb-3">
                <i class="bi bi-award-fill"></i>
              </div>
              <div class="stat-number mb-2">
                <span class="counter" data-target="18" data-live="true" data-live-increment="1">0</span>+
              </div>
              <div class="stat-label">{{ __('website.Certificates Awarded') }}</div>
              <div class="stat-description">{{ __('website.Quran completion') }}</div>
            </div>
          </div>

          <!-- Years of Experience -->
          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="stat-card text-center p-4">
              <div class="stat-icon mb-3">
                <i class="bi bi-calendar-check-fill"></i>
              </div>
              <div class="stat-number mb-2">
                <span class="counter" data-target="3" data-live="true" data-live-increment="1">0</span>+
              </div>
              <div class="stat-label">{{ __('website.Years of Experience') }}</div>
              <div class="stat-description">{{ __('website.In Islamic education') }}</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Statistics Section -->

    <!-- Islamic Divider -->
    <div class="islamic-divider"></div>

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4 align-items-center">

            <div class="col-12 col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
              <div class="about-content">
                <p class="who-we-are">{{ __('website.Who We Are') }}</p>
                <h3>{{ __('website.Bringing Islamic Knowledge to French Speakers Worldwide') }}</h3>
                <p class="fst-italic">
                  {{ __('website.Azhary Academy is dedicated to making Quranic education and Islamic studies accessible to French-speaking Muslims around the world through personalized online learning.') }}
                </p>
                <ul class="about-features">
                  <li><i class="bi bi-check-circle"></i> <span>{{ __('website.Native French-speaking teachers with deep knowledge of Islamic sciences') }}</span></li>
                  <li><i class="bi bi-check-circle"></i> <span>{{ __('website.Personalized curriculum tailored to each student\'s level and goals') }}</span></li>
                  <li><i class="bi bi-check-circle"></i> <span>{{ __('website.Comprehensive courses in Quran recitation, memorization, tajweed') }}</span></li>
                  <li><i class="bi bi-check-circle"></i> <span>{{ __('website.Flexible scheduling to accommodate students across different time zones') }}</span></li>
                  <li><i class="bi bi-check-circle"></i> <span>{{ __('website.Engaging teaching methods that make learning enjoyable and effective') }}</span></li>
                </ul>
                <a href="#services" class="read-more"><span>{{ __('website.Explore Our Courses') }}</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          
            <div class="col-12 col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
              <div class="about-image-container">
                <img src="{{asset('about.png')}}" class="img-fluid rounded-4 shadow" alt="Online Islamic Class" loading="lazy" width="500" height="400">
              </div>
            </div>
          
          </div>

      </div>
    </section><!-- /About Section -->

    <!-- Islamic Divider -->
    <div class="islamic-divider"></div>

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title islamic-section-header" data-aos="fade-up">
        <h2>{{ __('website.Our Courses') }}</h2>
        <p class="mt-4">{{ __('website.Comprehensive Islamic education tailored for French-speaking students from beginners to advanced levels') }}</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center g-5">

          <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-book-half"></i>
              </div>
              <div class="service-content">
                <h3>{{ __('website.Quran (Recitation, Tajweed & Memorization)') }}</h3>
                <p>{{ __('website.Comprehensive Quran learning program covering recitation, tajweed rules, and memorization techniques. Our native French-speaking instructors guide you through proper pronunciation, tajweed rules, and systematic memorization methods.') }}</p>
                <a href="{{ route('website.courses.quran') }}" class="service-link">
                  <span>{{ __('website.Learn More') }}</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-translate"></i>
              </div>
              <div class="service-content">
                <h3>{{ __('website.Arabic Language') }}</h3>
                <p>{{ __('website.Master the Arabic language with native speakers - from basic conversation to advanced grammar and cultural understanding. Learn Modern Standard Arabic and colloquial dialects with authentic cultural context.') }}</p>
                <a href="{{ route('website.courses.arabic-language') }}" class="service-link">
                  <span>{{ __('website.Learn More') }}</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-moon-stars"></i>
              </div>
              <div class="service-content">
                <h3>{{ __('website.Islamic Studies') }}</h3>
                <p>{{ __('website.Explore the fundamentals of Islam including Aqeedah (beliefs), Fiqh (jurisprudence), and Seerah (biography of Prophet Muhammad ﷺ). Our curriculum provides a solid foundation in Islamic knowledge delivered in French.') }}</p>
                <a href="{{ route('website.courses.islamic-studies') }}" class="service-link">
                  <span>{{ __('website.Learn More') }}</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-award"></i>
              </div>
              <div class="service-content">
                <h3>{{ __('website.Ijazah (Qur\'an Certification)') }}</h3>
                <p>{{ __('website.Advanced program for those seeking formal authorization (Ijazah) in Quran recitation. Study under certified scholars and join the unbroken chain of narration tracing back to the Prophet Muhammad ﷺ through our rigorous certification program.') }}</p>
                <a href="{{ route('website.courses.ijazah') }}" class="service-link">
                  <span>{{ __('website.Learn More') }}</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Islamic Divider -->
    <div class="islamic-divider"></div>

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title islamic-section-header" data-aos="fade-up">
        <h2>{{ __('website.Our Teachers') }}</h2>
        <p>{{ __('website.Meet our qualified and experienced Quran teachers who are dedicated to helping you learn') }}</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="teachers-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 800,
              "autoplay": {
                "delay": 4000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "breakpoints": {
                "576": {
                  "slidesPerView": 2
                },
                "768": {
                  "slidesPerView": 3
                },
                "1200": {
                  "slidesPerView": 4
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            @foreach($teachers as $teacher)
            <div class="swiper-slide" data-aos="zoom-in" data-aos-delay="{{ $loop->iteration * 100 }}">
              <div class="teacher-profile-card">
                <div class="teacher-photo-section">
                  @if($teacher->photo)
                    <img src="{{ asset($teacher->photo) }}" class="teacher-photo" alt="{{ $teacher->localized_name }}" loading="lazy" width="300" height="280">
                  @else
                    <div class="teacher-photo bg-secondary d-flex align-items-center justify-content-center">
                      <i class="bi bi-person" style="font-size: 3rem; color: #6c757d;"></i>
                    </div>
                  @endif
                </div>
                <div class="teacher-info-section">
                  <h4 class="teacher-name">{{ $teacher->localized_name }}</h4>
                  <div class="mb-3">
                    <span class="badge bg-success text-white px-3 py-2" style="font-size: 0.9rem;">
                      <i class="bi bi-people-fill me-1"></i>+30 Students
                    </span>
                  </div>
                  <p class="teacher-description">{!! Str::limit($teacher->localized_short_description, 200) !!}</p>
                  <a href="{{ route('website.teachers.show', $teacher->id) }}" class="teacher-btn">{{ __('website.Learn More') }}</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>

    </section><!-- /Team Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
      <div class="container section-title islamic-section-header" data-aos="fade-up">
        <h2>{{ __('website.Student Testimonials') }}</h2>
        <p>{{ __('website.Hear from our students about their journey in learning the Quran and Islamic studies') }}</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="testimonials-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 800,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    {{ __('website.Alhamdulillah, the teachers at Azhary Academy have helped me improve my Quran recitation significantly. Their patience and expertise in tajweed rules have made learning enjoyable and effective.') }}
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="{{ asset('website_assets/img/man1.jpeg') }}" alt="Student Profile" loading="lazy" width="60" height="60">
                    <div>
                      <h3>Ahmed Hassan</h3>
                      <h4>{{ __('website.Quran Student') }}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    {{ __('website.As a French-speaking Muslim, I was looking for a way to learn the Quran in my native language. Azhary Academy\'s approach has made it possible for me to understand and connect with the Quran deeply.') }}
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="{{ asset('website_assets/img/girl.jpeg') }}" alt="Student Profile" loading="lazy" width="60" height="60">
                    <div>
                      <h3>Fatima Zahra</h3>
                      <h4>{{ __('website.Islamic Studies Student') }}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    {{ __('website.The children\'s program is excellent! My kids look forward to their Quran classes every week. The teachers make learning fun while maintaining the seriousness of Islamic education.') }}
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="{{ asset('website_assets/img/whomen1.jpeg') }}" alt="Student Profile" loading="lazy" width="60" height="60">
                    <div>
                      <h3>Sarah Mohammed</h3>
                      <h4>{{ __('website.Parent') }}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    {{ __('website.The flexibility of scheduling classes has been a blessing. As a working professional, I can learn at my own pace and the teachers are very accommodating with my schedule.') }}
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="{{ asset('website_assets/img/boy.jpeg') }}" alt="Student Profile" loading="lazy" width="60" height="60">
                    <div>
                      <h3>Yusuf Ali</h4>
                      <h4>{{ __('website.Professional Student') }}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    {{ __('website.The combination of traditional Islamic knowledge with modern teaching methods makes learning engaging and effective. I\'ve seen remarkable progress in my Quran memorization.') }}
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="{{ asset('website_assets/img/girl.jpeg') }}" alt="Student Profile" loading="lazy" width="60" height="60">
                    <div>
                      <h3>Layla Ibrahim</h3>
                      <h4>{{ __('website.Hifz Student') }}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    {{ __('website.The teachers\' dedication to ensuring proper pronunciation and understanding of the Quran is remarkable. Their attention to detail and personalized approach has helped me improve significantly.') }}
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="{{ asset('website_assets/img/boy2.jpeg') }}" alt="Student Profile" loading="lazy" width="60" height="60">
                    <div>
                      <h3>Omar Khalid</h3>
                      <h4>{{ __('website.Tajweed Student') }}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- /Testimonials Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <div class="container">
        <div class="section-title islamic-section-header" data-aos="fade-up">
          <h2>{{ __('website.Start Your Journey') }}</h2>
          <p>{{ __('website.Begin your Quranic education with us today') }}</p>
        </div>

        <div class="row gy-4 mb-5">
          <div class="col-12 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-telephone"></i>
              </div>
              <h3>{{ __('website.Contact Us') }}</h3>
              <p class="contact-info">
                <strong>WhatsApp:</strong> +33 7 58 68 41 70<br>
                <strong>Email:</strong> Madrassatazhary4@gmail.com
              </p>
              <div class="social-links mt-3">
                <a href="https://x.com/MadrassatAzhary?t=7nDlU99ZIjGwJTPM0daDwQ&s=09" target="_blank" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="https://www.instagram.com/madrassat.azhary?igsh=MXMxd3E5bnhxdzBjNw==" target="_blank" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.facebook.com/share/1FjSh3nMAU/" target="_blank" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-clock"></i>
              </div>
              <h3>{{ __('website.Available 24/7') }}</h3>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-12 col-lg-8 text-center" data-aos="fade-up" data-aos-delay="300">
            <div class="cta-box">
              <h3>{{ __('website.Ready to Start Learning?') }}</h3>
              <p class="mb-4">{{ __('website.Fill out our enrollment form to begin your Quranic journey with us. Our team will contact you shortly to discuss your learning goals and schedule.') }}</p>
              <a href="{{ route('enroll.show') }}" class="btn btn-islamic btn-lg px-4 py-3">{{ __('website.Enroll Now') }}</a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>

  <!-- Include Footer -->
  @include('website.partials.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Critical JavaScript Files -->
  <script src="{{ asset('website_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('website_assets/js/image-fallback.js') }}"></script>
  <script src="{{ asset('website_assets/js/critical.js') }}"></script>
  
  <!-- Dropdown Fix Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Ensure Bootstrap dropdowns work properly
      const dropdownToggleList = [].slice.call(document.querySelectorAll('[data-bs-toggle="dropdown"]'));
      const dropdownList = dropdownToggleList.map(function (dropdownToggleEl) {
        return new bootstrap.Dropdown(dropdownToggleEl);
      });
      
      // Add click event listeners to dropdown items to ensure they work
      document.querySelectorAll('.dropdown-item').forEach(function(item) {
        item.addEventListener('click', function(e) {
          // Close the dropdown after clicking an item
          const dropdown = bootstrap.Dropdown.getInstance(this.closest('.dropdown').querySelector('[data-bs-toggle="dropdown"]'));
          if (dropdown) {
            dropdown.hide();
          }
        });
      });
    });
  </script>
  
  <!-- Deferred JavaScript Files -->
  <script src="{{ asset('website_assets/vendor/php-email-form/validate.js') }}" defer></script>
  <script src="{{ asset('website_assets/vendor/aos/aos.js') }}" defer></script>
  <script src="{{ asset('website_assets/vendor/glightbox/js/glightbox.min.js') }}" defer></script>
  <script src="{{ asset('website_assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}" defer></script>
  <script src="{{ asset('website_assets/vendor/isotope-layout/isotope.pkgd.min.js') }}" defer></script>
  <script src="{{ asset('website_assets/vendor/swiper/swiper-bundle.min.js') }}" defer></script>
  <script src="{{ asset('website_assets/js/optimized.js') }}" defer></script>
  <script src="{{ asset('website_assets/js/image-optimizer.js') }}" defer></script>
  <script src="{{ asset('website_assets/js/performance-monitor.js') }}" defer></script>
  <script src="{{ asset('website_assets/js/main.js') }}" defer></script>
  <script src="{{ asset('website_assets/js/enroll-form.js') }}" defer></script>
  <script src="{{ asset('website_assets/js/language-switcher.js') }}" defer></script>

  <!-- Carousel will be initialized after content loading is complete -->

  <!-- Android Performance Optimization Script -->
  <script>
    // Mobile performance optimizations
    document.addEventListener('DOMContentLoaded', function() {
      const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
      
      if (isMobile) {
        // Reduce scroll performance impact
        let scrollTimeout;
        window.addEventListener('scroll', function() {
          if (scrollTimeout) {
            clearTimeout(scrollTimeout);
          }
          scrollTimeout = setTimeout(function() {
            // Handle scroll-based effects here
          }, 16); // ~60fps
        }, { passive: true });
        
        // Optimize images for mobile
        const images = document.querySelectorAll('img');
        images.forEach(img => {
          img.style.imageRendering = 'optimizeSpeed';
          // Add loading priority for above-the-fold images
          if (img.closest('.hero') || img.closest('.carousel-item')) {
            img.loading = 'eager';
          }
        });
        
        // Reduce animation complexity
        const animatedElements = document.querySelectorAll('.stat-card, .testimonial-card, .teacher-profile-card');
        animatedElements.forEach(el => {
          el.style.transition = 'none';
        });
        
        // Optimize carousel for mobile
        const carousel = document.getElementById('heroCarousel');
        if (carousel) {
          // Reduce carousel interval on mobile
          if (typeof bootstrap !== 'undefined') {
            const bsCarousel = new bootstrap.Carousel(carousel, {
              interval: 3000,
              ride: true,
              wrap: true,
              touch: true
            });
          }
        }
        
        // Lazy load non-critical images
        const lazyImages = document.querySelectorAll('img[loading="lazy"]:not(.hero img)');
        if ('IntersectionObserver' in window) {
          const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.src;
                img.classList.remove('lazy');
                observer.unobserve(img);
              }
            });
          });
          
          lazyImages.forEach(img => imageObserver.observe(img));
        }
      }
    });
  </script>

  <!-- Fixed WhatsApp Icon -->
  <div id="whatsapp-float" class="whatsapp-float">
    <a href="https://wa.me/33758684170" target="_blank" class="whatsapp-link">
      <i class="bi bi-whatsapp"></i>
    </a>
  </div>



  <!-- Additional Styles -->
  <style>
    /* Additional custom styles for enhanced visual appeal */
    
    .islamic-pattern-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-image: 
        radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.03) 0%, transparent 50%);
      background-size: 200px 200px, 300px 300px;
      background-position: 0 0, 100px 100px;
      background-repeat: repeat;
      pointer-events: none;
      z-index: 1;
    }
    
    .stat-card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 20px;
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
    }
    
    .stat-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
      transition: left 0.6s ease;
    }
    
    .stat-card:hover::before {
      left: 100%;
    }
    
    .stat-card:hover {
      transform: translateY(-10px) scale(1.02);
      background: rgba(255, 255, 255, 0.15);
      border-color: rgba(255, 255, 255, 0.3);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }
    
    .stat-icon {
      font-size: 3rem;
      color: #ffd700;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      animation: icon-pulse 2s infinite;
    }
    
    @keyframes icon-pulse {
      0%, 100% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.1);
      }
    }
    
    @keyframes pulse {
      0%, 100% {
        opacity: 1;
        transform: scale(1);
      }
      50% {
        opacity: 0.5;
        transform: scale(1.2);
      }
    }
    
    @keyframes counter-glow {
      0%, 100% {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      }
      50% {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3), 0 0 10px rgba(255, 215, 0, 0.5);
      }
    }
    
    .counter.animated {
      animation: counter-glow 3s ease-out;
    }
    
    /* Live counter indicators */
    .counter[data-live="true"] {
      position: relative;
    }
    
    .counter[data-live="true"] .live-indicator {
      font-size: 0.4em;
      opacity: 0.7;
      margin-left: 2px;
      animation: pulse 3s infinite;
    }
    
    @keyframes pulse {
      0%, 100% {
        opacity: 0.7;
        transform: scale(1);
      }
      50% {
        opacity: 1;
        transform: scale(1.1);
      }
    }
    
    .stat-number {
      font-size: 3.5rem;
      font-weight: 800;
      color: #ffffff;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      line-height: 1;
      margin-bottom: 0.5rem;
    }
    
    .stat-label {
      font-size: 1.3rem;
      font-weight: 600;
      color: #ffffff;
      margin-bottom: 0.5rem;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    }
    
    .stat-description {
      font-size: 0.95rem;
      color: rgba(255, 255, 255, 0.8);
      font-weight: 400;
    }
    
    /* Responsive adjustments for statistics */
    @media (max-width: 768px) {
      .stat-number {
        font-size: 2.5rem;
      }
      
      .stat-label {
        font-size: 1.1rem;
      }
      
      .stat-icon {
        font-size: 2.5rem;
      }
      
      .stat-card {
        padding: 1.5rem !important;
      }
    }
    
    @media (max-width: 576px) {
      .stat-number {
        font-size: 2rem;
      }
      
      .stat-label {
        font-size: 1rem;
      }
      
      .stat-icon {
        font-size: 2rem;
      }
    }
    
    /* Enhanced Islamic styling */
    .feature-card {
      border: 2px solid rgba(212, 175, 55, 0.2);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
    }
    
    .feature-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.1), transparent);
      transition: left 0.5s ease;
    }
    
    .feature-card:hover::before {
      left: 100%;
    }
    
    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(212, 175, 55, 0.2);
      border-color: rgba(212, 175, 55, 0.4);
    }
    
    .service-item {
      border: 1px solid rgba(34, 139, 34, 0.2);
      transition: all 0.3s ease;
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
    }
    
    .service-item:hover {
      border-color: rgba(34, 139, 34, 0.4);
      box-shadow: 0 10px 25px rgba(34, 139, 34, 0.15);
    }
    
    .team-card {
      border: 2px solid rgba(30, 58, 138, 0.2);
      transition: all 0.3s ease;
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
    }
    
    .team-card:hover {
      border-color: rgba(30, 58, 138, 0.4);
      box-shadow: 0 10px 25px rgba(30, 58, 138, 0.15);
    }
    
    .testimonial-card {
      border: 1px solid rgba(212, 175, 55, 0.2);
      transition: all 0.3s ease;
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
    }
    
    .testimonial-card:hover {
      border-color: rgba(212, 175, 55, 0.4);
      box-shadow: 0 10px 25px rgba(212, 175, 55, 0.15);
    }
    
    .article-card {
      border: 1px solid rgba(34, 139, 34, 0.2);
      transition: all 0.3s ease;
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
    }
    
    .article-card:hover {
      border-color: rgba(34, 139, 34, 0.4);
      box-shadow: 0 10px 25px rgba(34, 139, 34, 0.15);
    }
    
    .info-card {
      border: 2px solid rgba(30, 58, 138, 0.2);
      transition: all 0.3s ease;
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      padding: 2rem;
      border-radius: 15px;
      height: 100%;
    }
    
    .info-card:hover {
      border-color: rgba(30, 58, 138, 0.4);
      box-shadow: 0 10px 25px rgba(30, 58, 138, 0.15);
    }
    
    /* Mobile-specific improvements for contact section */
    @media (max-width: 768px) {
      .contact .row.gy-4 {
        margin: 0 -10px;
      }
      
      .contact .col-lg-6 {
        padding: 0 10px;
        margin-bottom: 1rem;
      }
      
      .info-card {
        padding: 1.5rem;
        margin-bottom: 1rem;
        border-radius: 12px;
      }
      
      .info-card h3 {
        font-size: 1.3rem;
        margin-bottom: 1rem;
      }
      
      .info-card p {
        font-size: 0.95rem;
        line-height: 1.5;
        margin-bottom: 1rem;
      }
      
      .info-card .icon-box {
        margin-bottom: 1rem;
      }
      
      .info-card .icon-box i {
        font-size: 2rem;
      }
      
      .social-links {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-top: 1rem;
      }
      
      .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: rgba(30, 58, 138, 0.1);
        border-radius: 50%;
        color: #1e3a8a;
        text-decoration: none;
        transition: all 0.3s ease;
      }
      
      .social-links a:hover {
        background: rgba(30, 58, 138, 0.2);
        transform: scale(1.1);
      }
      
      .cta-box {
        padding: 2rem 1rem;
        margin-top: 2rem;
      }
      
      .cta-box h3 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
      }
      
      .cta-box p {
        font-size: 1rem;
        line-height: 1.6;
      }
      
      .btn-islamic.btn-lg {
        padding: 0.75rem 2rem;
        font-size: 1rem;
        white-space: normal;
        word-wrap: break-word;
      }
    }
    
    @media (max-width: 576px) {
      .contact .container {
        padding: 0 15px;
      }
      
      .info-card {
        padding: 1.25rem;
        border-radius: 10px;
      }
      
      .info-card h3 {
        font-size: 1.2rem;
      }
      
      .info-card p {
        font-size: 0.9rem;
      }
      
      .cta-box {
        padding: 1.5rem 1rem;
      }
      
      .cta-box h3 {
        font-size: 1.3rem;
      }
      
      .cta-box p {
        font-size: 0.95rem;
      }
      
      .btn-islamic.btn-lg {
        padding: 0.6rem 1.5rem;
        font-size: 0.95rem;
        width: 100%;
        max-width: 280px;
      }
      
      .contact-info {
        word-break: break-word;
        overflow-wrap: break-word;
      }
      
      .contact-info strong {
        color: #1e3a8a;
        font-weight: 600;
      }
    }
    
    /* Additional mobile optimizations */
    @media (max-width: 480px) {
      .contact .section-title h2 {
        font-size: 1.8rem;
      }
      
      .contact .section-title p {
        font-size: 0.95rem;
      }
      
      .info-card {
        padding: 1rem;
        border-radius: 8px;
      }
      
      .info-card h3 {
        font-size: 1.1rem;
      }
      
      .info-card p {
        font-size: 0.85rem;
      }
      
      .cta-box {
        padding: 1.25rem 0.75rem;
      }
      
      .cta-box h3 {
        font-size: 1.2rem;
      }
      
      .cta-box p {
        font-size: 0.9rem;
      }
      
             .btn-islamic.btn-lg {
         padding: 0.5rem 1.25rem;
         font-size: 0.9rem;
         max-width: 250px;
       }
           }
      
      /* About Section Mobile Responsiveness */
      .about {
        padding: 60px 0;
      }
      
      .about-content {
        padding: 0 15px;
      }
      
      .about-content .who-we-are {
        color: #d4af37;
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 1rem;
        text-transform: uppercase;
        letter-spacing: 1px;
      }
      
      .about-content h3 {
        font-size: 2.2rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 1.5rem;
        line-height: 1.3;
      }
      
      .about-content .fst-italic {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #6c757d;
        margin-bottom: 2rem;
      }
      
      .about-features {
        list-style: none;
        padding: 0;
        margin-bottom: 2rem;
      }
      
      .about-features li {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1rem;
        padding: 0.5rem 0;
      }
      
      .about-features li i {
        color: #28a745;
        font-size: 1.2rem;
        margin-right: 1rem;
        margin-top: 0.2rem;
        flex-shrink: 0;
      }
      
      .about-features li span {
        color: #495057;
        font-size: 1rem;
        line-height: 1.5;
      }
      
      .read-more {
        display: inline-flex;
        align-items: center;
        color: #d4af37;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        padding: 0.75rem 1.5rem;
        border: 2px solid #d4af37;
        border-radius: 25px;
        background: transparent;
      }
      
      .read-more:hover {
        background: #d4af37;
        color: white;
        transform: translateY(-2px);
        text-decoration: none;
      }
      
      .read-more i {
        margin-left: 0.5rem;
        transition: transform 0.3s ease;
      }
      
      .read-more:hover i {
        transform: translateX(5px);
      }
      
      .about-image-container {
        text-align: center;
        padding: 0 15px;
      }
      
      .about-image-container img {
        max-width: 100%;
        height: auto;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      }
      
      /* Mobile-specific improvements for about section */
      @media (max-width: 768px) {
        .about {
          padding: 40px 0;
        }
        
        .about-content {
          text-align: center;
          padding: 0 10px;
          margin-bottom: 2rem;
        }
        
        .about-content .who-we-are {
          font-size: 1rem;
          margin-bottom: 0.75rem;
        }
        
        .about-content h3 {
          font-size: 1.8rem;
          margin-bottom: 1rem;
          line-height: 1.2;
        }
        
        .about-content .fst-italic {
          font-size: 1rem;
          margin-bottom: 1.5rem;
          text-align: center;
        }
        
        .about-features {
          text-align: left;
          margin-bottom: 1.5rem;
        }
        
        .about-features li {
          margin-bottom: 0.75rem;
          padding: 0.25rem 0;
        }
        
        .about-features li i {
          font-size: 1.1rem;
          margin-right: 0.75rem;
        }
        
        .about-features li span {
          font-size: 0.95rem;
          line-height: 1.4;
        }
        
        .read-more {
          font-size: 1rem;
          padding: 0.6rem 1.25rem;
          width: auto;
          justify-content: center;
        }
        
        .about-image-container {
          padding: 0 10px;
        }
        
        .about-image-container img {
          border-radius: 12px;
          max-width: 90%;
        }
      }
      
      @media (max-width: 576px) {
        .about {
          padding: 30px 0;
        }
        
        .about-content {
          padding: 0 5px;
        }
        
        .about-content .who-we-are {
          font-size: 0.9rem;
          margin-bottom: 0.5rem;
        }
        
        .about-content h3 {
          font-size: 1.5rem;
          margin-bottom: 0.75rem;
        }
        
        .about-content .fst-italic {
          font-size: 0.9rem;
          margin-bottom: 1.25rem;
        }
        
        .about-features li {
          margin-bottom: 0.5rem;
        }
        
        .about-features li i {
          font-size: 1rem;
          margin-right: 0.5rem;
        }
        
        .about-features li span {
          font-size: 0.85rem;
          line-height: 1.3;
        }
        
        .read-more {
          font-size: 0.9rem;
          padding: 0.5rem 1rem;
          width: 100%;
          max-width: 250px;
        }
        
        .about-image-container img {
          max-width: 85%;
          border-radius: 10px;
        }
      }
      
      @media (max-width: 480px) {
        .about-content h3 {
          font-size: 1.3rem;
        }
        
        .about-content .fst-italic {
          font-size: 0.85rem;
        }
        
        .about-features li span {
          font-size: 0.8rem;
        }
        
        .read-more {
          font-size: 0.85rem;
          padding: 0.45rem 0.9rem;
          max-width: 220px;
        }
        
        .about-image-container img {
          max-width: 80%;
        }
      }
      
      /* Islamic decorative elements */
    .section-title h2::before {
      background: linear-gradient(90deg, var(--islamic-gold), var(--islamic-green));
    }
    
    .section-title h2::after {
      background: linear-gradient(90deg, var(--islamic-green), var(--islamic-blue));
    }
    
    /* Enhanced button styling */
    .btn-primary {
      background: linear-gradient(135deg, var(--islamic-gold), var(--islamic-green));
      border: none;
      transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
      background: linear-gradient(135deg, var(--islamic-green), var(--islamic-blue));
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
    }
    
    .btn-outline-info {
      border-color: var(--islamic-gold);
      color: var(--islamic-gold);
      transition: all 0.3s ease;
    }
    
    .btn-outline-info:hover {
      background-color: var(--islamic-gold);
      border-color: var(--islamic-gold);
      color: white;
      transform: translateY(-2px);
    }
    
    /* Islamic pattern overlay for main sections */
    .hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-image: 
        radial-gradient(circle at 20% 20%, rgba(212, 175, 55, 0.05) 0%, transparent 30%),
        radial-gradient(circle at 80% 80%, rgba(34, 139, 34, 0.05) 0%, transparent 30%);
      background-size: 100px 100px, 150px 150px;
      background-position: 0 0, 50px 50px;
      background-repeat: repeat;
      pointer-events: none;
      z-index: 1;
    }
    
    .hero .carousel {
      position: relative;
      z-index: 2;
    }
    
    /* Scroll Top and WhatsApp buttons now use main.css styles */
    
    /* Teachers Slider Styles */
    .teachers-slider {
      position: relative;
      padding: 0 50px;
    }
    
    .teachers-slider .swiper-slide {
      height: auto;
    }
    
    .teachers-slider .team-card {
      height: 100%;
      margin: 0;
    }
    
    .teachers-slider .swiper-button-next,
    .teachers-slider .swiper-button-prev {
      width: 40px;
      height: 40px;
      background-color: rgba(2, 37, 108, 0.9);
      border-radius: 50%;
      color: white;
      transition: all 0.3s ease;
    }
    
    .teachers-slider .swiper-button-next:hover,
    .teachers-slider .swiper-button-prev:hover {
      background-color: rgba(2, 37, 108, 1);
      transform: scale(1.1);
    }
    
    .teachers-slider .swiper-button-next::after,
    .teachers-slider .swiper-button-prev::after {
      font-size: 18px;
      font-weight: bold;
    }
    
    .teachers-slider .swiper-pagination {
      bottom: -30px;
    }
    
    .teachers-slider .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      background-color: rgba(2, 37, 108, 0.3);
      opacity: 1;
      transition: all 0.3s ease;
    }
    
    .teachers-slider .swiper-pagination-bullet-active {
      background-color: rgba(2, 37, 108, 0.9);
      transform: scale(1.2);
    }
    
    @media (max-width: 768px) {
      .teachers-slider {
        padding: 0 30px;
      }
      
      .teachers-slider .swiper-button-next,
      .teachers-slider .swiper-button-prev {
        width: 35px;
        height: 35px;
      }
      
      .teachers-slider .swiper-button-next::after,
      .teachers-slider .swiper-button-prev::after {
        font-size: 16px;
      }
    }
    
    /* Teacher Profile Card Styles - Matching the Design */
    .teacher-profile-card {
      background: white;
      border-radius: 20px 20px 20px 20px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      position: relative;
      height: 100%;
      display: flex;
      flex-direction: column;
      background-image: 
        radial-gradient(circle at 20% 20%, rgba(212, 175, 55, 0.03) 0%, transparent 30%),
        radial-gradient(circle at 80% 80%, rgba(34, 139, 34, 0.03) 0%, transparent 30%);
      background-size: 100px 100px, 150px 150px;
      background-position: 0 0, 50px 50px;
      background-repeat: repeat;
    }
    
    .teacher-photo-section {
      position: relative;
      background: white;
      padding: 0;
      overflow: hidden;
      border-radius: 20px 20px 0 0;
    }
    
    .teacher-photo {
      width: 100%;
      height: 280px;
      object-fit: contain;
      object-position: center top;
      border-radius: 20px 20px 0 0;
      display: block;
      position: relative;
      background-color: #f8f9fa;
    }
    
    .teacher-photo::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 30px;
      background: white;
      border-radius: 0 0 20px 20px;
      z-index: 1;
    }
    
    .teacher-info-section {
      padding: 25px 20px 30px 20px;
      text-align: center;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    
    .teacher-name {
      font-size: 1.5rem;
      font-weight: 700;
      color: #2c3e50;
      margin-bottom: 15px;
      line-height: 1.2;
    }
    
    .teacher-description {
      color: #6c757d;
      font-size: 0.95rem;
      line-height: 1.6;
      margin-bottom: 25px;
      flex-grow: 1;
    }
    
    .teacher-btn {
      display: inline-block;
      background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
      color: white;
      padding: 12px 30px;
      border-radius: 25px;
      text-decoration: none;
      font-weight: 600;
      font-size: 0.95rem;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
    }
    
    .teacher-btn:hover {
      background: linear-gradient(135deg, #218838 0%, #1ea085 100%);
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(40, 167, 69, 0.4);
    }
    
    /* Responsive adjustments for teacher cards */
    @media (max-width: 768px) {
      .teacher-photo {
        height: 220px;
      }
      
      .teacher-name {
        font-size: 1.3rem;
      }
      
      .teacher-description {
        font-size: 0.9rem;
      }
      
      .teacher-btn {
        padding: 10px 25px;
        font-size: 0.9rem;
      }
    }
  </style>

  <!-- Optimized Scroll Effect Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const header = document.getElementById('fixedHeader');
      let ticking = false;
      
      function updateHeader() {
        if (header) {
          header.style.boxShadow = window.scrollY > 10 ? '0 2px 20px rgba(0, 0, 0, 0.1)' : 'none';
        }
        ticking = false;
      }
      
      function requestTick() {
        if (!ticking) {
          requestAnimationFrame(updateHeader);
          ticking = true;
        }
      }
      
      window.addEventListener('scroll', requestTick, { passive: true });
    });
  </script>

    <!-- Optimized Counter Animation Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Simple counter animation with Intersection Observer
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
    });
  </script>

  <!-- Optimized Loading Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const loadingSpinner = document.getElementById('loading-spinner');
      const heroCarousel = document.getElementById('heroCarousel');
      
      // Simple loading logic - hide spinner after critical content loads
      function hideSpinner() {
        if (loadingSpinner) {
          loadingSpinner.classList.add('hidden');
          setTimeout(() => {
            if (loadingSpinner.parentNode) {
              loadingSpinner.parentNode.removeChild(loadingSpinner);
            }
          }, 500);
        }
        
        // Initialize carousel if available
        if (heroCarousel && typeof bootstrap !== 'undefined') {
          const bsCarousel = new bootstrap.Carousel(heroCarousel, {
            interval: 3000,
            ride: true,
            wrap: true,
            touch: true
          });
        }
      }
      
      // Hide spinner after a short delay or when page is fully loaded
      setTimeout(hideSpinner, 1500);
      
      // Fallback: hide spinner when page is fully loaded
      window.addEventListener('load', hideSpinner);
    });
  </script>

  <!-- Optimized JavaScript Loading -->
  <script>
    // Load non-critical JavaScript after page load
    window.addEventListener('load', function() {
      // Load other libraries asynchronously (Bootstrap already loaded above)
      const scripts = [
        '/website_assets/vendor/aos/aos.js',
        '/website_assets/vendor/glightbox/js/glightbox.min.js',
        '/website_assets/vendor/swiper/swiper-bundle.min.js',
        '/website_assets/js/optimized.js'
      ];
      
      scripts.forEach(src => {
        const script = document.createElement('script');
        script.src = src;
        script.async = true;
        script.defer = true;
        document.body.appendChild(script);
      });
    });
  </script>

  <!-- Service Worker Registration -->
  <script>
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
  </script>

</body>

</html>

