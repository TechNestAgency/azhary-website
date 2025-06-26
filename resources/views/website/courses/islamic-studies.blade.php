<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Islamic Studies - Azhary Academy</title>
    <meta name="description" content="Learn Islamic studies including Aqeedah, Fiqh, and Seerah at Azhary Academy">
    
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

<body class="index-page">

    @include('components.website-header')

    <main class="main">
        <!-- Course Hero Section -->
        <section class="course-hero section" style="background: linear-gradient(rgba(2, 37, 108, 0.88), rgba(2, 37, 108, 0.88)), url('{{ asset('website_assets/img/course-bg.jpg') }}') no-repeat center center; background-size: cover; padding: 120px 0 60px; margin-top: 64px;">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 text-white">
                        <h1 class="display-4 fw-bold mb-4 mt-3" style="color: #36b6e7;">{{ __('website.islamic_studies_title') }}</h1>
                        <p class="lead mb-4">{{ __('website.islamic_studies_overview') }}</p>
                        <div class="d-flex gap-3 justify-content-center">
                            <a href="{{ route('enroll.show') }}" class="btn btn-primary btn-lg">Enroll Now</a>
                            <a href="#course-details" class="btn btn-outline-light btn-lg">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Course Details Section -->
        <section id="course-details" class="course-details section py-5">
            <div class="container">
                <div class="row g-4">
                    <!-- Main Content -->
                    <div class="col-lg-8">
                        <div class="course-content">
                            <h2 class="mb-4">{{ __('website.islamic_studies_learn') }}</h2>
                            <p class="lead">Our Islamic Studies program covers essential aspects of Islamic knowledge, from basic principles to advanced topics, helping you build a strong foundation in your faith.</p>
                            
                            <div class="course-features mt-5">
                                <h3 class="mb-4">What You'll Learn</h3>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="feature-item d-flex align-items-start">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span>{{ __('website.islamic_studies_feature1') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item d-flex align-items-start">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span>{{ __('website.islamic_studies_feature2') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item d-flex align-items-start">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span>{{ __('website.islamic_studies_feature3') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item d-flex align-items-start">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span>{{ __('website.islamic_studies_feature4') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="course-structure mt-5">
                                <h3 class="mb-4">{{ __('website.islamic_studies_structure') }}</h3>
                                <div class="accordion" id="courseAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#level1">
                                                {{ __('website.islamic_studies_level1') }}
                                            </button>
                                        </h2>
                                        <div id="level1" class="accordion-collapse collapse show" data-bs-parent="#courseAccordion">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.islamic_studies_level1_item1') }}</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.islamic_studies_level1_item2') }}</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.islamic_studies_level1_item3') }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#level2">
                                                {{ __('website.islamic_studies_level2') }}
                                            </button>
                                        </h2>
                                        <div id="level2" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.islamic_studies_level2_item1') }}</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.islamic_studies_level2_item2') }}</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.islamic_studies_level2_item3') }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#level3">
                                                {{ __('website.islamic_studies_level3') }}
                                            </button>
                                        </h2>
                                        <div id="level3" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.islamic_studies_level3_item1') }}</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.islamic_studies_level3_item2') }}</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.islamic_studies_level3_item3') }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        <div class="course-sidebar">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Course Information</h4>
                                    <ul class="list-unstyled">
                                        <li class="mb-3">
                                            <i class="bi bi-clock text-primary me-2"></i>
                                            <strong>Duration:</strong> 2 years
                                        </li>
                                        <li class="mb-3">
                                            <i class="bi bi-person text-primary me-2"></i>
                                            <strong>Level:</strong> All levels
                                        </li>
                                        <li class="mb-3">
                                            <i class="bi bi-translate text-primary me-2"></i>
                                            <strong>Language:</strong> French
                                        </li>
                                        <li class="mb-3">
                                            <i class="bi bi-calendar text-primary me-2"></i>
                                            <strong>Schedule:</strong> Flexible
                                        </li>
                                    </ul>
                                    <a href="{{ route('enroll.show') }}" class="btn btn-primary w-100">Enroll Now</a>
                                </div>
                            </div>

                            <div class="card shadow-sm mt-4">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Need Help?</h4>
                                    <p>Contact our support team for any questions about the course.</p>
                                    <a href="#contact" class="btn btn-outline-primary w-100">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials section light-background py-5">
            <div class="container">
                <h2 class="text-center mb-5">What Our Students Say</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="testimonial-card p-4 bg-white rounded-4 shadow-sm">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('website_assets/img/test_man1.png') }}" alt="Student" class="rounded-circle me-3" width="60">
                                <div>
                                    <h5 class="mb-1">Ahmed Hassan</h5>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-0">"The Islamic Studies program has deepened my understanding of my faith. The teachers are knowledgeable and make complex topics easy to understand."</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="testimonial-card p-4 bg-white rounded-4 shadow-sm">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('website_assets/img/test_girl.png') }}" alt="Student" class="rounded-circle me-3" width="60">
                                <div>
                                    <h5 class="mb-1">Fatima Ali</h5>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-0">"I appreciate how the course covers both traditional and contemporary Islamic topics. The discussions are engaging and thought-provoking."</p>
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
</body>
</html> 