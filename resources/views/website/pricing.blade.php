<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Azhary Academy - Pricing</title>
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

  <!-- Pricing Page Specific Styles -->
  <style>
    :root {
      --heading-color: #13223F;
      --accent-color: #0d7adb;
    }

    .category-section {
      margin-bottom: 60px;
    }

    .category-title {
      text-align: center;
      margin-bottom: 30px;
      color: var(--heading-color);
      font-size: 28px;
      font-weight: 700;
    }

    .pricing-item {
      padding: 25px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      position: relative;
      overflow: hidden;
      background: #fff;
      transition: 0.3s;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .pricing-item:hover {
      transform: translateY(-5px);
    }

    .pricing-item.featured {
      border: 2px solid var(--accent-color);
    }

    .popular-badge {
      position: absolute;
      top: 15px;
      right: -35px;
      background: var(--accent-color);
      color: #fff;
      padding: 4px 35px;
      transform: rotate(45deg);
      font-size: 12px;
      font-weight: 600;
    }

    .pricing-item h3 {
      font-size: 20px;
      font-weight: 700;
      margin-bottom: 15px;
      color: var(--heading-color);
    }

    .price {
      font-size: 28px;
      font-weight: 700;
      color: var(--accent-color);
      margin-bottom: 15px;
    }

    .price sup {
      font-size: 16px;
      top: -10px;
    }

    .price span {
      font-size: 14px;
      font-weight: 400;
      color: #6c757d;
    }

    .pricing-item ul {
      padding: 0;
      list-style: none;
      margin-bottom: 20px;
      flex-grow: 1;
    }

    .pricing-item ul li {
      padding: 8px 0;
      display: flex;
      align-items: center;
      font-size: 14px;
    }

    .pricing-item ul li i {
      margin-right: 8px;
      font-size: 16px;
    }

    .pricing-item ul li i.bi-check-circle-fill {
      color: #28a745;
    }

    .pricing-item ul li i.bi-x-circle {
      color: #dc3545;
    }

    .pricing-item ul li.na {
      color: #6c757d;
    }

    .savings-box {
      background: #f8f9fa;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 15px;
      text-align: center;
    }

    .savings-box p {
      margin: 0;
      color: #6c757d;
      font-size: 13px;
    }

    .savings-amount {
      font-weight: 600;
      color: #28a745 !important;
    }

    .benefit-item {
      text-align: center;
      padding: 25px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
    }

    .benefit-item i {
      font-size: 32px;
      color: var(--accent-color);
      margin-bottom: 15px;
    }

    .benefit-item h4 {
      font-size: 18px;
      font-weight: 600;
      margin-bottom: 10px;
    }

    .faq-item {
      background: #fff;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
    }

    .faq-item h4 {
      font-size: 16px;
      font-weight: 600;
      margin-bottom: 10px;
      color: var(--heading-color);
    }

    .cta-box {
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .special-badge {
      position: absolute;
      top: 15px;
      right: -35px;
      background: #ff6b6b;
      color: #fff;
      padding: 4px 35px;
      transform: rotate(45deg);
      font-size: 12px;
      font-weight: 600;
    }

    /* Additional styles for better spacing and alignment */
    .page-title {
      padding: 60px 0;
      background: #f8f9fa;
      margin-bottom: 40px;
    }

    .page-title h1 {
      font-size: 32px;
      font-weight: 700;
      color: var(--heading-color);
      margin-bottom: 10px;
    }

    .breadcrumbs {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .breadcrumbs li {
      display: inline;
      font-size: 14px;
      color: #6c757d;
    }

    .breadcrumbs li + li:before {
      content: "/";
      padding: 0 8px;
    }

    .breadcrumbs li a {
      color: var(--accent-color);
      text-decoration: none;
    }

    .breadcrumbs li.current {
      color: #6c757d;
    }

    .section-title {
      text-align: center;
      margin-bottom: 40px;
    }

    .section-title h2 {
      font-size: 28px;
      font-weight: 700;
      color: var(--heading-color);
      margin-bottom: 10px;
    }

    .section-title p {
      color: #6c757d;
      font-size: 16px;
    }
  </style>
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
            <li><a class="dropdown-item d-flex align-items-center gap-2 py-3 px-4" href="#services" style="transition: background 0.2s, color 0.2s;"><i class="bi bi-book-half text-primary"></i> <span>{{ __('website.Quran Reading & Tajweed') }}</span></a></li>
            <li><a class="dropdown-item d-flex align-items-center gap-2 py-3 px-4" href="#services" style="transition: background 0.2s, color 0.2s;"><i class="bi bi-journal-richtext text-success"></i> <span>{{ __('website.Quran Memorization') }}</span></a></li>
            <li><a class="dropdown-item d-flex align-items-center gap-2 py-3 px-4" href="#services" style="transition: background 0.2s, color 0.2s;"><i class="bi bi-translate text-info"></i> <span>{{ __('website.Quranic Arabic & Tafseer') }}</span></a></li>
            <li><a class="dropdown-item d-flex align-items-center gap-2 py-3 px-4" href="#services" style="transition: background 0.2s, color 0.2s;"><i class="bi bi-moon-stars text-warning"></i> <span>{{ __('website.Islamic Studies') }}</span></a></li>
            <li><a class="dropdown-item d-flex align-items-center gap-2 py-3 px-4" href="#services" style="transition: background 0.2s, color 0.2s;"><i class="bi bi-people text-danger"></i> <span>{{ __('website.Children\'s Quran Program') }}</span></a></li>
            <li><a class="dropdown-item d-flex align-items-center gap-2 py-3 px-4" href="#services" style="transition: background 0.2s, color 0.2s;"><i class="bi bi-award text-secondary"></i> <span>{{ __('website.Ijazah Certification') }}</span></a></li>
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
                <li><a class="dropdown-item" href="{{ route('home') }}#hero">{{ __('website.Home') }}</a></li>
                <li><a class="dropdown-item" href="{{ route('home') }}#about">{{ __('website.About') }}</a></li>
                <li><a class="dropdown-item" href="{{ route('home') }}#services">{{ __('website.Services') }}</a></li>
                <li><a class="dropdown-item" href="{{ route('home') }}#portfolio">{{ __('website.Portfolio') }}</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="organizationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Organizations
              </a>
              <ul class="dropdown-menu" aria-labelledby="organizationsDropdown">
                <li><a class="dropdown-item" href="{{ route('home') }}#team">{{ __('website.Team') }}</a></li>
                <li><a class="dropdown-item" href="{{ route('website.articles.index') }}">{{ __('website.Articles') }}</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                More
              </a>
              <ul class="dropdown-menu" aria-labelledby="moreDropdown">
                <li><a class="dropdown-item" href="{{ route('pricing') }}">{{ __('website.Pricing') }}</a></li>
                <li><a class="dropdown-item" href="{{ route('home') }}#contact">{{ __('website.Contact') }}</a></li>
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

  <main id="main" style="margin-top: 64px;">
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container">       
      </div>
    </div>

    <!-- Pricing Section -->
    <section class="pricing section">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Choose Your Learning Path</h2>
          <p>Select the perfect plan that matches your goals and budget</p>
        </div>

        <!-- Best Value Category -->
        <div class="category-section mb-5" data-aos="fade-up">
          <h3 class="category-title">Best Value Plans</h3>
          <div class="row gy-4">
            <!-- Basic Plan -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="pricing-item">
                <h3>Starter Plan</h3>
                <div class="price">
                  <sup>$</sup>49<span>/month</span>
                </div>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> 2 Classes/week</li>
                  <li><i class="bi bi-check-circle-fill"></i> 30 min/class</li>
                  <li><i class="bi bi-check-circle-fill"></i> Basic Quran reading</li>
                  <li><i class="bi bi-check-circle-fill"></i> Email support</li>
                </ul>
                <div class="savings-box">
                  <p>Save 20% annually</p>
                  <p class="savings-amount">$470/year</p>
                </div>
                <a href="{{ route('enroll.show') }}" class="btn btn-primary">Get Started</a>
              </div>
            </div>

            <!-- Standard Plan -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="pricing-item featured">
                <div class="popular-badge">Most Popular</div>
                <h3>Family Plan</h3>
                <div class="price">
                  <sup>$</sup>79<span>/month</span>
                </div>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> 3 Classes/week</li>
                  <li><i class="bi bi-check-circle-fill"></i> 45 min/class</li>
                  <li><i class="bi bi-check-circle-fill"></i> With Tajweed</li>
                  <li><i class="bi bi-check-circle-fill"></i> Priority support</li>
                </ul>
                <div class="savings-box">
                  <p>Save 25% annually</p>
                  <p class="savings-amount">$711/year</p>
                </div>
                <a href="{{ route('enroll.show') }}" class="btn btn-primary">Get Started</a>
              </div>
            </div>

            <!-- Premium Plan -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="pricing-item">
                <h3>Premium Plan</h3>
                <div class="price">
                  <sup>$</sup>129<span>/month</span>
                </div>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> 4 Classes/week</li>
                  <li><i class="bi bi-check-circle-fill"></i> 60 min/class</li>
                  <li><i class="bi bi-check-circle-fill"></i> Advanced reading</li>
                  <li><i class="bi bi-check-circle-fill"></i> 24/7 support</li>
                </ul>
                <div class="savings-box">
                  <p>Save 30% annually</p>
                  <p class="savings-amount">$1,083/year</p>
                </div>
                <a href="{{ route('enroll.show') }}" class="btn btn-primary">Get Started</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Special Offers Category -->
        <div class="category-section mb-5" data-aos="fade-up">
          <h3 class="category-title">Special Offers</h3>
          <div class="row gy-4">
            <!-- Basic Memorization -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="pricing-item">
                <div class="special-badge">Limited Time</div>
                <h3>Ramadan Special</h3>
                <div class="price">
                  <sup>$</sup>69<span>/month</span>
                </div>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> 2 Classes/week</li>
                  <li><i class="bi bi-check-circle-fill"></i> 30 min/class</li>
                  <li><i class="bi bi-check-circle-fill"></i> Extra Ramadan classes</li>
                  <li><i class="bi bi-check-circle-fill"></i> Special Ramadan content</li>
                </ul>
                <div class="savings-box">
                  <p>Save 25% annually</p>
                  <p class="savings-amount">$621/year</p>
                </div>
                <a href="{{ route('enroll.show') }}" class="btn btn-primary">Get Started</a>
              </div>
            </div>

            <!-- Standard Memorization -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="pricing-item featured">
                <div class="popular-badge">Best Deal</div>
                <h3>Family Bundle</h3>
                <div class="price">
                  <sup>$</sup>99<span>/month</span>
                </div>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> 3 Classes/week</li>
                  <li><i class="bi bi-check-circle-fill"></i> 45 min/class</li>
                  <li><i class="bi bi-check-circle-fill"></i> Up to 3 family members</li>
                  <li><i class="bi bi-check-circle-fill"></i> Shared resources</li>
                </ul>
                <div class="savings-box">
                  <p>Save 35% annually</p>
                  <p class="savings-amount">$772/year</p>
                </div>
                <a href="{{ route('enroll.show') }}" class="btn btn-primary">Get Started</a>
              </div>
            </div>

            <!-- Premium Memorization -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="pricing-item">
                <div class="special-badge">New</div>
                <h3>Weekend Special</h3>
                <div class="price">
                  <sup>$</sup>149<span>/month</span>
                </div>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Weekend classes only</li>
                  <li><i class="bi bi-check-circle-fill"></i> 60 min/class</li>
                  <li><i class="bi bi-check-circle-fill"></i> Flexible scheduling</li>
                  <li><i class="bi bi-check-circle-fill"></i> Priority booking</li>
                </ul>
                <div class="savings-box">
                  <p>Save 30% annually</p>
                  <p class="savings-amount">$1,251/year</p>
                </div>
                <a href="{{ route('enroll.show') }}" class="btn btn-primary">Get Started</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Islamic Values Category -->
        <div class="category-section mb-5" data-aos="fade-up">
          <h3 class="category-title">Islamic Values</h3>
          <div class="row gy-4">
            <!-- Basic Islamic Studies -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="pricing-item">
                <h3>Community Plan</h3>
                <div class="price">
                  <sup>$</sup>59<span>/month</span>
                </div>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> 2 Classes/week</li>
                  <li><i class="bi bi-check-circle-fill"></i> 30 min/class</li>
                  <li><i class="bi bi-check-circle-fill"></i> Group sessions</li>
                  <li><i class="bi bi-check-circle-fill"></i> Community events</li>
                </ul>
                <div class="savings-box">
                  <p>Save 20% annually</p>
                  <p class="savings-amount">$566/year</p>
                </div>
                <a href="{{ route('enroll.show') }}" class="btn btn-primary">Get Started</a>
              </div>
            </div>

            <!-- Standard Islamic Studies -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="pricing-item featured">
                <div class="popular-badge">Recommended</div>
                <h3>Spiritual Growth</h3>
                <div class="price">
                  <sup>$</sup>89<span>/month</span>
                </div>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> 3 Classes/week</li>
                  <li><i class="bi bi-check-circle-fill"></i> 45 min/class</li>
                  <li><i class="bi bi-check-circle-fill"></i> Personal development</li>
                  <li><i class="bi bi-check-circle-fill"></i> Spiritual guidance</li>
                </ul>
                <div class="savings-box">
                  <p>Save 25% annually</p>
                  <p class="savings-amount">$801/year</p>
                </div>
                <a href="{{ route('enroll.show') }}" class="btn btn-primary">Get Started</a>
              </div>
            </div>

            <!-- Premium Islamic Studies -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="pricing-item">
                <h3>Complete Journey</h3>
                <div class="price">
                  <sup>$</sup>139<span>/month</span>
                </div>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> 4 Classes/week</li>
                  <li><i class="bi bi-check-circle-fill"></i> 60 min/class</li>
                  <li><i class="bi bi-check-circle-fill"></i> Comprehensive learning</li>
                  <li><i class="bi bi-check-circle-fill"></i> Personal mentorship</li>
                </ul>
                <div class="savings-box">
                  <p>Save 30% annually</p>
                  <p class="savings-amount">$1,167/year</p>
                </div>
                <a href="{{ route('enroll.show') }}" class="btn btn-primary">Get Started</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Additional Benefits Section -->
        <div class="row mt-5">
          <div class="col-12 text-center" data-aos="fade-up">
            <h3>All Plans Include</h3>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="benefit-item">
              <i class="bi bi-person-check-fill"></i>
              <h4>Qualified Teachers</h4>
              <p>Learn from certified Quran teachers with years of experience</p>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="benefit-item">
              <i class="bi bi-calendar-check"></i>
              <h4>Flexible Schedule</h4>
              <p>Choose class times that work best for you</p>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="benefit-item">
              <i class="bi bi-laptop"></i>
              <h4>Online Platform</h4>
              <p>Access your classes from anywhere in the world</p>
            </div>
          </div>
        </div>

        <!-- FAQ Section -->
        <div class="row mt-5">
          <div class="col-12 text-center" data-aos="fade-up">
            <h3>Frequently Asked Questions</h3>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="faq-item">
              <h4>Can I change my plan later?</h4>
              <p>Yes, you can upgrade or downgrade your plan at any time. Changes will be reflected in your next billing cycle.</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="faq-item">
              <h4>What payment methods do you accept?</h4>
              <p>We accept all major credit cards, PayPal, and bank transfers. All payments are secure and encrypted.</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="faq-item">
              <h4>Is there a free trial?</h4>
              <p>Yes, we offer a free trial class to help you experience our teaching methods and meet your potential teacher.</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="faq-item">
              <h4>What if I miss a class?</h4>
              <p>We understand life happens. You can reschedule missed classes within the same week, subject to teacher availability.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="cta section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center" data-aos="fade-up">
            <div class="cta-box">
              <h3>Ready to Start Your Quranic Journey?</h3>
              <p class="mb-4">Join thousands of students who have already transformed their relationship with the Quran through our structured learning programs.</p>
              <a href="{{ route('enroll.show') }}" class="btn btn-primary btn-lg px-5 py-3">Enroll Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
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
</html> 