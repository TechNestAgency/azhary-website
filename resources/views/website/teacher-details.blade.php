<!DOCTYPE html>
<html lang="en">

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
</head>

<body class="teacher-details-page">

  <!-- Include Header -->
  @include('website.partials.header')

  <main class="main">
    <!-- Teacher Hero Section -->
    <section class="teacher-hero section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="teacher-image">
              <img src="{{ asset('storage/' . $teacher->photo) }}" alt="{{ $teacher->name }}" class="img-fluid rounded-4 shadow">
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