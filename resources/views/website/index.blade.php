<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Madrassat Azhary - Islamic Education Online</title>
  <meta name="description" content="Learn Quran, Arabic, and Islamic studies online with qualified French-speaking teachers. Join our community of learners worldwide.">
  <meta name="keywords" content="Quran online, Arabic learning, Islamic studies, French Muslim education, online Islamic academy">
  
  <!-- Performance Optimizations -->
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
  <!-- Critical CSS Inline -->
  <style>
    /* Critical CSS for above-the-fold content */
    :root {
      --islamic-gold: #d4af37;
      --islamic-green: #228b22;
      --islamic-blue: #1e3a8a;
    }
    
    body {
      font-family: "Roboto", system-ui, -apple-system, sans-serif;
      line-height: 1.6;
      color: #212529;
      margin: 0;
      padding: 0;
    }
    
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
    
    .btn-islamic:hover {
      background: linear-gradient(135deg, var(--islamic-green), var(--islamic-blue));
      transform: translateY(-2px);
      color: white;
      text-decoration: none;
    }
    
    .main {
      padding-top: 140px;
    }
    
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
    }
    
    .row {
      display: flex;
      flex-wrap: wrap;
      margin: 0 -15px;
    }
    
    .col-12, .col-md-4, .col-md-6, .col-lg-3, .col-lg-6 {
      padding: 0 15px;
      box-sizing: border-box;
    }
    
    .col-12 { flex: 0 0 100%; }
    .col-md-4 { flex: 0 0 33.333333%; }
    .col-md-6 { flex: 0 0 50%; }
    .col-lg-3 { flex: 0 0 25%; }
    .col-lg-6 { flex: 0 0 50%; }
    
    /* Additional critical styles */
    .text-white { color: white !important; }
    .text-center { text-align: center; }
    .mb-4 { margin-bottom: 1.5rem; }
    .mb-lg-0 { margin-bottom: 0; }
    .py-5 { padding-top: 3rem; padding-bottom: 3rem; }
    .section { padding: 60px 0; }
    .display-5 { font-size: 3rem; font-weight: 300; line-height: 1.2; }
    .fw-bold { font-weight: 700 !important; }
    .btn-lg { padding: 0.75rem 1.5rem; font-size: 1.25rem; }
    .img-fluid { max-width: 100%; height: auto; }
    .rounded-4 { border-radius: 0.5rem; }
    .shadow { box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); }
    
    @media (max-width: 768px) {
      .col-md-4, .col-md-6 { flex: 0 0 100%; }
      .display-5 { font-size: 2.5rem; }
    }
    
    @media (max-width: 992px) {
      .col-lg-3, .col-lg-6 { flex: 0 0 50%; }
    }
  </style>

  <!-- Favicons -->
  <link href="{{ asset('website_assets/img/logo-no.png') }}" rel="icon">
  <link href="{{ asset('website_assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts with display=swap -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('website_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('website_assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('website_assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('website_assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('website_assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('website_assets/css/main.css') }}" rel="stylesheet">
</head>
<body class="index-page">

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
        <img src="{{asset('website_assets/img/logo-no.png')}}" alt="" style="max-height: 60px;">
      </a>
      
      <!-- Mobile Trial Button - Centered in Mobile Topbar -->
      <div class="d-flex d-lg-none justify-content-center position-fixed" style="left: 50%; transform: translateX(-50%); width: auto; max-width: 160px; z-index: 1050; top: 50px;">
        <a href="{{ route('enroll.show') }}" class="btn btn-primary btn-sm" style="background-color:rgb(2, 37, 108); opacity: 0.88; padding: 0.4rem 0.6rem; font-size: 0.75rem; white-space: nowrap;">
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

  <main class="main" style="padding-top: 140px;">

    <!-- Hero Section -->
    <section id="hero" class="hero section p-0" style="background: url('{{ asset('hero-back.jpg') }}') no-repeat center center; background-size: cover; position: relative; direction: ltr;">
      <!-- Transparent Overlay -->
      <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color:rgb(2, 37, 108); opacity: 0.88;"></div>
      <!-- Carousel Content (Third Layer) -->
      <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000" style="position: relative; z-index: 2;">
        <div class="carousel-inner pt-5">
          <!-- Slide 1: Welcome (default/active) -->
          <div class="carousel-item active">
            <div class="container">
              <div class="row align-items-center flex-column flex-lg-row" style="min-height: 560px;">
                <!-- Image (left) -->
                <div class="col-12 col-lg-6 text-center mb-4 mb-lg-0">
                  <img src="{{ asset('presenting.png') }}" alt="Welcome Man" class="img-fluid" style="max-height: 400px;">
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
                  <img src="{{ asset('man2.png') }}" alt="Online Learning" class="img-fluid" style="max-height: 400px;">
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
                  <img src="{{ asset('man3.png') }}" alt="French Community" class="img-fluid" style="max-height: 400px;">
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
                  <img src="{{ asset('man4.png') }}" alt="Children's Arabic Learning" class="img-fluid" style="max-height: 400px;">
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
            {{ __('website.Join thousands of students who have transformed their Quranic journey with us') }}
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
                <span class="counter" data-target="2500" data-live="true" data-live-increment="3">0</span>+
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
                <span class="counter" data-target="85" data-live="true" data-live-increment="1">0</span>+
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
                <span class="counter" data-target="15000" data-live="true" data-live-increment="25">0</span>+
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
                <span class="counter" data-target="45" data-live="true" data-live-increment="1">0</span>+
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
                <span class="counter" data-target="750" data-live="true" data-live-increment="2">0</span>+
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
                <span class="counter" data-target="12" data-live="true" data-live-increment="1">0</span>+
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

        <div class="row gy-4">

            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
              <p class="who-we-are">{{ __('website.Who We Are') }}</p>
              <h3>{{ __('website.Bringing Islamic Knowledge to French Speakers Worldwide') }}</h3>
              <p class="fst-italic">
                {{ __('website.Azhary Academy is dedicated to making Quranic education and Islamic studies accessible to French-speaking Muslims around the world through personalized online learning.') }}
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>{{ __('website.Native French-speaking teachers with deep knowledge of Islamic sciences') }}</span></li>
                <li><i class="bi bi-check-circle"></i> <span>{{ __('website.Personalized curriculum tailored to each student\'s level and goals') }}</span></li>
                <li><i class="bi bi-check-circle"></i> <span>{{ __('website.Comprehensive courses in Quran recitation, memorization, tajweed') }}</span></li>
                <li><i class="bi bi-check-circle"></i> <span>{{ __('website.Flexible scheduling to accommodate students across different time zones') }}</span></li>
                <li><i class="bi bi-check-circle"></i> <span>{{ __('website.Engaging teaching methods that make learning enjoyable and effective') }}</span></li>
              </ul>
              <a href="#services" class="read-more"><span>{{ __('website.Explore Our Courses') }}</span><i class="bi bi-arrow-right"></i></a>
            </div>
          
            <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
              <img src="{{asset('about.png')}}" class="img-fluid rounded-4 shadow" alt="Online Islamic Class">
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
                  <img src="{{ asset($teacher->photo) }}" class="teacher-photo" alt="{{ $teacher->name }}">
                </div>
                <div class="teacher-info-section">
                  <h4 class="teacher-name">{{ $teacher->name }}</h4>
                  <p class="teacher-description">{!! Str::limit($teacher->short_description, 200) !!}</p>
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
                    <img src="{{ asset('website_assets/img/test_man1.png') }}" alt="Student Profile">
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
                    <img src="{{ asset('website_assets/img/test_girl.png') }}" alt="Student Profile">
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
                    <img src="{{ asset('website_assets/img/test_girl.png') }}" alt="Student Profile">
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
                    <img src="{{ asset('website_assets/img/test_man2.png') }}" alt="Student Profile">
                    <div>
                      <h3>Yusuf Ali</h3>
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
                    <img src="{{ asset('website_assets/img/test_girl.png') }}" alt="Student Profile">
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
                    <img src="{{ asset('website_assets/img/test_man2.png') }}" alt="Student Profile">
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

    <!-- Video Testimonials Section -->
    <section id="video-testimonials" class="video-testimonials section">
      <div class="container section-title islamic-section-header" data-aos="fade-up">
        <h2>{{ __('website.Video Testimonials') }}</h2>
        <p>{{ __('website.Watch our students share their learning experience and success stories') }}</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4 justify-content-center">
          <!-- Video 1 -->
        

          <!-- Video 2 -->
          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="video-testimonial-card h-100 bg-white rounded-4 shadow-lg overflow-hidden">
              <div class="video-container position-relative">
                <video class="w-100" controls>
                  <source src="{{ asset('video2.mp4') }}" type="video/mp4">
                  {{ __('website.Your browser does not support the video tag.') }}
                </video>
              </div>
          
            </div>
          </div>

      
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="400">
          <div class="cta-video-box bg-primary text-white p-5 rounded-4">
            <h3 class="mb-3" style="color: white;">{{ __('website.Join Our Success Stories') }}</h3>
            <p class="mb-4">{{ __('website.Be part of our growing community of successful learners. Start your Quranic journey today and create your own success story.') }}</p>
            <a href="{{ route('enroll.show') }}" class="btn btn-islamic btn-lg px-5">{{ __('website.Start Learning Now') }}</a>
          </div>
        </div>
      </div>

      <style>
        .video-testimonials {
          padding: 80px 0;
        }
        
        .video-testimonial-card {
          transition: transform 0.3s ease, box-shadow 0.3s ease;
          border: none;
        }
        
        .video-testimonial-card:hover {
          transform: translateY(-10px);
          box-shadow: 0 20px 40px rgba(0,0,0,0.1) !important;
        }
        
        .video-container {
          position: relative;
          overflow: hidden;
        }
        
        .video-container video {
          display: block;
          width: 100%;
          height: auto;
        }
        
        .video-content h4 {
          color: #13223F;
          font-weight: 600;
        }
        
        .video-content p {
          font-size: 0.95rem;
          line-height: 1.6;
        }
        
        .cta-video-box {
          background: linear-gradient(135deg, #0d7adb 0%, #0a2260 100%) !important;
          box-shadow: 0 15px 35px rgba(13, 122, 219, 0.3);
        }
        
        .cta-video-box h3 {
          font-weight: 700;
          font-size: 2rem;
        }
        
        .cta-video-box p {
          font-size: 1.1rem;
          opacity: 0.9;
        }
        
        .avatar img {
          border: 2px solid #e9ecef;
        }
        
        @media (max-width: 768px) {
          .video-testimonials {
            padding: 60px 0;
          }
          
          .cta-video-box {
            padding: 3rem 2rem !important;
          }
          
          .cta-video-box h3 {
            font-size: 1.5rem;
          }
        }
      </style>
    </section><!-- /Video Testimonials Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <div class="container">
        <div class="section-title islamic-section-header" data-aos="fade-up">
          <h2>{{ __('website.Start Your Journey') }}</h2>
          <p>{{ __('website.Begin your Quranic education with us today') }}</p>
        </div>

        <div class="row gy-4 mb-5">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-telephone"></i>
              </div>
              <h3>{{ __('website.Contact Us') }}</h3>
              <p>WhatsApp: +33 7 58 68 41 70<br>
                Email: Madrassatazhary4@gmail.com</p>
              <div class="social-links mt-3">
                <a href="https://x.com/MadrassatAzhary?t=7nDlU99ZIjGwJTPM0daDwQ&s=09" target="_blank"><i class="bi bi-twitter-x"></i></a>
                <a href="https://www.instagram.com/madrassat.azhary?igsh=MXMxd3E5bnhxdzBjNw==" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.facebook.com/share/1FjSh3nMAU/" target="_blank"><i class="bi bi-facebook"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-clock"></i>
              </div>
              <h3>{{ __('website.Available 24/7') }}</h3>
              <p>{{ __('website.Our teachers are available around the clock to accommodate students from different time zones. Book your session at any time that suits you.') }}</p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="300">
            <div class="cta-box">
              <h3>{{ __('website.Ready to Start Learning?') }}</h3>
              <p class="mb-4">{{ __('website.Fill out our enrollment form to begin your Quranic journey with us. Our team will contact you shortly to discuss your learning goals and schedule.') }}</p>
              <a href="{{ route('enroll.show') }}" class="btn btn-islamic btn-lg px-5 py-3">{{ __('website.Enroll Now') }}</a>
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

  <!-- Vendor JS Files -->
  <script src="{{ asset('website_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('website_assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('website_assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('website_assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('website_assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('website_assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('website_assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('website_assets/js/main.js') }}"></script>
  <script src="{{ asset('website_assets/js/enroll-form.js') }}"></script>

  <!-- Carousel Auto-Start Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const carousel = document.getElementById('heroCarousel');
      if (carousel) {
        const bsCarousel = new bootstrap.Carousel(carousel, {
          interval: 2000,
          ride: true,
          wrap: true
        });
        // Force start the carousel
        bsCarousel.cycle();
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
    
    @keyframes live-glow {
      0%, 100% {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      }
      50% {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3), 0 0 10px rgba(255, 215, 0, 0.5);
      }
    }
    
    .counter[data-live="true"] {
      animation: live-glow 3s infinite;
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
    }
    
    .info-card:hover {
      border-color: rgba(30, 58, 138, 0.4);
      box-shadow: 0 10px 25px rgba(30, 58, 138, 0.15);
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
    
    /* WhatsApp Float Styles */
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
    
    .whatsapp-link:hover {
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
      border-radius: 90px 90px 20px 20px;
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
      border-radius: 90px 90px 0 0;
    }
    
    .teacher-photo {
      width: 100%;
      height: 280px;
      object-fit: cover;
      border-radius: 0 0 20px 20px;
      display: block;
      position: relative;
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

  <!-- Scroll Shadow Effect Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const header = document.getElementById('fixedHeader');
      
      window.addEventListener('scroll', function() {
        if (window.scrollY > 10) {
          header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
        } else {
          header.style.boxShadow = 'none';
        }
      });
    });
  </script>

  <!-- Counter Animation Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Counter animation function
      function animateCounter(element, target, duration = 2000) {
        const start = 0;
        const increment = target / (duration / 16); // 60fps
        let current = start;
        
        const timer = setInterval(() => {
          current += increment;
          if (current >= target) {
            current = target;
            clearInterval(timer);
          }
          element.textContent = Math.floor(current);
        }, 16);
      }
      
      // Live counter update function
      function startLiveCounter(element, baseTarget, increment) {
        let currentValue = baseTarget;
        
        setInterval(() => {
          currentValue += increment;
          element.textContent = Math.floor(currentValue);
        }, 3000); // Update every 3 seconds
      }
      
      // Intersection Observer for triggering counter animation
      const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px 0px -100px 0px'
      };
      
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const counter = entry.target.querySelector('.counter');
            if (counter && !counter.classList.contains('animated')) {
              const target = parseInt(counter.getAttribute('data-target'));
              const isLive = counter.getAttribute('data-live') === 'true';
              const liveIncrement = parseInt(counter.getAttribute('data-live-increment')) || 1;
              
              counter.classList.add('animated');
              animateCounter(counter, target);
              
              // Start live updates if enabled
              if (isLive) {
                setTimeout(() => {
                  startLiveCounter(counter, target, liveIncrement);
                }, 2000); // Start live updates after initial animation
              }
            }
          }
        });
      }, observerOptions);
      
      // Observe all stat cards
      const statCards = document.querySelectorAll('.stat-card');
      statCards.forEach(card => {
        observer.observe(card);
      });
      
      // Add pulsing effect to live counters
      function addLiveIndicator() {
        const liveCounters = document.querySelectorAll('.counter[data-live="true"]');
        liveCounters.forEach(counter => {
          counter.style.position = 'relative';
          
          // Add live indicator dot
          const liveDot = document.createElement('span');
          liveDot.innerHTML = ' 🔴';
          liveDot.style.fontSize = '0.5em';
          liveDot.style.animation = 'pulse 2s infinite';
          counter.appendChild(liveDot);
        });
      }
      
      // Add live indicator after a delay
      setTimeout(addLiveIndicator, 3000);
    });
  </script>

</body>

</html></html>

