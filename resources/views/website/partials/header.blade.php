<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container position-relative d-flex align-items-center justify-content-between">

    <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
      <img src="{{ asset('website_assets/img/logo-no.png') }}" alt="Azhary Academy">
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{ route('home') }}#hero" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('home') }}#about" class="{{ request()->routeIs('home') && request()->fragment('about') ? 'active' : '' }}">About</a></li>
        <li><a href="{{ route('home') }}#services" class="{{ request()->routeIs('home') && request()->fragment('services') ? 'active' : '' }}">Services</a></li>
        <li><a href="{{ route('home') }}#team" class="{{ request()->routeIs('home') && request()->fragment('team') ? 'active' : '' }}">Teachers</a></li>
        <li><a href="{{ route('pricing') }}" class="{{ request()->routeIs('pricing') ? 'active' : '' }}">Pricing</a></li>
        <li><a href="{{ route('home') }}#contact" class="{{ request()->routeIs('home') && request()->fragment('contact') ? 'active' : '' }}">Contact</a></li>
        <li><a href="{{ route('enroll.show') }}" class="{{ request()->routeIs('enroll.show') ? 'active' : '' }}">Enroll Now</a></li>
        <li><a href="{{ route('website.packages.index') }}">Packages</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <a class="btn-getstarted" href="{{ route('enroll.show') }}">Get Started</a>

  </div>
</header> 