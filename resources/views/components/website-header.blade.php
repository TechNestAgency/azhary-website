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