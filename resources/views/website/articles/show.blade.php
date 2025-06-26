<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ $article->getTranslation('title', app()->getLocale()) . ' - Azhary Academy' }}</title>
  <meta name="description" content="{{ $article->getTranslation('content', app()->getLocale()) }}">
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

  <style>
  /* Hero Section */
  .article-hero {
      background-size: cover;
      background-position: center;
      padding: 120px 0;
      color: white;
      text-align: center;
      position: relative;
  }

  .article-hero::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 100px;
      background: linear-gradient(to bottom, transparent, white);
  }

  .article-hero-content {
      position: relative;
      z-index: 1;
  }

  .article-meta {
      display: flex;
      justify-content: center;
      gap: 25px;
      margin-bottom: 25px;
      font-size: 1.1rem;
  }

  .article-meta span {
      display: flex;
      align-items: center;
      gap: 8px;
      opacity: 0.9;
      color: white !important;
  }

  .article-title {
      font-size: 3.5rem;
      font-weight: 700;
      line-height: 1.2;
      margin: 0;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
      color: white !important;
  }

  /* Article Content */
  .article-content {
      padding: 80px 0;
      background: #fff;
  }

  .article-featured-image {
      margin-bottom: 40px;
  }

  .article-featured-image img {
      width: 100%;
      height: auto;
      transition: transform 0.3s ease;
  }

  .article-featured-image img:hover {
      transform: scale(1.02);
  }

  .article-body {
      font-size: 1.2rem;
      line-height: 1.8;
      color: #2c3e50;
  }

  .article-body p {
      margin-bottom: 1.8rem;
  }

  .article-body h2 {
      font-size: 2.2rem;
      font-weight: 700;
      margin: 3rem 0 1.5rem;
      color: #1a202c;
  }

  .article-body h3 {
      font-size: 1.8rem;
      font-weight: 600;
      margin: 2.5rem 0 1.2rem;
      color: #2d3748;
  }

  .article-body img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      margin: 2rem 0;
  }

  .article-body blockquote {
      border-left: 4px solid var(--primary-color);
      padding: 1rem 2rem;
      margin: 2rem 0;
      background: #f8f9fa;
      font-style: italic;
  }

  /* Share Section */
  .article-share {
      margin: 60px 0;
      padding: 30px;
      background: #f8f9fa;
      border-radius: 12px;
      text-align: center;
  }

  .share-title {
      font-size: 1.5rem;
      margin-bottom: 20px;
      color: #2d3748;
  }

  .share-buttons {
      display: flex;
      justify-content: center;
      gap: 20px;
  }

  .share-btn {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-decoration: none;
      transition: all 0.3s ease;
      font-size: 1.2rem;
  }

  .share-btn:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
  }

  .facebook { background: #1877f2; }
  .twitter { background: #000; }
  .linkedin { background: #0077b5; }
  .whatsapp { background: #25d366; }

  /* Related Articles */
  .related-articles {
      margin-top: 80px;
  }

  .related-title {
      font-size: 2rem;
      margin-bottom: 30px;
      color: #1a202c;
      text-align: center;
  }

  .related-article-card {
      background: white;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      height: 100%;
  }

  .related-article-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
  }

  .related-article-image {
      height: 200px;
      overflow: hidden;
  }

  .related-article-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
  }

  .related-article-card:hover .related-article-image img {
      transform: scale(1.1);
  }

  .related-article-content {
      padding: 20px;
  }

  .related-article-content h4 {
      font-size: 1.2rem;
      margin-bottom: 15px;
      line-height: 1.4;
  }

  .related-article-content h4 a {
      color: #2d3748;
      text-decoration: none;
      transition: color 0.3s ease;
  }

  .related-article-content h4 a:hover {
      color: var(--primary-color);
  }

  .related-article-meta {
      font-size: 0.9rem;
      color: #718096;
  }

  .related-article-meta span {
      display: flex;
      align-items: center;
      gap: 5px;
  }

  /* Responsive Design */
  @media (max-width: 768px) {
      .article-hero {
          padding: 80px 0;
      }

      .article-title {
          font-size: 2.5rem;
      }

      .article-meta {
          flex-direction: column;
          gap: 15px;
      }

      .article-body {
          font-size: 1.1rem;
      }

      .article-body h2 {
          font-size: 1.8rem;
      }

      .article-body h3 {
          font-size: 1.5rem;
      }

      .share-buttons {
          flex-wrap: wrap;
      }
  }
  </style>
</head>

<body class="article-page">

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
              <li><a class="dropdown-item" href="{{ route('home') }}#hero">{{ __('website.Home') }}</a></li>
              <li><a class="dropdown-item" href="{{ route('home') }}#about">{{ __('website.About') }}</a></li>
              <li><a class="dropdown-item" href="{{ route('home') }}#services">{{ __('website.Services') }}</a></li>
              <li><a class="dropdown-item" href="{{ route('home') }}#portfolio">{{ __('website.Portfolio') }}</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="organizationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ __('website.Organizations') }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="organizationsDropdown">
              <li><a class="dropdown-item" href="{{ route('home') }}#team">{{ __('website.Team') }}</a></li>
              <li><a class="dropdown-item" href="{{ route('website.articles.index') }}">{{ __('website.Articles') }}</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ __('website.More') }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="moreDropdown">
              <li><a class="dropdown-item" href="{{ route('pricing') }}">{{ __('website.Pricing') }}</a></li>
              <li><a class="dropdown-item" href="{{ route('home') }}#contact">{{ __('website.Contact') }}</a></li>
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
    <section class="article-hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset($article->image) }}')">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="article-hero-content">
                        <div class="article-meta">
                            <span class="date">
                                <i class="bi bi-calendar3"></i>
                                {{ $article->created_at->format('F d, Y') }}
                            </span>
                            @if($article->author)
                            <span class="author">
                                <i class="bi bi-person-circle"></i>
                                {{ $article->author->name }}
                            </span>
                            @endif
                        </div>
                        <h1 class="article-title">{{ $article->getTranslation('title', app()->getLocale()) }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <article class="article-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Featured Image -->
                    <div class="article-featured-image">
                        <img src="{{ asset($article->image) }}" 
                             class="img-fluid rounded-4 shadow-lg" 
                             alt="{{ $article->getTranslation('title', app()->getLocale()) }}">
                    </div>

                    <!-- Article Body -->
                    <div class="article-body">
                        {!! $article->getTranslation('content', app()->getLocale()) !!}
                    </div>

                    <!-- Share Section -->
                    <div class="article-share">
                        <h4 class="share-title">{{ __('website.Share this article') }}</h4>
                        <div class="share-buttons">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" 
                               target="_blank" 
                               class="share-btn facebook"
                               title="{{ __('website.Share on Facebook') }}">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($article->getTranslation('title', app()->getLocale())) }}" 
                               target="_blank" 
                               class="share-btn twitter"
                               title="{{ __('website.Share on Twitter') }}">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($article->getTranslation('title', app()->getLocale())) }}" 
                               target="_blank" 
                               class="share-btn linkedin"
                               title="{{ __('website.Share on LinkedIn') }}">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <a href="https://wa.me/?text={{ urlencode($article->getTranslation('title', app()->getLocale()) . ' ' . request()->url()) }}" 
                               target="_blank" 
                               class="share-btn whatsapp"
                               title="{{ __('website.Share on WhatsApp') }}">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Related Articles -->
                    @if(isset($relatedArticles) && $relatedArticles->isNotEmpty())
                    <div class="related-articles">
                        <h3 class="related-title">{{ __('website.Related Articles') }}</h3>
                        <div class="row g-4">
                            @foreach($relatedArticles as $relatedArticle)
                            <div class="col-md-6">
                                <div class="related-article-card">
                                    <div class="related-article-image">
                                        <img src="{{ asset($relatedArticle->image) }}" 
                                             class="img-fluid" 
                                             alt="{{ $relatedArticle->getTranslation('title', app()->getLocale()) }}">
                                    </div>
                                    <div class="related-article-content">
                                        <h4>
                                            <a href="{{ route('website.articles.show', $relatedArticle->id) }}">
                                                {{ $relatedArticle->getTranslation('title', app()->getLocale()) }}
                                            </a>
                                        </h4>
                                        <div class="related-article-meta">
                                            <span>
                                                <i class="bi bi-calendar3"></i>
                                                {{ $relatedArticle->created_at->format('M d, Y') }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </article>

  </main>

  <!-- Include Footer -->
  @include('website.partials.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('website_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('website_assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('website_assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('website_assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('website_assets/js/main.js') }}"></script>

</body>
</html> 