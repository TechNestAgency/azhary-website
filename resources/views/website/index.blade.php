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
  <div class="top-bar d-flex align-items-center justify-content-between px-4" style="background-color:rgb(2, 37, 108);opacity: 0.88; color: #fff; height: 48px; position: fixed; top: 0; left: 0; width: 100%; z-index: 1040;">
    <div class="d-flex align-items-center gap-4">
      <span class="d-flex align-items-center"><i class="bi bi-telephone-fill me-2"></i> Whatsapp : +201507788982</span>
      <span class="mx-2" style="border-left: 1px solid #fff; height: 20px;"></span>
      <span class="d-flex align-items-center"><i class="bi bi-envelope-fill me-2"></i> Madrassatazhary4@gmail.com</span>
    </div>
    <div class="d-flex align-items-center gap-4">
      <a href="#" style="color: #fff; text-decoration: none;">Our Social</a>
      <a href="#" style="color: #ffd600;"><i class="bi bi-facebook"></i></a>
      <a href="#" style="color: #ffd600;"><i class="bi bi-twitter"></i></a>
      <a href="#" style="color: #ffd600;"><i class="bi bi-pinterest"></i></a>
      <a href="#" style="color: #ffd600;"><i class="bi bi-youtube"></i></a>
      <a href="#" style="color: #ffd600;"><i class="bi bi-instagram"></i></a>
      <a href="#" style="color: #ffd600;"><i class="bi bi-linkedin"></i></a>
    </div>
  </div>

  <!-- Make header background match top bar and remove body padding -->


  <header id="header" class="header d-flex align-items-center fixed-top" style="background: white !important; border: none !important; top: 48px;">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="{{asset('website_assets/img/logo-no.png')}}" alt="">
      </a>
      <!-- Category Dropdown beside logo -->
      <div class="d-flex align-items-center ms-3">
        <div class="dropdown">
          <button class="btn btn-white border-0 d-flex align-items-center gap-2" type="button" id="categoryDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 1.35rem; font-weight: 500; color: #13223F;">
            <i class="bi bi-grid-3x3-gap-fill" style="font-size: 1.5rem; color:rgb(49, 65, 99);"></i>
            <span style="color:rgb(49, 65, 99);">Category</span>
          </button>
          <ul class="dropdown-menu shadow border-0" aria-labelledby="categoryDropdown" style="min-width: 270px; border-radius: 18px; background: rgba(245, 247, 255, 0.98); box-shadow: 0 8px 32px 0 rgba(49,65,99,0.18); padding: 0.5rem 0;">
            <li><a class="dropdown-item d-flex align-items-center gap-2 py-3 px-4" href="{{ route('website.courses.quran-reading') }}" style="transition: background 0.2s, color 0.2s;"><i class="bi bi-book-half text-primary"></i> <span>{{ __('website.Quran Reading & Tajweed') }}</span></a></li>
            <li><a class="dropdown-item d-flex align-items-center gap-2 py-3 px-4" href="{{ route('website.courses.quran-memorization') }}" style="transition: background 0.2s, color 0.2s;"><i class="bi bi-journal-richtext text-success"></i> <span>{{ __('website.Quran Memorization') }}</span></a></li>
            <li><a class="dropdown-item d-flex align-items-center gap-2 py-3 px-4" href="{{ route('website.courses.quranic-arabic') }}" style="transition: background 0.2s, color 0.2s;"><i class="bi bi-translate text-info"></i> <span>{{ __('website.Quranic Arabic & Tafseer') }}</span></a></li>
            <li><a class="dropdown-item d-flex align-items-center gap-2 py-3 px-4" href="{{ route('website.courses.islamic-studies') }}" style="transition: background 0.2s, color 0.2s;"><i class="bi bi-moon-stars text-warning"></i> <span>{{ __('website.Islamic Studies') }}</span></a></li>
            <li><a class="dropdown-item d-flex align-items-center gap-2 py-3 px-4" href="{{ route('website.courses.children-quran') }}" style="transition: background 0.2s, color 0.2s;"><i class="bi bi-people text-danger"></i> <span>{{ __('website.Children\'s Quran Program') }}</span></a></li>
            <li><a class="dropdown-item d-flex align-items-center gap-2 py-3 px-4" href="{{ route('website.courses.ijazah') }}" style="transition: background 0.2s, color 0.2s;"><i class="bi bi-award text-secondary"></i> <span>{{ __('website.Ijazah Certification') }}</span></a></li>
          </ul>
          <style>
            #categoryDropdown + .dropdown-menu .dropdown-item:hover, #categoryDropdown + .dropdown-menu .dropdown-item:focus {
              background: linear-gradient(90deg, #e3eaff 0%, #f7faff 100%);
              color: #0d7adb;
              font-weight: 500;
              border-radius: 12px;
            }
            #categoryDropdown + .dropdown-menu .dropdown-item i {
              transition: color 0.2s;
            }
            #categoryDropdown + .dropdown-menu .dropdown-item:hover i {
              color: #0d7adb !important;
            }
          </style>
        </div>
      </div>
      <div class="d-flex align-items-center ms-auto gap-3">
        <nav id="navmenu" class="navmenu">
          <ul class="navbar-nav flex-row gap-3 align-items-center mb-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="learningStylesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Learning Styles
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
                Organizations
              </a>
              <ul class="dropdown-menu" aria-labelledby="organizationsDropdown">
                <li><a class="dropdown-item" href="#team">{{ __('website.Team') }}</a></li>
                <li><a class="dropdown-item" href="{{ route('website.articles.index') }}">{{ __('website.Articles') }}</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                More
              </a>
              <ul class="dropdown-menu" aria-labelledby="moreDropdown">
                <li><a class="dropdown-item" href="{{ route('pricing') }}">{{ __('website.Pricing') }}</a></li>
                <li><a class="dropdown-item" href="#contact">{{ __('website.Contact') }}</a></li>
              </ul>
            </li>
            <li class="dropdown language-switcher nav-item">
              <div style="display: flex; align-items: center; gap: 0.5rem; font-weight: bold; font-size: 1.1rem; letter-spacing: 1px;">
                <a href="{{ route('language.switch', 'en') }}" style="text-decoration: none; color: {{ app()->getLocale() == 'en' ? '#0a2260' : '#0a2260b0' }}; font-weight: {{ app()->getLocale() == 'en' ? 'bold' : 'normal' }};">EN</a>
                <span style="color: #0a2260; font-weight: bold;">|</span>
                <a href="{{ route('language.switch', 'fr') }}" style="text-decoration: none; color: {{ app()->getLocale() == 'fr' ? '#0a2260' : '#0a2260b0' }}; font-weight: {{ app()->getLocale() == 'fr' ? 'bold' : 'normal' }};">FR</a>
              </div>
            </li>
          </ul>
        </nav>
        <a class="btn btn-primary" href="{{ route('enroll.show') }}" style="background-color:rgb(2, 37, 108); opacity: 0.88;padding: 0.75rem 2rem; font-size: 1.1rem;">Enroll Now</a>
      </div>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section p-0" style="background: url('{{ asset('hero-back.jpg') }}') no-repeat center center; background-size: cover; position: relative; direction: ltr; margin-top: 64px;">
      <!-- Transparent Overlay -->
      <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color:rgb(2, 37, 108); opacity: 0.88;"></div>
      
      <!-- Carousel Content (Third Layer) -->
      <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" style="position: relative; z-index: 2;">
        <div class="carousel-inner pt-5">

          <!-- Slide 1: Welcome (default/active) -->
          <div class="carousel-item active">
            <div class="container">
              <div class="row align-items-center" style="min-height: 560px;">
                <!-- Image (left) -->
                <div class="col-lg-6 text-center">
                  <img src="{{ asset('presenting.png') }}" alt="Welcome Man" class="img-fluid" style="max-height: 400px;">
                </div>
                <!-- Welcome Title (right) -->
                <div class="col-lg-6 text-white text-center">
                  <h3 class="display-5 fw-bold" style="color: white; letter-spacing: 2px; margin-bottom: 1.5rem;">Welcome to Azhary Academy</h1>
                  <a href="{{ route('enroll.show') }}" class="btn btn-outline-info btn-lg" style="color: #36b6e7; border-color: #36b6e7;">Enroll Now</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2: SACT Certificate -->
          <div class="carousel-item">
            <div class="container">
              <div class="row align-items-center" style="min-height: 560px;">
                <!-- Image (left) -->
                <div class="col-lg-6 text-center">
                  <img src="{{ asset('presenting.png') }}" alt="SACT Certificate" class="img-fluid" style="max-height: 400px;">
                </div>
                <!-- SACT Description (right) -->
                <div class="col-lg-6 text-white">
                  <h1 class="mb-4" style="color: #36b6e7; font-weight: bold;">SACT Certificate</h1>
                  <p class="mb-4" style="font-size: 1.2rem;">
                    Now is your chance to assess your level as a Quran and Arabic language teacher for non-native speakers and evaluate yourself to grow further. Take the test offered by Studio Arabiya Institute to earn the <b>SACT</b> certificate, which documents your scientific and practical skills to stand out in the job market.
                  </p>
                  <a href="#" class="btn btn-outline-info btn-lg" style="color: #36b6e7; border-color: #36b6e7;">Register Now & Seize the Opportunity</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3: Online Learning Experience -->
          <div class="carousel-item">
            <div class="container">
              <div class="row align-items-center" style="min-height: 560px;">
                <!-- Image (left) -->
                <div class="col-lg-6 text-center">
                  <img src="{{ asset('presenting.png') }}" alt="Online Learning" class="img-fluid" style="max-height: 400px;">
                </div>
                <!-- Online Learning Content (right) -->
                <div class="col-lg-6 text-white">
                  <h1 class="mb-4" style="color: #36b6e7; font-weight: bold;">Interactive Online Learning</h1>
                  <p class="mb-4" style="font-size: 1.2rem;">
                    Experience our state-of-the-art virtual classroom designed specifically for Quranic education. Learn from qualified teachers through interactive sessions, real-time feedback, and personalized attention, all from the comfort of your home.
                  </p>
                  <a href="{{ route('enroll.show') }}" class="btn btn-outline-info btn-lg" style="color: #36b6e7; border-color: #36b6e7;">Start Learning Today</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 4: French-Speaking Community -->
          <div class="carousel-item">
            <div class="container">
              <div class="row align-items-center" style="min-height: 560px;">
                <!-- Image (left) -->
                <div class="col-lg-6 text-center">
                  <img src="{{ asset('presenting.png') }}" alt="French Community" class="img-fluid" style="max-height: 400px;">
                </div>
                <!-- French Community Content (right) -->
                <div class="col-lg-6 text-white">
                  <h1 class="mb-4" style="color: #36b6e7; font-weight: bold;">Join Our French-Speaking Community</h1>
                  <p class="mb-4" style="font-size: 1.2rem;">
                    Connect with fellow French-speaking Muslims worldwide in our supportive learning environment. Our native French-speaking teachers ensure you understand every aspect of your Islamic education in your preferred language.
                  </p>
                  <a href="{{ route('enroll.show') }}" class="btn btn-outline-info btn-lg" style="color: #36b6e7; border-color: #36b6e7;">Join Our Community</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 5: Children's Arabic Program -->
          <div class="carousel-item">
            <div class="container">
              <div class="row align-items-center" style="min-height: 560px;">
                <!-- Image (left) -->
                <div class="col-lg-6 text-center">
                  <img src="{{ asset('presenting.png') }}" alt="Children's Arabic Learning" class="img-fluid" style="max-height: 400px;">
                </div>
                <!-- Children's Program Content (right) -->
                <div class="col-lg-6 text-white">
                  <h1 class="mb-4" style="color: #36b6e7; font-weight: bold;">Arabic Learning for Children</h1>
                  <p class="mb-4" style="font-size: 1.2rem;">
                    Our specialized Arabic program for children combines fun, interactive learning with effective teaching methods. Using games, stories, and cultural activities, we help children master Arabic alphabet, numbers, colors, and basic conversation skills while developing a deep appreciation for Arabic culture.
                  </p>
                  <div class="d-flex gap-3 mb-4">
                    <span class="badge bg-light text-primary">Interactive Learning</span>
                    <span class="badge bg-light text-primary">Qualified Teachers</span>
                    <span class="badge bg-light text-primary">Flexible Schedule</span>
                  </div>
                  <a href="{{ route('enroll.show') }}" class="btn btn-outline-info btn-lg" style="color: #36b6e7; border-color: #36b6e7;">Start Your Child's Journey</a>
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
