<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ $teacher->name }} - Azhary Academy</title>
  <meta name="description" content="{{ $teacher->short_description }}">
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
<body class="teacher-page">

  <!-- Top Bar -->
  <div class="top-bar d-flex align-items-center justify-content-between px-4" style="background-color:rgb(2, 37, 108);opacity: 0.88; color: #fff; height: 48px; position: fixed; top: 0; left: 0; width: 100%; z-index: 1040;">
    <div class="d-flex align-items-center gap-4">
      <span class="d-flex align-items-center"><i class="bi bi-telephone-fill me-2"></i> {{ __('website.Whatsapp') }} : +201507788982</span>
      <span class="mx-2" style="border-left: 1px solid #fff; height: 20px;"></span>
      <span class="d-flex align-items-center"><i class="bi bi-envelope-fill me-2"></i> Madrassatazhary4@gmail.com</span>
    </div>
    <div class="d-flex align-items-center gap-4">
      <a href="#" style="color: #fff; text-decoration: none;">{{ __('website.Our Social') }}</a>
      <a href="#" style="color: #ffd600;"><i class="bi bi-facebook"></i></a>
      <a href="#" style="color: #ffd600;"><i class="bi bi-twitter"></i></a>
      <a href="#" style="color: #ffd600;"><i class="bi bi-pinterest"></i></a>
      <a href="#" style="color: #ffd600;"><i class="bi bi-youtube"></i></a>
      <a href="#" style="color: #ffd600;"><i class="bi bi-instagram"></i></a>
      <a href="#" style="color: #ffd600;"><i class="bi bi-linkedin"></i></a>
    </div>
  </div>

  <!-- Header -->
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
            <span style="color:rgb(49, 65, 99);">{{ __('website.Category') }}</span>
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
            <li class="dropdown language-switcher nav-item">
              <div style="display: flex; align-items: center; gap: 0.5rem; font-weight: bold; font-size: 1.1rem; letter-spacing: 1px;">
                <a href="{{ route('language.switch', 'en') }}" style="text-decoration: none; color: {{ app()->getLocale() == 'en' ? '#0a2260' : '#0a2260b0' }}; font-weight: {{ app()->getLocale() == 'en' ? 'bold' : 'normal' }};">EN</a>
                <span style="color: #0a2260; font-weight: bold;">|</span>
                <a href="{{ route('language.switch', 'fr') }}" style="text-decoration: none; color: {{ app()->getLocale() == 'fr' ? '#0a2260' : '#0a2260b0' }}; font-weight: {{ app()->getLocale() == 'fr' ? 'bold' : 'normal' }};">FR</a>
              </div>
            </li>
          </ul>
        </nav>
        <a class="btn btn-primary" href="{{ route('enroll.show') }}" style="background-color:rgb(2, 37, 108); opacity: 0.88;padding: 0.75rem 2rem; font-size: 1.1rem;">{{ __('website.Enroll Now') }}</a>
      </div>
    </div>
  </header>

  <main class="main" style="margin-top: 112px;">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 text-center mb-4 mb-md-0">
                                @if($teacher->photo)
                                    <img src="{{ asset('storage/' . $teacher->photo) }}" alt="{{ $teacher->name }}" class="img-fluid rounded-circle" style="max-width: 200px;">
                                @else
                                    <div class="rounded-circle bg-secondary mx-auto" style="width: 200px; height: 200px;"></div>
                                @endif
                            </div>
                            <div class="col-md-8">
                                <h1 class="h3 mb-3">{{ $teacher->name }}</h1>
                                <div class="text-warning mb-3">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= round($teacher->rating))
                                            ★
                                        @else
                                            ☆
                                        @endif
                                    @endfor
                                    <span class="text-muted ms-2">({{ $teacher->total_reviews }} {{ __('reviews') }})</span>
                                </div>
                                <p class="lead">{{ $teacher->short_description }}</p>
                                <div class="d-flex gap-2 mb-3">
                                    <span class="badge bg-primary">{{ $teacher->years_experience }} {{ __('years experience') }}</span>
                                    <span class="badge bg-info">{{ $teacher->total_teaching_hours }} {{ __('teaching hours') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="h4 mb-4">{{ __('About') }}</h2>
                        <p>{{ $teacher->full_bio }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h5 mb-3">{{ __('Languages') }}</h3>
                                @if($teacher->languages)
                                    {!! $teacher->languages !!}
                                @else
                                    <p>{{ __('No languages specified') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h5 mb-3">{{ __('Certifications') }}</h3>
                                @if($teacher->certifications)
                                    {!! $teacher->certifications !!}
                                @else
                                    <p>{{ __('No certifications specified') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h5 mb-3">{{ __('Teaching Methods') }}</h3>
                        <p>{{ $teacher->teaching_methods }}</p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h5 mb-3">{{ __('Materials Used') }}</h3>
                        <p>{{ $teacher->materials_used }}</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h3 class="h5 mb-4">{{ __('Reviews') }}</h3>
                        @if($teacher->reviews->count() > 0)
                            @foreach($teacher->reviews as $review)
                                <div class="border-bottom pb-3 mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <strong>{{ $review->reviewer_name }}</strong>
                                            <div class="text-warning">
                                                @for($i = 1; $i <= 5; $i++)
                                                    @if($i <= $review->rating)
                                                        ★
                                                    @else
                                                        ☆
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>
                                        <small class="text-muted">{{ $review->created_at->diffForHumans() }}</small>
                                    </div>
                                    <p class="mb-0">{{ $review->comment }}</p>
                                </div>
                            @endforeach
                        @else
                            <p>{{ __('No reviews yet') }}</p>
                        @endif

                        @auth
                            <div class="mt-4">
                                <h4 class="h6 mb-3">{{ __('Write a Review') }}</h4>
                                <form action="{{ route('website.teachers.reviews.store', $teacher) }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('Your Rating') }}</label>
                                        <div class="rating">
                                            @for($i = 5; $i >= 1; $i--)
                                                <input type="radio" name="rating" value="{{ $i }}" id="star{{ $i }}" required>
                                                <label for="star{{ $i }}">☆</label>
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('Your Review') }}</label>
                                        <textarea name="comment" class="form-control" rows="3" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">{{ __('Submit Review') }}</button>
                                </form>
                            </div>
                        @else
                            <div class="alert alert-info mt-4">
                                {{ __('Please') }} <a href="{{ route('login') }}">{{ __('login') }}</a> {{ __('to write a review') }}.
                            </div>
                        @endauth
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="h5 mb-4">{{ __('Other Teachers') }}</h3>
                        @foreach($relatedTeachers as $relatedTeacher)
                            <div class="d-flex align-items-center mb-3">
                                @if($relatedTeacher->photo)
                                    <img src="{{ asset('storage/' . $relatedTeacher->photo) }}" alt="{{ $relatedTeacher->name }}" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                @else
                                    <div class="rounded-circle bg-secondary me-3" style="width: 50px; height: 50px;"></div>
                                @endif
                                <div>
                                    <h4 class="h6 mb-0">
                                        <a href="{{ route('website.teachers.show', $relatedTeacher) }}" class="text-decoration-none">
                                            {{ $relatedTeacher->name }}
                                        </a>
                                    </h4>
                                    <div class="text-warning small">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= round($relatedTeacher->rating))
                                                ★
                                            @else
                                                ☆
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
        }

        .rating input {
            display: none;
        }

        .rating label {
            cursor: pointer;
            font-size: 1.5em;
            color: #ddd;
            padding: 0 0.1em;
        }

        .rating input:checked ~ label,
        .rating label:hover,
        .rating label:hover ~ label {
            color: #ffd700;
        }
    </style>
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