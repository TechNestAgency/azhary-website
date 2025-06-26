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

  <!-- Top Bar -->
  <div class="top-bar px-3 py-2 d-none d-md-block" style="background-color:rgb(2, 37, 108);opacity: 0.88; color: #fff; top: 0; left: 0; width: 100%; z-index: 1040;">
    <div class="container-fluid">
      <div class="row align-items-center flex-column flex-md-row text-center text-md-start">
        <div class="col-12 col-md-auto d-flex align-items-center justify-content-center justify-content-md-start gap-3 flex-wrap mb-2 mb-md-0">
          <span class="d-flex align-items-center"><i class="bi bi-telephone-fill me-2"></i> {{ __('website.Whatsapp') }} : +201507788982</span>
          <span class="mx-2 d-none d-md-block" style="border-left: 1px solid #fff; height: 20px;"></span>
          <span class="d-flex align-items-center"><i class="bi bi-envelope-fill me-2"></i> Madrassatazhary4@gmail.com</span>
        </div>
        <div class="col-12 col-md d-flex align-items-center justify-content-center justify-content-md-end gap-3 flex-wrap">
          <a href="#" style="color: #fff; text-decoration: none;">{{ __('website.Our Social') }}</a>
          <a href="#" style="color: #ffd600;"><i class="bi bi-facebook"></i></a>
          <a href="#" style="color: #ffd600;"><i class="bi bi-twitter"></i></a>
          <a href="#" style="color: #ffd600;"><i class="bi bi-pinterest"></i></a>
          <a href="#" style="color: #ffd600;"><i class="bi bi-youtube"></i></a>
          <a href="#" style="color: #ffd600;"><i class="bi bi-instagram"></i></a>
          <a href="#" style="color: #ffd600;"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Responsive Header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white" style="z-index: 1030; border: none !important;">
    <div class="container">
      <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center me-auto me-xl-0">
        <img src="{{asset('website_assets/img/logo-no.png')}}" alt="" style="max-height: 60px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-grid-3x3-gap-fill me-1"></i> {{ __('website.Category') }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
              <li><a class="dropdown-item" href="{{ route('website.courses.quran-reading') }}">{{ __('website.Quran Reading & Tajweed') }}</a></li>
              <li><a class="dropdown-item" href="{{ route('website.courses.quran-memorization') }}">{{ __('website.Quran Memorization') }}</a></li>
              <li><a class="dropdown-item" href="{{ route('website.courses.quranic-arabic') }}">{{ __('website.Quranic Arabic & Tafseer') }}</a></li>
              <li><a class="dropdown-item" href="{{ route('website.courses.islamic-studies') }}">{{ __('website.Islamic Studies') }}</a></li>
              <li><a class="dropdown-item" href="{{ route('website.courses.children-quran') }}">{{ __('website.Children\'s Quran Program') }}</a></li>
              <li><a class="dropdown-item" href="{{ route('website.courses.ijazah') }}">{{ __('website.Ijazah Certification') }}</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="learningStylesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ __('website.Learning Styles') }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="learningStylesDropdown">
              <li><a class="dropdown-item" href="#hero">{{ __('website.Home') }}</a></li>
              <li><a class="dropdown-item" href="#about">{{ __('website.About') }}</a></li>
              <li><a class="dropdown-item" href="#services">{{ __('website.Services') }}</a></li>
              <li><a class="dropdown-item" href="#portfolio">{{ __('website.Portfolio') }}</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="organizationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ __('website.Organizations') }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="organizationsDropdown">
              <li><a class="dropdown-item" href="#team">{{ __('website.Team') }}</a></li>
              <li><a class="dropdown-item" href="{{ route('website.articles.index') }}">{{ __('website.Articles') }}</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ __('website.More') }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="moreDropdown">
              <li><a class="dropdown-item" href="{{ route('pricing') }}">{{ __('website.Pricing') }}</a></li>
              <li><a class="dropdown-item" href="#contact">{{ __('website.Contact') }}</a></li>
            </ul>
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

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section p-0" style="background: url('{{ asset('hero-back.jpg') }}') no-repeat center center; background-size: cover; position: relative; direction: ltr;">
      <!-- Transparent Overlay -->
      <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color:rgb(2, 37, 108); opacity: 0.88;"></div>
      <!-- Carousel Content (Third Layer) -->
      <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" style="position: relative; z-index: 2;">
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
                  <a href="{{ route('enroll.show') }}" class="btn btn-outline-info btn-lg" style="color: #36b6e7; border-color: #36b6e7;">{{ __('website.Enroll Now') }}</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 2: SACT Certificate -->
          <div class="carousel-item">
            <div class="container">
              <div class="row align-items-center flex-column flex-lg-row" style="min-height: 560px;">
                <!-- Image (left) -->
                <div class="col-12 col-lg-6 text-center mb-4 mb-lg-0">
                  <img src="{{ asset('man.png') }}" alt="SACT Certificate" class="img-fluid" style="max-height: 400px;">
                </div>
                <!-- SACT Description (right) -->
                <div class="col-12 col-lg-6 text-white text-center text-lg-start">
                  <h1 class="mb-4" style="color: #36b6e7; font-weight: bold;">{{ __('website.SACT Certificate') }}</h1>
                  <p class="mb-4" style="font-size: 1.2rem;">
                    {{ __('website.Now is your chance to assess your level as a Quran and Arabic language teacher for non-native speakers and evaluate yourself to grow further. Take the test offered by Studio Arabiya Institute to earn the SACT certificate, which documents your scientific and practical skills to stand out in the job market.') }}
                  </p>
                  <a href="#" class="btn btn-outline-info btn-lg" style="color: #36b6e7; border-color: #36b6e7;">{{ __('website.Register Now & Seize the Opportunity') }}</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 3: Online Learning Experience -->
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
                  <a href="{{ route('enroll.show') }}" class="btn btn-outline-info btn-lg" style="color: #36b6e7; border-color: #36b6e7;">{{ __('website.Start Learning Today') }}</a>
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
                  <a href="{{ route('enroll.show') }}" class="btn btn-outline-info btn-lg" style="color: #36b6e7; border-color: #36b6e7;">{{ __('website.Join Our Community') }}</a>
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
                  <a href="{{ route('enroll.show') }}" class="btn btn-outline-info btn-lg" style="color: #36b6e7; border-color: #36b6e7;">{{ __('website.Start Your Child\'s Journey') }}</a>
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
    <section id="why-choose" class="why-choose section light-background py-5">
      <div class="container">
        <div class="text-center mb-5">
          <h2>
            ✨ {{ __('website.why_choose_title') }}
          </h2>
          <p class="lead">{{ __('website.why_choose_subtitle') }}</p>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-md-4">
            <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white">
              <div class="mb-3" style="font-size:2rem;">👩‍🏫</div>
              <h4 class="mb-2 text-success">{{ __('website.individual_courses_title') }}</h4>
              <p>{{ __('website.individual_courses_desc') }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white">
              <div class="mb-3" style="font-size:2rem;">🕒</div>
              <h4 class="mb-2 text-primary">{{ __('website.flexible_hours_title') }}</h4>
              <p>{{ __('website.flexible_hours_desc') }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white">
              <div class="mb-3" style="font-size:2rem;">📊</div>
              <h4 class="mb-2 text-purple">{{ __('website.monthly_reports_title') }}</h4>
              <p>{{ __('website.monthly_reports_desc') }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white">
              <div class="mb-3" style="font-size:2rem;">🎮</div>
              <h4 class="mb-2 text-warning">{{ __('website.games_activities_title') }}</h4>
              <p>{{ __('website.games_activities_desc') }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white">
              <div class="mb-3" style="font-size:2rem;">🎧</div>
              <h4 class="mb-2 text-danger">{{ __('website.recorded_lessons_title') }}</h4>
              <p>{{ __('website.recorded_lessons_desc') }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white">
              <div class="mb-3" style="font-size:2rem;">🎓</div>
              <h4 class="mb-2 text-success">{{ __('website.certified_teachers_title') }}</h4>
              <p>{{ __('website.certified_teachers_desc') }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white">
              <div class="mb-3" style="font-size:2rem;">📜</div>
              <h4 class="mb-2 text-orange">{{ __('website.certificates_title') }}</h4>
              <p>{{ __('website.certificates_desc') }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white">
              <div class="mb-3" style="font-size:2rem;">🌍</div>
              <h4 class="mb-2 text-info">{{ __('website.international_title') }}</h4>
              <p>{{ __('website.international_desc') }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Why Choose Section -->

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
                <a href="{{ route('website.courses.quran-reading') }}" class="service-link">
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
                <a href="{{ route('website.courses.quran-memorization') }}" class="service-link">
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
                <a href="{{ route('website.courses.quranic-arabic') }}" class="service-link">
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
                <a href="{{ route('website.courses.islamic-studies') }}" class="service-link">
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
                <a href="{{ route('website.courses.children-quran') }}" class="service-link">
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
                <img src="{{ asset($teacher->photo) }}" class="img-fluid" alt="{{ $teacher->name }}">
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

    <!-- Video Testimonials Section -->
    <section id="video-testimonials" class="video-testimonials section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>{{ __('website.Video Testimonials') }}</h2>
        <p>{{ __('website.Watch our students share their learning experience and success stories') }}</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4 justify-content-center">
          <!-- Video 1 -->
          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="video-testimonial-card h-100 bg-white rounded-4 shadow-lg overflow-hidden">
              <div class="video-container position-relative">
                <video class="w-100" controls>
                  <source src="{{ asset('video1.mp4') }}" type="video/mp4">
                  {{ __('website.Your browser does not support the video tag.') }}
                </video>
              </div>
          
            </div>
          </div>

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

          <!-- Video 3 -->
          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="video-testimonial-card h-100 bg-white rounded-4 shadow-lg overflow-hidden">
              <div class="video-container position-relative">
                <video class="w-100" controls>
                  <source src="{{ asset('video3.mp4') }}" type="video/mp4">
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
            <a href="{{ route('enroll.show') }}" class="btn btn-light btn-lg px-5">{{ __('website.Start Learning Now') }}</a>
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
                <img src="{{ asset($article->image) }}" class="img-fluid rounded-top" alt="{{ $article->getTranslation('title', app()->getLocale()) }}">
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
