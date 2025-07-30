<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title', 'Articles - Azhary Academy')</title>
  <meta name="description" content="@yield('meta_description', 'Explore our collection of Islamic articles and educational content')">
  <meta name="keywords" content="@yield('meta_keywords', '')">

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

  @stack('styles')
</head>

<body class="articles-page">

  <!-- Include Header -->
  @include('website.partials.header')

  <main class="main">
    @yield('content')
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

  <!-- Fixed WhatsApp Icon -->
  <div id="whatsapp-float" class="whatsapp-float">
    <a href="https://wa.me/33758684170" target="_blank" class="whatsapp-link">
      <i class="bi bi-whatsapp"></i>
    </a>
  </div>

  <!-- Scroll Shadow Effect Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const header = document.getElementById('fixedHeader');
      
      window.addEventListener('scroll', function() {
        if (window.scrollY > 10) {
          header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
        } else {
          header.style.boxShadow = 'none';
        }
      });
    });
  </script>

  <!-- WhatsApp Float Styles -->
  <style>
    .whatsapp-float {
      position: fixed;
      bottom: 30px;
      right: 30px;
      z-index: 1000;
      animation: whatsapp-bounce 2s infinite;
    }
    
    .whatsapp-link {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 60px;
      height: 60px;
      background-color: #25d366;
      color: white;
      border-radius: 50%;
      text-decoration: none;
      box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4);
      transition: all 0.3s ease;
    }
    
    .whatsapp-link:hover {
      background-color: #128c7e;
      color: white;
      transform: scale(1.1);
      box-shadow: 0 6px 20px rgba(37, 211, 102, 0.6);
    }
    
    .whatsapp-link i {
      font-size: 28px;
    }
    
    @keyframes whatsapp-bounce {
      0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
      }
      40% {
        transform: translateY(-10px);
      }
      60% {
        transform: translateY(-5px);
      }
    }
    
    @media (max-width: 768px) {
      .whatsapp-float {
        bottom: 20px;
        right: 20px;
      }
      
      .whatsapp-link {
        width: 50px;
        height: 50px;
      }
      
      .whatsapp-link i {
        font-size: 24px;
      }
    }
  </style>

  @stack('scripts')
</body>
</html> 