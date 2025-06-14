<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Quranic Arabic & Tafseer - Azhary Academy</title>
    <meta name="description" content="Learn Quranic Arabic and Tafseer with native French-speaking teachers at Azhary Academy">
    
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

<body>
    <!-- Top Bar -->
    <div class="top-bar d-flex align-items-center justify-content-between px-4" style="background-color:rgb(2, 37, 108);opacity: 0.88; color: #fff; height: 48px; position: fixed; top: 0; left: 0; width: 100%; z-index: 1040;">
        <div class="d-flex align-items-center gap-4">
            <span class="d-flex align-items-center"><i class="bi bi-telephone-fill me-2"></i> Whatsapp : +201507788982</span>
            <span class="mx-2" style="border-left: 1px solid #fff; height: 20px;"></span>
            <span class="d-flex align-items-center"><i class="bi bi-envelope-fill me-2"></i> Madrassatazhary4@gmail.com</span>
        </div>
        <div class="d-flex align-items-center gap-4">
            <a href="#" style="color: #fff; text-decoration: none;">Our Social</a>
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
                        <span style="color:rgb(49, 65, 99);">Category</span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                        <li><a class="dropdown-item" href="{{ route('website.courses.quran-reading') }}"><i class="bi bi-book text-primary me-2"></i>Quran Reading</a></li>
                        <li><a class="dropdown-item" href="{{ route('website.courses.quran-memorization') }}"><i class="bi bi-bookmark text-primary me-2"></i>Quran Memorization</a></li>
                        <li><a class="dropdown-item" href="{{ route('website.courses.quranic-arabic') }}"><i class="bi bi-translate text-primary me-2"></i>Quranic Arabic</a></li>
                        <li><a class="dropdown-item" href="{{ route('website.courses.islamic-studies') }}"><i class="bi bi-mortarboard text-primary me-2"></i>Islamic Studies</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-flex align-items-center ms-auto gap-3">
                <nav id="navmenu" class="navmenu">
                    <ul class="navbar-nav flex-row gap-3 align-items-center mb-0">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#team">Teachers</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pricing') }}">Pricing</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#contact">Contact</a></li>
                    </ul>
                </nav>
                <a class="btn btn-primary" href="{{ route('enroll.show') }}" style="background-color:rgb(2, 37, 108); opacity: 0.88;padding: 0.75rem 2rem; font-size: 1.1rem;">Enroll Now</a>
            </div>
        </div>
    </header>

    <main class="main">
        <!-- Course Hero Section -->
        <section class="course-hero section" style="background: linear-gradient(rgba(2, 37, 108, 0.88), rgba(2, 37, 108, 0.88)), url('{{ asset('website_assets/img/course-bg.jpg') }}') no-repeat center center; background-size: cover; padding: 120px 0 60px; margin-top: 64px;">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 text-white">
                        <h1 class="display-4 fw-bold mb-4 mt-3" style="color: #36b6e7;">Quranic Arabic & Tafseer</h1>
                        <p class="lead mb-4">Deepen your understanding of the Quran through comprehensive Arabic language study and detailed Tafseer lessons.</p>
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
                            <h2 class="mb-4">Course Overview</h2>
                            <p class="lead">Our Quranic Arabic & Tafseer course combines language study with deep understanding of the Quran's meanings, helping you connect directly with Allah's words.</p>
                            
                            <div class="course-features mt-5">
                                <h3 class="mb-4">What You'll Learn</h3>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="feature-item d-flex align-items-start">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span>Quranic vocabulary and grammar</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item d-flex align-items-start">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span>Understanding of Quranic verses</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item d-flex align-items-start">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span>Classical Arabic syntax</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item d-flex align-items-start">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span>Detailed Tafseer studies</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="course-structure mt-5">
                                <h3 class="mb-4">Course Structure</h3>
                                <div class="accordion" id="courseAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#level1">
                                                Level 1: Foundation
                                            </button>
                                        </h2>
                                        <div id="level1" class="accordion-collapse collapse show" data-bs-parent="#courseAccordion">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>Basic Quranic vocabulary</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>Simple grammar structures</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>Introduction to Tafseer</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#level2">
                                                Level 2: Intermediate
                                            </button>
                                        </h2>
                                        <div id="level2" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>Advanced vocabulary</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>Complex grammar patterns</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>Detailed Tafseer studies</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#level3">
                                                Level 3: Advanced
                                            </button>
                                        </h2>
                                        <div id="level3" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>Classical Arabic mastery</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>Advanced Tafseer analysis</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>Independent study skills</li>
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
                                            <strong>Duration:</strong> 1 year
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
                                    <h5 class="mb-1">Omar Khalid</h5>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-0">"The Quranic Arabic course has transformed my understanding of the Quran. The teachers explain complex concepts in a way that's easy to understand, even for beginners."</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="testimonial-card p-4 bg-white rounded-4 shadow-sm">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('website_assets/img/test_girl.png') }}" alt="Student" class="rounded-circle me-3" width="60">
                                <div>
                                    <h5 class="mb-1">Sarah Mohammed</h5>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-0">"The Tafseer lessons are incredibly insightful. I've gained a deeper appreciation for the Quran's meanings and the wisdom behind its verses."</p>
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