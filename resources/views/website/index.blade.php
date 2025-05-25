<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Azhary Academy</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('website_assets/img/logo-no.png') }}" rel="icon">
  <link href="{{ asset('website_assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('website_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('website_assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('website_assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('website_assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('website_assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('website_assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Invent
  * Template URL: https://bootstrapmade.com/invent-bootstrap-business-template/
  * Updated: May 12 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('website_assets/img/logo-no.png')}}" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">{{ __('website.Home') }}</a></li>
          <li><a href="#about">{{ __('website.About') }}</a></li>
          <li><a href="#services">{{ __('website.Services') }}</a></li>
          <li><a href="#portfolio">{{ __('website.Portfolio') }}</a></li>
          <li><a href="#pricing">{{ __('website.Pricing') }}</a></li>
          <li><a href="#team">{{ __('website.Team') }}</a></li>
          <li><a href="{{ route('website.articles.index') }}">{{ __('website.Articles') }}</a></li>
          <li><a href="#contact">{{ __('website.Contact') }}</a></li>
          <li class="dropdown language-switcher">
            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-globe"></i> {{ strtoupper(app()->getLocale()) }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('language.switch', 'fr') }}">Français</a></li>
              <li><a class="dropdown-item" href="{{ route('language.switch', 'en') }}">English</a></li>
            </ul>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ route('enroll.show') }}">{{ __('website.Get Started') }}</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="badge-wrapper mb-3">
              <div class="d-inline-flex align-items-center rounded-pill border border-accent-light">
                <div class="icon-circle me-2">
                  <i class="bi bi-book"></i>
                </div>
                <span class="badge-text me-3">{{ __('website.Learn Quran in French') }}</span>
              </div>
            </div>

            <h1 class="hero-title mb-4">{{ __('website.Discover the beauty of the Quran in your native language') }}</h1>

            <p class="hero-description mb-4">{{ __('website.Join our specialized courses designed for French speakers to understand the Noble Quran. Our programs combine classical Arabic teachings with native French instruction to make Islamic knowledge accessible and meaningful.') }}</p>

            <div class="cta-wrapper">
              <a href="#services" class="btn btn-primary">{{ __('website.Explore Courses') }}</a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image">
              <img src="{{asset('website_assets/img/hero-main.png')}}" alt="Quran Learning" class="img-fluid" loading="lazy">
            </div>
          </div>
        </div>

        <div class="row feature-boxes">
          <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-play-circle"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">{{ __('website.Free Trial Course') }}</h3>
                <p class="feature-text">{{ __('website.Start your Quranic journey with a complimentary trial session to experience our teaching methodology.') }}</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-award"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">{{ __('website.Certificate of Completion') }}</h3>
                <p class="feature-text">{{ __('website.Receive an official certificate upon successful completion of our Quran courses.') }}</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-clock"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">{{ __('website.Flexibility') }}</h3>
                <p class="feature-text">{{ __('website.Our teachers are available 24/7 to accommodate students from different time zones.') }}</p>
              </div>
            </div>
          </div>
        </div>



      </div>

    </section><!-- /Hero Section -->

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
              <img src="{{asset('website_assets/img/muslim.jpg')}}" class="img-fluid rounded-4 shadow" alt="Online Islamic Class">
            </div>
          
          </div>

      </div>
    </section><!-- /About Section -->

    <!-- How We Work Section -->
    <section id="how-we-work" class="how-we-work section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{ __('website.How We Work') }}</h2>
        <p>{{ __('website.Our simple and effective learning process designed for students of all ages and backgrounds') }}</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="steps-5">
          <div class="process-container">

            <div class="process-item" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <span class="step-number">01</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-calendar-check"></i>
                  </div>
                  <div class="step-content">
                    <h3>{{ __('website.Free Assessment') }}</h3>
                    <p>{{ __('website.We begin with a complimentary evaluation session to understand your current level, goals, and learning style to create a personalized learning journey.') }}</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

            <div class="process-item" data-aos="fade-up" data-aos-delay="300">
              <div class="content">
                <span class="step-number">02</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-journal-text"></i>
                  </div>
                  <div class="step-content">
                    <h3>{{ __('website.Custom Curriculum') }}</h3>
                    <p>{{ __('website.Our qualified instructors develop a tailored curriculum that matches your proficiency level, whether you\'re a beginner starting with Arabic letters or an advanced student perfecting tajweed.') }}</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

            <div class="process-item" data-aos="fade-up" data-aos-delay="400">
              <div class="content">
                <span class="step-number">03</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-camera-video"></i>
                  </div>
                  <div class="step-content">
                    <h3>{{ __('website.Interactive Sessions') }}</h3>
                    <p>{{ __('website.Engage in one-on-one or small group classes with native French-speaking teachers who provide instruction, feedback, and cultural context to enhance your understanding.') }}</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

            <div class="process-item" data-aos="fade-up" data-aos-delay="500">
              <div class="content">
                <span class="step-number">04</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-graph-up-arrow"></i>
                  </div>
                  <div class="step-content">
                    <h3>{{ __('website.Progress & Certification') }}</h3>
                    <p>{{ __('website.Track your improvement through regular assessments and milestone achievements, culminating in recognized certificates that validate your Quranic knowledge and Islamic studies.') }}</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

          </div>
        </div>

      </div>

    </section><!-- /How We Work Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{ __('website.Our Courses') }}</h2>
        <p>{{ __('website.Comprehensive Islamic education tailored for French-speaking students from beginners to advanced levels') }}</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center g-5">

          <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-book-half"></i>
              </div>
              <div class="service-content">
                <h3>{{ __('website.Quran Reading & Tajweed') }}</h3>
                <p>{{ __('website.Learn to read the Quran with proper pronunciation and recitation rules. Our native French-speaking instructors will guide you through the fundamentals of Arabic letters, sounds, and tajweed rules for beautiful recitation.') }}</p>
                <a href="#" class="service-link">
                  <span>{{ __('website.Learn More') }}</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-journal-richtext"></i>
              </div>
              <div class="service-content">
                <h3>{{ __('website.Quran Memorization') }}</h3>
                <p>{{ __('website.Develop your ability to memorize the Quran with our structured program that uses proven memorization techniques. Our experienced teachers provide personalized guidance and regular revision sessions to ensure strong retention.') }}</p>
                <a href="#" class="service-link">
                  <span>{{ __('website.Learn More') }}</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-translate"></i>
              </div>
              <div class="service-content">
                <h3>{{ __('website.Quranic Arabic & Tafseer') }}</h3>
                <p>{{ __('website.Understand the meaning behind the verses with our Quranic Arabic and Tafseer courses. Learn Arabic vocabulary, grammar, and syntax through the Quran, with explanations in French to deepen your comprehension of Allah\'s words.') }}</p>
                <a href="#" class="service-link">
                  <span>{{ __('website.Learn More') }}</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-moon-stars"></i>
              </div>
              <div class="service-content">
                <h3>{{ __('website.Islamic Studies') }}</h3>
                <p>{{ __('website.Explore the fundamentals of Islam including Aqeedah (beliefs), Fiqh (jurisprudence), and Seerah (biography of Prophet Muhammad ﷺ). Our curriculum provides a solid foundation in Islamic knowledge delivered in French.') }}</p>
                <a href="#" class="service-link">
                  <span>{{ __('website.Learn More') }}</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-right" data-aos-delay="300">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-people"></i>
              </div>
              <div class="service-content">
                <h3>{{ __('website.Children\'s Quran Program') }}</h3>
                <p>{{ __('website.Specially designed courses for children aged 5-12, making learning fun and engaging through interactive activities, visual aids, and age-appropriate teaching methods. Help your children build a strong Islamic foundation from a young age.') }}</p>
                <a href="#" class="service-link">
                  <span>{{ __('website.Learn More') }}</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-award"></i>
              </div>
              <div class="service-content">
                <h3>{{ __('website.Ijazah Certification') }}</h3>
                <p>{{ __('website.Advanced program for those seeking formal authorization (Ijazah) in Quran recitation. Study under certified scholars and join the unbroken chain of narration tracing back to the Prophet Muhammad ﷺ through our rigorous certification program.') }}</p>
                <a href="#" class="service-link">
                  <span>{{ __('website.Learn More') }}</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

  

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>{{ __('website.Pricing Plans') }}</h2>
        <p>{{ __('website.Choose the perfect package for your Quran learning journey') }}</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-3 justify-content-center">
          <!-- 4 Courses Package -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-card">
              <h3>{{ __('website.Starter') }}</h3>
              <div class="price">
                <span class="currency">€</span>
                <span class="amount">32</span>
                <span class="period">/ 4 courses</span>
              </div>
              <ul class="features-list">
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.4 One-hour Classes') }}</li>
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.1 Free Trial Session') }}</li>
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.Basic Learning Materials') }}</li>
              </ul>
              <a href="#contact" class="btn btn-primary">{{ __('website.Get Started') }}</a>
            </div>
          </div>

          <!-- 8 Courses Package -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-card popular">
              <div class="popular-badge">{{ __('website.Most Popular') }}</div>
              <h3>{{ __('website.Basic') }}</h3>
              <div class="price">
                <span class="currency">€</span>
                <span class="amount">60</span>
                <span class="period">/ 8 courses</span>
              </div>
              <ul class="features-list">
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.8 One-hour Classes') }}</li>
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.1 Free Trial Session') }}</li>
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.Study Materials') }}</li>
              </ul>
              <a href="#contact" class="btn btn-light">{{ __('website.Get Started') }}</a>
            </div>
          </div>

          <!-- 12 Courses Package -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-card">
              <h3>{{ __('website.Standard') }}</h3>
              <div class="price">
                <span class="currency">€</span>
                <span class="amount">90</span>
                <span class="period">/ 12 courses</span>
              </div>
              <ul class="features-list">
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.12 One-hour Classes') }}</li>
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.1 Free Trial Session') }}</li>
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.Premium Materials') }}</li>
              </ul>
              <a href="#contact" class="btn btn-primary">{{ __('website.Get Started') }}</a>
            </div>
          </div>

          <!-- 16 Courses Package -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="pricing-card">
              <h3>{{ __('website.Advanced') }}</h3>
              <div class="price">
                <span class="currency">€</span>
                <span class="amount">120</span>
                <span class="period">/ 16 courses</span>
              </div>
              <ul class="features-list">
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.16 One-hour Classes') }}</li>
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.1 Free Trial Session') }}</li>
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.Priority Scheduling') }}</li>
              </ul>
              <a href="#contact" class="btn btn-primary">{{ __('website.Get Started') }}</a>
            </div>
          </div>

          <!-- 24 Courses Package -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="pricing-card">
              <h3>{{ __('website.Professional') }}</h3>
              <div class="price">
                <span class="currency">€</span>
                <span class="amount">180</span>
                <span class="period">/ 24 courses</span>
              </div>
              <ul class="features-list">
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.24 One-hour Classes') }}</li>
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.1 Free Trial Session') }}</li>
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.Monthly Assessment') }}</li>
              </ul>
              <a href="#contact" class="btn btn-primary">{{ __('website.Get Started') }}</a>
            </div>
          </div>

          <!-- 48 Courses Package -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="pricing-card">
              <h3>{{ __('website.Master') }}</h3>
              <div class="price">
                <span class="currency">€</span>
                <span class="amount">360</span>
                <span class="period">/ 48 courses</span>
              </div>
              <ul class="features-list">
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.48 One-hour Classes') }}</li>
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.1 Free Trial Session') }}</li>
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.Certificate Included') }}</li>
              </ul>
              <a href="#contact" class="btn btn-primary">{{ __('website.Get Started') }}</a>
            </div>
          </div>

          <!-- 100 Courses Package -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="pricing-card">
              <h3>{{ __('website.Elite') }}</h3>
              <div class="price">
                <span class="currency">€</span>
                <span class="amount">750</span>
                <span class="period">/ 100 courses</span>
              </div>
              <ul class="features-list">
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.100 One-hour Classes') }}</li>
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.1 Free Trial Session') }}</li>
                <li><i class="bi bi-check-circle-fill"></i>{{ __('website.Lifetime Resources') }}</li>
              </ul>
              <a href="#contact" class="btn btn-primary">{{ __('website.Get Started') }}</a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Pricing Section -->
    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{ __('website.Our Teachers') }}</h2>
        <p>{{ __('website.Meet our qualified and experienced Quran teachers who are dedicated to helping you learn') }}</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">
          @foreach($teachers as $teacher)
          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="{{ $loop->iteration * 100 }}">
            <div class="team-card">
              <div class="team-image">
                <img src="{{ asset('storage/' . $teacher->photo) }}" class="img-fluid" alt="{{ $teacher->name }}">
                <div class="team-overlay">
                  <p>{!! Str::limit($teacher->short_description, 150) !!}</p>
                  <a href="{{ route('website.teachers.show', $teacher->id) }}" class="btn btn-light">{{ __('website.View Profile') }}</a>
                </div>
              </div>
              <div class="team-content">
                <h4>{{ $teacher->name }}</h4>
                <span class="position">{{ $teacher->specialization }}</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
      <div class="container section-title" data-aos="fade-up">
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

    <!-- Articles Section -->
    <section id="articles" class="articles section light-background">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{ __('website.Latest Articles') }}</h2>
        <p>{{ __('website.Explore our collection of Islamic articles and educational content') }}</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4">
          @foreach($articles as $article)
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
            <div class="article-card h-100">
              <div class="article-image position-relative">
                <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid rounded-top" alt="{{ $article->getTranslation('title', app()->getLocale()) }}">
                <div class="article-overlay">
                  <a href="{{ route('website.articles.show', $article->id) }}" class="btn btn-light btn-sm">{{ __('website.Read More') }}</a>
                </div>
              </div>
              <div class="article-content p-4">
                <div class="article-meta d-flex gap-3 mb-3 text-muted small">
                  <span><i class="bi bi-calendar"></i> {{ $article->created_at->format('M d, Y') }}</span>
                  @if($article->author)
                  <span><i class="bi bi-person"></i> {{ $article->author->name }}</span>
                  @endif
                </div>
                <h3 class="article-title h4 mb-3">
                  <a href="{{ route('website.articles.show', $article->id) }}" class="text-decoration-none text-dark">
                    {!! $article->getTranslation('title', app()->getLocale()) !!}
                  </a>
                </h3>
                <p class="article-excerpt text-muted mb-4">{!! Str::limit($article->getTranslation('content', app()->getLocale()), 150) !!}</p>
                <a href="{{ route('website.articles.show', $article->id) }}" class="read-more d-inline-flex align-items-center text-primary text-decoration-none">
                  {{ __('website.Read More') }} <i class="bi bi-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
          </div>
          @endforeach
        </div>

        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="200">
          <a href="{{ route('website.articles.index') }}" class="btn btn-primary btn-lg px-5">{{ __('website.View All Articles') }}</a>
        </div>
      </div>
    </section><!-- /Articles Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
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
              <p>WhatsApp: +201507788982<br>
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
              <a href="{{ route('enroll.show') }}" class="btn btn-primary btn-lg px-5 py-3">{{ __('website.Enroll Now') }}</a>
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

</body>

</html></html>
