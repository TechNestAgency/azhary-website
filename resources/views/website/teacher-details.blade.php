<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ $teacher->name }} - Azhary Academy</title>
  <meta name="description" content="{{ Str::limit($teacher->short_description, 160) }}">
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

<body class="teacher-details-page">

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

  <main class="main" style="margin-top: 112px;">
    <!-- Teacher Hero Section -->
    <section class="teacher-hero section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="teacher-image">
              <img src="{{ asset($teacher->photo) }}" alt="{{ $teacher->name }}" class="img-fluid rounded-4 shadow">
            </div>
          </div>
          <div class="col-lg-8" data-aos="fade-left">
            <div class="teacher-info">
              <h1 class="teacher-name">{{ $teacher->name }}</h1>
              <div class="teacher-rating mb-4">
                @for($i = 1; $i <= 5; $i++)
                  <i class="bi bi-star-fill {{ $i <= $teacher->rating ? 'text-warning' : 'text-muted' }}"></i>
                @endfor
                <span class="ms-2">({{ $teacher->total_reviews }} reviews)</span>
              </div>
              <p class="teacher-bio">{!! nl2br($teacher->short_description) !!}</p>
              <div class="teacher-stats d-flex gap-4 mb-4">
                <div class="stat-item">
                  <h4>{{ $teacher->years_experience }}</h4>
                  <span>Years Experience</span>
                </div>
                <div class="stat-item">
                  <h4>{{ $teacher->total_teaching_hours }}</h4>
                  <span>Teaching Hours</span>
                </div>
              </div>
              <a href="#contact" class="btn btn-primary">Book a Session</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Qualifications Section -->
    <section class="qualifications section light-background">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Qualifications & Expertise</h2>
        </div>
        <div class="row">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="qualification-card">
              <h3>Languages</h3>
              <p>{!! nl2br($teacher->languages) !!}</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="qualification-card">
              <h3>Certifications</h3>
              <p>{!! nl2br($teacher->certifications) !!}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Teaching Style Section -->
    <section class="teaching-style section">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Teaching Approach</h2>
        </div>
        <div class="row g-4">
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="approach-card">
              <div class="icon-box">
                <i class="bi bi-book"></i>
              </div>
              <h3>Teaching Methods</h3>
              <p>{!! nl2br($teacher->teaching_methods) !!}</p>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="approach-card">
              <div class="icon-box">
                <i class="bi bi-tools"></i>
              </div>
              <h3>Materials Used</h3>
              <p>{!! nl2br($teacher->materials_used) !!}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Full Bio Section -->
    <section class="bio section light-background">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>About the Teacher</h2>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="bio-content">
              {!! nl2br($teacher->full_bio) !!}
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Reviews Section -->
    <section class="reviews section">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Student Reviews</h2>
        </div>

        <!-- Add Review Form -->
        <div class="row mb-5">
          <div class="col-lg-8 mx-auto">
            <div class="review-form-wrapper" data-aos="fade-up">
              <h3>Write a Review</h3>
              <form action="{{ route('website.teachers.reviews.store', $teacher->id) }}" method="POST" class="review-form">
                @csrf
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="reviewer_name" class="form-label">Your Name</label>
                    <input type="text" name="reviewer_name" id="reviewer_name" class="form-control" required>
                    @error('reviewer_name')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="reviewer_email" class="form-label">Your Email</label>
                    <input type="email" name="reviewer_email" id="reviewer_email" class="form-control" required>
                    @error('reviewer_email')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Rating</label>
                  <div class="rating-input">
                    @for($i = 5; $i >= 1; $i--)
                    <input type="radio" name="rating" value="{{ $i }}" id="star{{ $i }}" required>
                    <label for="star{{ $i }}"><i class="bi bi-star-fill"></i></label>
                    @endfor
                  </div>
                  @error('rating')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="comment" class="form-label">Your Review</label>
                  <textarea name="comment" id="comment" class="form-control" rows="4" required minlength="10" maxlength="500" placeholder="Share your experience with this teacher..."></textarea>
                  @error('comment')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit Review</button>
              </form>
            </div>
          </div>
        </div>

        <!-- Reviews Display -->
        <div class="row">
          <div class="col-lg-8 mx-auto">
            @if($teacher->reviews->count() > 0)
              <div class="reviews-slider swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
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
                    }
                  }
                </script>
                <div class="swiper-wrapper">
                  @foreach($teacher->reviews as $review)
                  <div class="swiper-slide">
                    <div class="review-card">
                      <div class="review-content">
                        <p>
                          <i class="bi bi-quote quote-icon"></i>
                          {!! nl2br($review->comment) !!}
                        </p>
                      </div>
                      <div class="review-profile">
                        <div class="rating">
                          @for($i = 1; $i <= 5; $i++)
                            <i class="bi bi-star-fill {{ $i <= $review->rating ? 'text-warning' : 'text-muted' }}"></i>
                          @endfor
                        </div>
                        <div class="profile-info">
                          <div>
                            <h3>{{ $review->reviewer_name }}</h3>
                            <h4>{{ $review->created_at->format('M d, Y') }}</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <div class="swiper-pagination"></div>
              </div>
            @else
              <div class="text-center" data-aos="fade-up">
                <p>No reviews yet. Be the first to review this teacher!</p>
              </div>
            @endif
          </div>
        </div>
      </div>
    </section>

    <!-- Add some CSS for the rating input -->
    <style>
      .rating-input {
        display: flex;
        flex-direction: row-reverse;
        justify-content: flex-end;
        gap: 0.3rem;
      }
      .rating-input input {
        display: none;
      }
      .rating-input label {
        cursor: pointer;
        font-size: 1.5rem;
        color: #ddd;
        transition: color 0.2s;
      }
      .rating-input label:hover,
      .rating-input label:hover ~ label,
      .rating-input input:checked ~ label {
        color: #ffc107;
      }
      .review-form-wrapper {
        background: #f8f9fa;
        padding: 2rem;
        border-radius: 1rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
      }
      .review-form-wrapper h3 {
        margin-bottom: 1.5rem;
      }
      .review-card {
        background: #fff;
        padding: 2rem;
        border-radius: 1rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
      }
      .quote-icon {
        font-size: 1.5rem;
        color: #0d6efd;
        margin-right: 0.5rem;
      }
      .review-profile {
        margin-top: 1.5rem;
        padding-top: 1.5rem;
        border-top: 1px solid #dee2e6;
      }
      .profile-info h3 {
        margin: 0;
        font-size: 1.1rem;
      }
      .profile-info h4 {
        margin: 0;
        font-size: 0.9rem;
        color: #6c757d;
      }
    </style>

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Book a Session</h2>
          <p>Schedule a free trial session with {{ $teacher->name }}</p>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="cta-box">
              <h3>Ready to Learn with {{ $teacher->name }}?</h3>
              <p class="mb-4">Fill out our enrollment form to schedule your free trial session. Our team will contact you shortly to discuss your learning goals and schedule.</p>
              <a href="{{ route('enroll.show') }}" class="btn btn-primary btn-lg px-5 py-3">Book Now</a>
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
  <script src="{{ asset('website_assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('website_assets/js/main.js') }}"></script>
  <script src="{{ asset('website_assets/js/enroll-form.js') }}"></script>

</body>
</html> 