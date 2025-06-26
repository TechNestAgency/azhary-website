<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ __('website.Articles') }} - Azhary Academy</title>
  <meta name="description" content="{{ __('website.Explore our collection of Islamic articles and educational content') }}">
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

  <!-- Articles Page Specific Styles -->
  <style>
    :root {
      --heading-color: #13223F;
      --accent-color: #0d7adb;
    }

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

    .article-card {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .article-card:hover {
      transform: translateY(-5px);
    }

    .article-image {
      position: relative;
      height: 200px;
      overflow: hidden;
    }

    .article-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .article-content {
      padding: 20px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }

    .article-meta {
      display: flex;
      gap: 15px;
      font-size: 0.9rem;
      color: #666;
      margin-bottom: 10px;
    }

    .article-title {
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .article-title a {
      color: var(--heading-color);
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .article-title a:hover {
      color: var(--accent-color);
    }

    .article-excerpt {
      color: #666;
      margin-bottom: 15px;
      flex-grow: 1;
    }

    .read-more {
      color: var(--accent-color);
      text-decoration: none;
      font-weight: 500;
      display: inline-flex;
      align-items: center;
      gap: 5px;
      transition: color 0.3s ease;
    }

    .read-more:hover {
      color: var(--heading-color);
    }

    .pagination-wrapper {
      display: flex;
      justify-content: center;
      margin-top: 40px;
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
      <div class="container text-center">
  
      </div>
    </div>

    <!-- Articles Section -->
    <section class="articles-section section">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>{{ __('website.Latest Articles') }}</h2>
          <p>{{ __('website.Discover insightful articles about Islamic teachings and education') }}</p>
        </div>

        <!-- Articles Grid -->
        <div class="row g-4">
          @forelse($articles as $article)
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
            <div class="article-card">
              <div class="article-image">
                <img src="{{ asset($article->image) }}" class="img-fluid" alt="{{ $article->getTranslation('title', app()->getLocale()) }}">
              </div>
              <div class="article-content">
                <div class="article-meta">
                  <span><i class="bi bi-calendar"></i> {!! $article->created_at->format('M d, Y') !!}</span>
                </div>
                <h3 class="article-title">
                  <a href="{{ route('website.articles.show', $article->id) }}">{!! $article->getTranslation('title', app()->getLocale()) !!}</a>
                </h3>
                <p class="article-excerpt">{!! Str::limit($article->getTranslation('content', app()->getLocale()), 150) !!}</p>
                <a href="{{ route('website.articles.show', $article->id) }}" class="read-more">
                  {{ __('website.Read More') }} <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          @empty
          <div class="col-12">
            <div class="alert alert-info text-center">
              {{ __('website.No articles found matching your criteria.') }}
            </div>
          </div>
          @endforelse
        </div>

        <!-- Pagination -->
        <div class="pagination-wrapper">
          {{ $articles->links() }}
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
</body>
</html> 