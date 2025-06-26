<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Enrollment Form - Azhary Academy</title>
  <meta name="description" content="Enroll in our Quranic education programs">
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

<body class="enroll-page">

  <!-- Include Header -->
  @include('components.website-header')

  <main class="main">
    <!-- Enrollment Form Section -->
    <section class="enroll section" style="padding-top: 160px;">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>{{ __('website.Enrollment Form') }}</h2>
          <p>{{ __('website.Start your Quranic journey with us today') }}</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="form-wrapper" data-aos="fade-up" data-aos-delay="100">
              <form action="{{ route('enroll.store') }}" method="POST" class="php-email-form">
                @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-person"></i></span>
                      <input type="text" name="name" class="form-control" placeholder="{{ __('website.Your name*') }}" required>
                    </div>
                    @error('name')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                      <input type="email" name="email" class="form-control" placeholder="{{ __('website.Email address*') }}" required>
                    </div>
                    @error('email')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-phone"></i></span>
                      <input type="tel" name="mobile" class="form-control" placeholder="{{ __('website.Phone number*') }}" required>
                    </div>
                    @error('mobile')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                      <input type="number" name="age" class="form-control" placeholder="{{ __('website.Age*') }}" min="5" max="100" required>
                    </div>
                    @error('age')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                      <select name="gender" class="form-control" required>
                        <option value="">{{ __('website.Select gender*') }}</option>
                        <option value="male">{{ __('website.Male') }}</option>
                        <option value="female">{{ __('website.Female') }}</option>
                        <option value="other">{{ __('website.Other') }}</option>
                      </select>
                    </div>
                    @error('gender')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-box"></i></span>
                      <select name="package" class="form-control" required>
                        <option value="">{{ __('website.Select package*') }}</option>
                        <option value="starter">{{ __('website.Starter') }} (€32 / 4 {{ __('website.courses') }})</option>
                        <option value="basic">{{ __('website.Basic') }} (€60 / 8 {{ __('website.courses') }})</option>
                        <option value="standard">{{ __('website.Standard') }} (€90 / 12 {{ __('website.courses') }})</option>
                        <option value="advanced">{{ __('website.Advanced') }} (€120 / 16 {{ __('website.courses') }})</option>
                        <option value="professional">{{ __('website.Professional') }} (€180 / 24 {{ __('website.courses') }})</option>
                        <option value="master">{{ __('website.Master') }} (€360 / 48 {{ __('website.courses') }})</option>
                        <option value="elite">{{ __('website.Elite') }} (€750 / 100 {{ __('website.courses') }})</option>
                      </select>
                    </div>
                    @error('package')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="form-group mt-3">
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                    <textarea class="form-control" name="course_details" rows="4" placeholder="{{ __('website.Course details and requirements*') }}" required></textarea>
                  </div>
                  @error('course_details')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="row mt-3">
                  <div class="col-md-6">
                    <label class="form-label">{{ __('website.Preferred Days*') }}</label>
                    <div class="row">
                      @foreach(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $day)
                        <div class="col-6">
                          <div class="form-check">
                            <input type="checkbox" name="preferred_days[]" id="day_{{ strtolower($day) }}" value="{{ strtolower($day) }}" class="form-check-input">
                            <label for="day_{{ strtolower($day) }}" class="form-check-label">{{ __('website.' . $day) }}</label>
                          </div>
                        </div>
                      @endforeach
                    </div>
                    @error('preferred_days')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">{{ __('website.Preferred Times*') }}</label>
                    <div class="row">
                      @foreach(['Morning (8AM-12PM)', 'Afternoon (12PM-4PM)', 'Evening (4PM-8PM)', 'Night (8PM-10PM)'] as $time)
                        <div class="col-6">
                          <div class="form-check">
                            <input type="checkbox" name="preferred_times[]" id="time_{{ strtolower(str_replace(' ', '_', $time)) }}" 
                                value="{{ strtolower(str_replace(' ', '_', $time)) }}" class="form-check-input">
                            <label for="time_{{ strtolower(str_replace(' ', '_', $time)) }}" class="form-check-label">{{ __('website.' . $time) }}</label>
                          </div>
                        </div>
                      @endforeach
                    </div>
                    @error('preferred_times')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="my-3">
                  <div class="loading">{{ __('website.Loading') }}</div>
                  <div class="error-message"></div>
                  <div class="sent-message"></div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-lg px-5 py-3">{{ __('website.Submit Enrollment') }}</button>
                </div>
              </form>
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
  <script src="{{ asset('website_assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('website_assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('website_assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('website_assets/js/main.js') }}"></script>
  <script src="{{ asset('website_assets/js/enroll-form.js') }}"></script>

</body>
</html> 