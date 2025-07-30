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
      <a href="https://www.facebook.com/share/1FjSh3nMAU/" target="_blank" style="color: #ffd600;"><i class="bi bi-facebook"></i></a>
      <a href="https://x.com/MadrassatAzhary?t=7nDlU99ZIjGwJTPM0daDwQ&s=09" target="_blank" style="color: #ffd600;"><i class="bi bi-twitter-x"></i></a>
      <a href="https://www.instagram.com/madrassat.azhary?igsh=MXMxd3E5bnhxdzBjNw==" target="_blank" style="color: #ffd600;"><i class="bi bi-instagram"></i></a>
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
                            <li><a class="dropdown-item d-flex align-items-center gap-2 py-3 px-4" href="{{ route('website.courses.quran') }}" style="transition: background 0.2s, color 0.2s;"><i class="bi bi-book-half text-primary"></i> <span>{{ __('website.Quran (Recitation, Tajweed & Memorization)') }}</span></a></li>
                <li><a class="dropdown-item d-flex align-items-center gap-2 py-3 px-4" href="{{ route('website.courses.arabic-language') }}" style="transition: background 0.2s, color 0.2s;"><i class="bi bi-translate text-info"></i> <span>{{ __('website.Arabic Language') }}</span></a></li>
                <li><a class="dropdown-item d-flex align-items-center gap-2 py-3 px-4" href="{{ route('website.courses.islamic-studies') }}" style="transition: background 0.2s, color 0.2s;"><i class="bi bi-moon-stars text-warning"></i> <span>{{ __('website.Islamic Studies') }}</span></a></li>
                <li><a class="dropdown-item d-flex align-items-center gap-2 py-3 px-4" href="{{ route('website.courses.ijazah') }}" style="transition: background 0.2s, color 0.2s;"><i class="bi bi-award text-secondary"></i> <span>{{ __('website.Ijazah (Qur\'an Certification)') }}</span></a></li>
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
    
    <!-- Hero Section -->
    <section class="teacher-hero" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 60vh; display: flex; align-items: center; position: relative; overflow: hidden;">
      <div class="hero-background" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('{{ asset('website_assets/img/hero-main.png') }}') center/cover; opacity: 0.1;"></div>
      <div class="container position-relative">
        <div class="row align-items-center">
          <div class="col-lg-6 text-center text-lg-start">
            <div class="hero-content" style="color: white;">
              <h1 class="display-4 fw-bold mb-4" style="font-size: 3.5rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">{{ $teacher->name }}</h1>
              <div class="rating-display mb-4">
                <div class="stars mb-2" style="font-size: 2rem;">
                  @for($i = 1; $i <= 5; $i++)
                    @if($i <= round($teacher->rating))
                      <span style="color: #ffd700;">★</span>
                    @else
                      <span style="color: rgba(255,255,255,0.5);">☆</span>
                    @endif
                  @endfor
                </div>
                <div class="rating-text">
                  <span class="rating-number" style="font-size: 2.5rem; font-weight: bold;">{{ number_format($teacher->rating, 1) }}</span>
                  <span class="rating-label" style="font-size: 1.2rem; opacity: 0.9;">{{ __('out of 5') }}</span>
                  <span class="reviews-count" style="font-size: 1rem; opacity: 0.8;">({{ $teacher->total_reviews }} {{ __('reviews') }})</span>
                </div>
              </div>
              <p class="lead mb-4" style="font-size: 1.3rem; opacity: 0.95;">{{ $teacher->short_description }}</p>
              
              <!-- Statistics -->
              <div class="stats-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; margin: 3rem 0;">
                <div class="stat-item text-center">
                  <div class="stat-number" style="font-size: 2.5rem; font-weight: bold; display: block;">{{ $teacher->total_teaching_hours }}+</div>
                  <div class="stat-label" style="font-size: 1rem; opacity: 0.9;">{{ __('Teaching Hours') }}</div>
                </div>
                <div class="stat-item text-center">
                  <div class="stat-number" style="font-size: 2.5rem; font-weight: bold; display: block;">{{ $teacher->years_experience }}+</div>
                  <div class="stat-label" style="font-size: 1rem; opacity: 0.9;">{{ __('Years Experience') }}</div>
                </div>
                <div class="stat-item text-center">
                  <div class="stat-number" style="font-size: 2.5rem; font-weight: bold; display: block;">{{ $teacher->total_reviews }}+</div>
                  <div class="stat-label" style="font-size: 1rem; opacity: 0.9;">{{ __('Happy Students') }}</div>
                </div>
              </div>
              
              <div class="hero-cta">
                <a href="{{ route('enroll.show') }}" class="btn btn-warning btn-lg px-5 py-3" style="font-size: 1.2rem; font-weight: 600; border-radius: 50px; box-shadow: 0 8px 25px rgba(0,0,0,0.3);">
                  <i class="bi bi-calendar-check me-2"></i>{{ __('Book Your Lesson') }}
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 text-center">
            <div class="teacher-avatar-hero">
              @if($teacher->photo)
                <img src="{{ asset($teacher->photo) }}" alt="{{ $teacher->name }}" class="img-fluid rounded-circle" style="max-width: 350px; border: 8px solid rgba(255,255,255,0.3); box-shadow: 0 20px 40px rgba(0,0,0,0.3);">
              @else
                <div class="rounded-circle bg-light mx-auto d-flex align-items-center justify-content-center" style="width: 350px; height: 350px; border: 8px solid rgba(255,255,255,0.3); box-shadow: 0 20px 40px rgba(0,0,0,0.3);">
                  <i class="bi bi-person" style="font-size: 8rem; color: #666;"></i>
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Main Content -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                
                <!-- About Section -->
                <div class="content-section mb-5">
                    <div class="section-header mb-4">
                        <h2 class="section-title" style="font-size: 2.5rem; font-weight: 700; color: #13223F; position: relative; padding-bottom: 1rem;">
                            {{ __('About') }} {{ $teacher->name }}
                            <div class="title-underline" style="position: absolute; bottom: 0; left: 0; width: 80px; height: 4px; background: linear-gradient(90deg, #667eea, #764ba2); border-radius: 2px;"></div>
                        </h2>
                    </div>
                    <div class="section-content" style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <p class="lead" style="font-size: 1.2rem; line-height: 1.8; color: #555;">{{ $teacher->full_bio }}</p>
                    </div>
                </div>

                <!-- Information Grid -->
                <div class="info-grid mb-5" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                    
                    <!-- Languages Card -->
                    <div class="info-card" style="background: white; border-radius: 20px; padding: 2rem; box-shadow: 0 10px 30px rgba(0,0,0,0.1); border-left: 5px solid #667eea;">
                        <div class="card-header mb-3">
                            <h3 class="card-title" style="font-size: 1.5rem; font-weight: 600; color: #13223F; display: flex; align-items: center;">
                                <i class="bi bi-translate me-2" style="color: #667eea; font-size: 1.8rem;"></i>
                                {{ __('Languages Spoken') }}
                            </h3>
                        </div>
                        <div class="card-content">
                            @if($teacher->languages)
                                <div class="language-list">
                                    {!! $teacher->languages !!}
                                </div>
                            @else
                                <p class="text-muted">{{ __('No languages specified') }}</p>
                            @endif
                        </div>
                    </div>

                    <!-- Certifications Card -->
                    <div class="info-card" style="background: white; border-radius: 20px; padding: 2rem; box-shadow: 0 10px 30px rgba(0,0,0,0.1); border-left: 5px solid #764ba2;">
                        <div class="card-header mb-3">
                            <h3 class="card-title" style="font-size: 1.5rem; font-weight: 600; color: #13223F; display: flex; align-items: center;">
                                <i class="bi bi-award me-2" style="color: #764ba2; font-size: 1.8rem;"></i>
                                {{ __('Diplomas & Certificates') }}
                            </h3>
                        </div>
                        <div class="card-content">
                            @if($teacher->certifications)
                                <div class="certification-list">
                                    {!! $teacher->certifications !!}
                                </div>
                            @else
                                <p class="text-muted">{{ __('No certifications specified') }}</p>
                            @endif
                        </div>
                    </div>

                </div>

                <!-- Teaching Methods Section -->
                <div class="content-section mb-5">
                    <div class="section-header mb-4">
                        <h2 class="section-title" style="font-size: 2.5rem; font-weight: 700; color: #13223F; position: relative; padding-bottom: 1rem;">
                            {{ __('Teaching Methods') }}
                            <div class="title-underline" style="position: absolute; bottom: 0; left: 0; width: 80px; height: 4px; background: linear-gradient(90deg, #667eea, #764ba2); border-radius: 2px;"></div>
                        </h2>
                    </div>
                    <div class="section-content" style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <div class="methods-content">
                            <p class="lead" style="font-size: 1.2rem; line-height: 1.8; color: #555;">{{ $teacher->teaching_methods }}</p>
                        </div>
                    </div>
                </div>

                <!-- Materials Used Section -->
                <div class="content-section mb-5">
                    <div class="section-header mb-4">
                        <h2 class="section-title" style="font-size: 2.5rem; font-weight: 700; color: #13223F; position: relative; padding-bottom: 1rem;">
                            {{ __('Materials Used') }}
                            <div class="title-underline" style="position: absolute; bottom: 0; left: 0; width: 80px; height: 4px; background: linear-gradient(90deg, #667eea, #764ba2); border-radius: 2px;"></div>
                        </h2>
                    </div>
                    <div class="section-content" style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <div class="materials-content">
                            <p class="lead" style="font-size: 1.2rem; line-height: 1.8; color: #555;">{{ $teacher->materials_used }}</p>
                        </div>
                    </div>
                </div>

                <!-- Reviews Section -->
                <div class="reviews-section">
                    <div class="section-header mb-4">
                        <h2 class="section-title" style="font-size: 2.5rem; font-weight: 700; color: #13223F; position: relative; padding-bottom: 1rem;">
                            {{ __('Student Reviews') }}
                            <div class="title-underline" style="position: absolute; bottom: 0; left: 0; width: 80px; height: 4px; background: linear-gradient(90deg, #667eea, #764ba2); border-radius: 2px;"></div>
                        </h2>
                    </div>

                    <!-- Rating Summary -->
                    <div class="rating-summary mb-4" style="background: white; border-radius: 20px; padding: 2rem; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center">
                                <div class="overall-rating">
                                    <div class="rating-number" style="font-size: 3rem; font-weight: bold; color: #13223F;">{{ number_format($teacher->rating, 1) }}</div>
                                    <div class="stars mb-2" style="font-size: 1.5rem;">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= round($teacher->rating))
                                                <span style="color: #ffd700;">★</span>
                                            @else
                                                <span style="color: #ddd;">☆</span>
                                            @endif
                                        @endfor
                                    </div>
                                    <div class="total-reviews" style="color: #666; font-size: 1rem;">{{ $teacher->total_reviews }} {{ __('reviews') }}</div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="rating-distribution">
                                    @for($star = 5; $star >= 1; $star--)
                                        @php
                                            $starCount = $teacher->reviews->where('rating', $star)->count();
                                            $percentage = $teacher->total_reviews > 0 ? ($starCount / $teacher->total_reviews) * 100 : 0;
                                        @endphp
                                        <div class="rating-bar d-flex align-items-center mb-2">
                                            <span class="star-label me-2" style="min-width: 20px;">{{ $star }}★</span>
                                            <div class="progress flex-grow-1 me-2" style="height: 8px; border-radius: 4px;">
                                                <div class="progress-bar" style="width: {{ $percentage }}%; background: linear-gradient(90deg, #ffd700, #ffed4e);"></div>
                                            </div>
                                            <span class="star-count" style="min-width: 30px; font-size: 0.9rem; color: #666;">{{ $starCount }}</span>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reviews List -->
                    <div class="reviews-list" style="background: white; border-radius: 20px; padding: 2rem; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        @if($teacher->reviews->count() > 0)
                            @foreach($teacher->reviews as $review)
                                <div class="review-item mb-4 pb-4" style="border-bottom: 1px solid #eee;">
                                    <div class="review-header d-flex justify-content-between align-items-start mb-3">
                                        <div class="reviewer-info">
                                            <h4 class="reviewer-name mb-1" style="font-weight: 600; color: #13223F;">{{ $review->reviewer_name }}</h4>
                                            <div class="review-rating">
                                                @for($i = 1; $i <= 5; $i++)
                                                    @if($i <= $review->rating)
                                                        <span style="color: #ffd700;">★</span>
                                                    @else
                                                        <span style="color: #ddd;">☆</span>
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>
                                        <small class="review-date text-muted">{{ $review->created_at->diffForHumans() }}</small>
                                    </div>
                                    <div class="review-content">
                                        <p class="review-text" style="line-height: 1.6; color: #555;">{{ $review->comment }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="no-reviews text-center py-4">
                                <i class="bi bi-chat-dots" style="font-size: 3rem; color: #ddd;"></i>
                                <p class="mt-3 text-muted">{{ __('No reviews yet') }}</p>
                            </div>
                        @endif

                        <!-- Review Form -->
                        @auth
                            <div class="review-form mt-5 pt-4" style="border-top: 2px solid #eee;">
                                <h4 class="form-title mb-4" style="font-weight: 600; color: #13223F;">{{ __('Write a Review') }}</h4>
                                <form action="{{ route('website.teachers.reviews.store', $teacher) }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="form-label fw-semibold">{{ __('Your Rating') }}</label>
                                        <div class="rating-input">
                                            @for($i = 5; $i >= 1; $i--)
                                                <input type="radio" name="rating" value="{{ $i }}" id="star{{ $i }}" required>
                                                <label for="star{{ $i }}" class="star-label-input">☆</label>
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label fw-semibold">{{ __('Your Review') }}</label>
                                        <textarea name="comment" class="form-control" rows="4" required style="border-radius: 10px; border: 2px solid #eee; padding: 1rem;"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary px-4 py-2" style="background: linear-gradient(90deg, #667eea, #764ba2); border: none; border-radius: 25px; font-weight: 600;">
                                        {{ __('Submit Review') }}
                                    </button>
                                </form>
                            </div>
                        @else
                            <div class="login-prompt mt-5 pt-4 text-center" style="border-top: 2px solid #eee;">
                                <div class="alert alert-info" style="border-radius: 15px; border: none; background: linear-gradient(135deg, #e3f2fd, #f3e5f5);">
                                    <i class="bi bi-info-circle me-2"></i>
                                    {{ __('Please') }} <a href="{{ route('login') }}" class="alert-link fw-semibold">{{ __('login') }}</a> {{ __('to write a review') }}.
                                </div>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- CTA Card -->
                <div class="cta-card mb-4" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 20px; padding: 2rem; color: white; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.2);">
                    <div class="cta-icon mb-3">
                        <i class="bi bi-calendar-check" style="font-size: 3rem; opacity: 0.9;"></i>
                    </div>
                    <h3 class="cta-title mb-3" style="font-size: 1.5rem; font-weight: 600;">{{ __('Try a Lesson with') }} {{ $teacher->name }}</h3>
                    <p class="cta-description mb-4" style="opacity: 0.9;">{{ __('Book your first lesson and experience quality teaching') }}</p>
                    <a href="{{ route('enroll.show') }}" class="btn btn-warning btn-lg px-4 py-2" style="border-radius: 25px; font-weight: 600; box-shadow: 0 5px 15px rgba(0,0,0,0.3);">
                        {{ __('Book Your Lesson') }}
                    </a>
                </div>

                <!-- Related Teachers -->
                <div class="related-teachers" style="background: white; border-radius: 20px; padding: 2rem; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <h3 class="section-title mb-4" style="font-size: 1.5rem; font-weight: 600; color: #13223F; position: relative; padding-bottom: 1rem;">
                        {{ __('Other Teachers') }}
                        <div class="title-underline" style="position: absolute; bottom: 0; left: 0; width: 60px; height: 3px; background: linear-gradient(90deg, #667eea, #764ba2); border-radius: 2px;"></div>
                    </h3>
                    @foreach($relatedTeachers as $relatedTeacher)
                        <div class="teacher-item d-flex align-items-center mb-3 p-3" style="border-radius: 15px; transition: all 0.3s ease; border: 1px solid #eee;">
                            @if($relatedTeacher->photo)
                                <img src="{{ asset($relatedTeacher->photo) }}" alt="{{ $relatedTeacher->name }}" class="rounded-circle me-3" style="width: 60px; height: 60px; object-fit: cover;">
                            @else
                                <div class="rounded-circle bg-secondary me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-person text-white"></i>
                                </div>
                            @endif
                            <div class="teacher-info flex-grow-1">
                                <h4 class="teacher-name mb-1" style="font-size: 1rem; font-weight: 600;">
                                    <a href="{{ route('website.teachers.show', $relatedTeacher) }}" class="text-decoration-none text-dark">
                                        {{ $relatedTeacher->name }}
                                    </a>
                                </h4>
                                <div class="teacher-rating">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= round($relatedTeacher->rating))
                                            <span style="color: #ffd700; font-size: 0.9rem;">★</span>
                                        @else
                                            <span style="color: #ddd; font-size: 0.9rem;">☆</span>
                                        @endif
                                    @endfor
                                    <span class="ms-1" style="font-size: 0.8rem; color: #666;">({{ $relatedTeacher->total_reviews }})</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Hero Section Responsive */
        @media (max-width: 768px) {
            .teacher-hero {
                min-height: 40vh;
            }
            
            .hero-content h1 {
                font-size: 2.5rem !important;
            }
            
            .stats-grid {
                grid-template-columns: 1fr !important;
                gap: 1rem !important;
            }
            
            .teacher-avatar-hero img,
            .teacher-avatar-hero .rounded-circle {
                max-width: 250px !important;
                width: 250px !important;
                height: 250px !important;
            }
        }

        /* Rating Input Styles */
        .rating-input {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-start;
            gap: 0.5rem;
        }

        .rating-input input {
            display: none;
        }

        .rating-input .star-label-input {
            cursor: pointer;
            font-size: 2rem;
            color: #ddd;
            transition: color 0.3s ease;
        }

        .rating-input input:checked ~ .star-label-input,
        .rating-input .star-label-input:hover,
        .rating-input .star-label-input:hover ~ .star-label-input {
            color: #ffd700;
        }

        /* Hover Effects */
        .info-card:hover,
        .content-section .section-content:hover,
        .reviews-list:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }

        .teacher-item:hover {
            background: #f8f9fa;
            transform: translateX(5px);
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(90deg, #5a6fd8, #6a4190);
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