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
        <img src="{{asset('website_assets/img/logo-no.png')}}" alt="" style="max-height: 80px;">
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
            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">{{ __('website.Home Page') }}</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->routeIs('website.courses.*') ? 'active' : '' }}" href="#" id="coursesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
            <a class="nav-link {{ request()->routeIs('website.teachers.*') ? 'active' : '' }}" href="{{ route('website.teachers.index') }}">{{ __('website.Our Teachers') }}</a>
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
            <a class="nav-link {{ request()->routeIs('website.articles.*') ? 'active' : '' }}" href="{{ route('website.articles.index') }}">{{ __('website.Articles') }}</a>
          </li>
          <li class="nav-item d-flex align-items-center">
            <div class="language-switcher d-flex align-items-center gap-1">
              <a href="{{ route('language.switch', 'en') }}" class="nav-link p-0 language-link" data-lang="en" style="color: {{ app()->getLocale() == 'en' ? '#0a2260' : '#0a2260b0' }}; font-weight: {{ app()->getLocale() == 'en' ? 'bold' : 'normal' }};">EN</a>
              <span style="color: #0a2260; font-weight: bold;">|</span>
              <a href="{{ route('language.switch', 'fr') }}" class="nav-link p-0 language-link" data-lang="fr" style="color: {{ app()->getLocale() == 'fr' ? '#0a2260' : '#0a2260b0' }}; font-weight: {{ app()->getLocale() == 'fr' ? 'bold' : 'normal' }};">FR</a>
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