@extends('website.layouts.app')

@section('title', __('website.Ijazah (Qur\'an Certification)') . ' - Azhary Academy')
@section('meta_description', __('website.Advanced program for those seeking formal authorization in Quran recitation'))

@push('styles')
<style>
    /* Course page specific styles */
    .course-page {
        padding-top: 140px;
    }

    .course-hero {
        background: linear-gradient(rgba(2, 37, 108, 0.88), rgba(2, 37, 108, 0.88)), url('{{ asset('website_assets/img/course-bg.jpg') }}') no-repeat center center;
        background-size: cover;
        padding: 120px 0 60px;
        position: relative;
        overflow: hidden;
    }

    .course-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: 
            radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.05) 0%, transparent 50%),
            radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.03) 0%, transparent 50%);
        background-size: 200px 200px, 300px 300px;
        background-position: 0 0, 100px 100px;
        background-repeat: repeat;
        pointer-events: none;
        z-index: 1;
    }

    .course-hero .container {
        position: relative;
        z-index: 2;
    }

    .course-hero h1 {
        color: #36b6e7 !important;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .course-details {
        background: #f8f9fa;
    }

    .feature-item {
        background: white;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .feature-item:hover {
        transform: translateY(-5px);
    }

    .course-sidebar {
        position: sticky;
        top: 100px;
    }

    .course-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .course-card:hover {
        transform: translateY(-5px);
    }

    .testimonial-card {
        transition: transform 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
    }

    @media (max-width: 768px) {
        .course-hero {
            padding: 80px 0 40px;
        }
        
        .course-hero h1 {
            font-size: 2rem;
        }
    }
</style>
@endpush

@section('content')
<div class="course-page">
    <!-- Course Hero Section -->
    <section class="course-hero section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 text-white">
                    <h1 class="display-4 fw-bold mb-4 mt-3" style="color: #36b6e7;">{{ __('website.ijazah_title') }}</h1>
                    <p class="lead mb-4">{{ __('website.ijazah_overview') }}</p>
                    <div class="d-flex gap-3 justify-content-center">
                        <a href="{{ route('enroll.show') }}" class="btn btn-primary btn-lg">{{ __('website.Enroll Now') }}</a>
                        <a href="#course-details" class="btn btn-outline-light btn-lg">{{ __('website.Learn More') }}</a>
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
                        <h2 class="mb-4">{{ __('website.ijazah_learn') }}</h2>
                        <p class="lead">{{ __('website.ijazah_description') }}</p>
                        
                        <div class="course-features mt-5">
                            <h3 class="mb-4">{{ __('website.What You\'ll Learn') }}</h3>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="feature-item d-flex align-items-start">
                                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                                        <span>{{ __('website.ijazah_feature1') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item d-flex align-items-start">
                                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                                        <span>{{ __('website.ijazah_feature2') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item d-flex align-items-start">
                                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                                        <span>{{ __('website.ijazah_feature3') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item d-flex align-items-start">
                                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                                        <span>{{ __('website.ijazah_feature4') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course-structure mt-5">
                            <h3 class="mb-4">{{ __('website.ijazah_structure') }}</h3>
                            <div class="accordion" id="courseAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#level1">
                                            {{ __('website.ijazah_level1') }}
                                        </button>
                                    </h2>
                                    <div id="level1" class="accordion-collapse collapse show" data-bs-parent="#courseAccordion">
                                        <div class="accordion-body">
                                            <p>{{ __('website.ijazah_level1_desc') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#level2">
                                            {{ __('website.ijazah_level2') }}
                                        </button>
                                    </h2>
                                    <div id="level2" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                                        <div class="accordion-body">
                                            <p>{{ __('website.ijazah_level2_desc') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#level3">
                                            {{ __('website.ijazah_level3') }}
                                        </button>
                                    </h2>
                                    <div id="level3" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                                        <div class="accordion-body">
                                            <p>{{ __('website.ijazah_level3_desc') }}</p>
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
                        <div class="course-card">
                            <div class="card-body p-4">
                                <h4 class="card-title mb-4">{{ __('website.Course Information') }}</h4>
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <i class="bi bi-clock text-primary me-2"></i>
                                        <strong>{{ __('website.Duration') }}:</strong> 2-3 years
                                    </li>
                                    <li class="mb-3">
                                        <i class="bi bi-person text-primary me-2"></i>
                                        <strong>{{ __('website.Level') }}:</strong> {{ __('website.Advanced') }}
                                    </li>
                                    <li class="mb-3">
                                        <i class="bi bi-translate text-primary me-2"></i>
                                        <strong>{{ __('website.Language') }}:</strong> {{ __('website.French') }}
                                    </li>
                                    <li class="mb-3">
                                        <i class="bi bi-calendar text-primary me-2"></i>
                                        <strong>{{ __('website.Schedule') }}:</strong> {{ __('website.Flexible') }}
                                    </li>
                                </ul>
                                <a href="{{ route('enroll.show') }}" class="btn btn-primary w-100">{{ __('website.Enroll Now') }}</a>
                            </div>
                        </div>

                        <div class="card shadow-sm mt-4">
                            <div class="card-body">
                                <h4 class="card-title mb-4">{{ __('website.Need Help?') }}</h4>
                                <p>{{ __('website.Contact our support team for any questions about the course.') }}</p>
                                <a href="#contact" class="btn btn-outline-primary w-100">{{ __('website.Contact Us') }}</a>
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
            <h2 class="text-center mb-5">{{ __('website.What Our Students Say') }}</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="testimonial-card p-4 bg-white rounded-4 shadow-sm">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('website_assets/img/test_man1.png') }}" alt="Student" class="rounded-circle me-3" width="60">
                            <div>
                                <h5 class="mb-1">{{ __('website.Omar Khalid') }}</h5>
                                <div class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">{{ __('website.testimonial_ijazah_1') }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-card p-4 bg-white rounded-4 shadow-sm">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('website_assets/img/test_girl.png') }}" alt="Student" class="rounded-circle me-3" width="60">
                            <div>
                                <h5 class="mb-1">{{ __('website.Layla Ibrahim') }}</h5>
                                <div class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">{{ __('website.testimonial_ijazah_2') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section section py-5" style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);">
        <div class="container text-center text-dark">
            <h2 class="mb-4">{{ __('website.Ready to Pursue Ijazah Certification?') }}</h2>
            <p class="lead mb-4">{{ __('website.Join our prestigious Ijazah program and become part of the unbroken chain of Quranic transmission with certified scholars.') }}</p>
            <a href="{{ route('enroll.show') }}" class="btn btn-primary btn-lg px-5">{{ __('website.Enroll Now') }}</a>
        </div>
    </section>
</div>
@endsection 