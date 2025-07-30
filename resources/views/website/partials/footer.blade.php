<footer id="footer" class="footer light-background islamic-pattern-4">

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
          <img src="{{ asset('website_assets/img/logo-no.png') }}" alt="Azhary Academy">
        </a>
        <div class="footer-contact pt-3">
          <p>Azhary Academy</p>
          <p>{{ __('website.Online Quran Learning Platform') }}</p>
          <p class="mt-3"><strong>Email:</strong> <span>Madrassatazhary4@gmail.com</span></p>
          <p><strong>WhatsApp:</strong> <span>+201507788982</span></p>
          <div class="social-links mt-3">
            <a href="https://x.com/MadrassatAzhary?t=7nDlU99ZIjGwJTPM0daDwQ&s=09" target="_blank"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.instagram.com/madrassat.azhary?igsh=MXMxd3E5bnhxdzBjNw==" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://www.facebook.com/share/1FjSh3nMAU/" target="_blank"><i class="bi bi-facebook"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>{{ __('website.Quick Links') }}</h4>
        <ul>
          <li><a href="{{ route('home') }}#hero">{{ __('website.Home') }}</a></li>
          <li><a href="{{ route('home') }}#about">{{ __('website.About') }}</a></li>
          <li><a href="{{ route('home') }}#services">{{ __('website.Services') }}</a></li>
          <li><a href="{{ route('home') }}#team">{{ __('website.Team') }}</a></li>
          <li><a href="{{ route('home') }}#contact">{{ __('website.Contact') }}</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>{{ __('website.Core Courses') }}</h4>
        <ul>
          <li><a href="{{ route('home') }}#services">{{ __('website.Quran Reading') }}</a></li>
          <li><a href="{{ route('home') }}#services">{{ __('website.Tajweed') }}</a></li>
          <li><a href="{{ route('home') }}#services">{{ __('website.Memorization') }}</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>{{ __('website.Additional Courses') }}</h4>
        <ul>
          <li><a href="{{ route('home') }}#services">{{ __('website.Arabic Language') }}</a></li>
          <li><a href="{{ route('home') }}#services">{{ __('website.Islamic Studies') }}</a></li>
          <li><a href="{{ route('home') }}#services">{{ __('website.Children\'s Program') }}</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>{{ __('website.Resources') }}</h4>
        <ul>
          <li><a href="{{ route('home') }}#pricing">{{ __('website.Pricing Plans') }}</a></li>
          <li><a href="{{ route('home') }}#how-we-work">{{ __('website.How We Work') }}</a></li>
          <li><a href="{{ route('enroll.show') }}">{{ __('website.Enroll Now') }}</a></li>
        </ul>
      </div>

    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>&copy; {{ date('Y') }} <strong>Azhary Academy</strong>. {{ __('website.All Rights Reserved') }} | {{ __('website.Built by') }} <a href="https://www.facebook.com/profile.php?id=61571489512337" target="_blank">TechNest Company</a></p>
  </div>

</footer> 