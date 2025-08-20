@extends('website.layouts.app')

@section('title', __('website.Quran (Recitation, Tajweed & Memorization)') . ' - Azhary Academy')
@section('meta_description', __('website.Learn Quran recitation, tajweed rules, and memorization with native French-speaking teachers at Azhary Academy'))

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
                        <h1 class="display-4 fw-bold mb-4 mt-3" style="color: #36b6e7;">{{ __('website.quran_title') }}</h1>
                        <p class="lead mb-4">{{ __('website.quran_overview') }}</p>
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
                            <h2 class="mb-4">{{ __('website.quran_learn') }}</h2>
                            <p class="lead">{{ __('website.quran_description') }}</p>
                            
                            <div class="course-features mt-5">
                                <h3 class="mb-4">{{ __('website.What You\'ll Learn') }}</h3>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="feature-item d-flex align-items-start">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span>{{ __('website.quran_feature1') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item d-flex align-items-start">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span>{{ __('website.quran_feature2') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item d-flex align-items-start">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span>{{ __('website.quran_feature3') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item d-flex align-items-start">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span>{{ __('website.quran_feature4') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item d-flex align-items-start">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span>{{ __('website.quran_feature5') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item d-flex align-items-start">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span>{{ __('website.quran_feature6') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="course-structure mt-5">
                                <h3 class="mb-4">{{ __('website.quran_structure') }}</h3>
                                <div class="accordion" id="courseAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#level1">
                                                {{ __('website.quran_level1') }}
                                            </button>
                                        </h2>
                                        <div id="level1" class="accordion-collapse collapse show" data-bs-parent="#courseAccordion">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.quran_level1_item1') }}</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.quran_level1_item2') }}</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.quran_level1_item3') }}</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.quran_level1_item4') }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#level2">
                                                {{ __('website.quran_level2') }}
                                            </button>
                                        </h2>
                                        <div id="level2" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.quran_level2_item1') }}</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.quran_level2_item2') }}</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.quran_level2_item3') }}</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.quran_level2_item4') }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#level3">
                                                {{ __('website.quran_level3') }}
                                            </button>
                                        </h2>
                                        <div id="level3" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.quran_level3_item1') }}</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.quran_level3_item2') }}</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.quran_level3_item3') }}</li>
                                                    <li><i class="bi bi-circle-fill text-primary me-2"></i>{{ __('website.quran_level3_item4') }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="course-benefits mt-5">
                                <h3 class="mb-4">{{ __('website.Course Benefits') }}</h3>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="benefit-item">
                                            <h5><i class="bi bi-star-fill text-warning me-2"></i>{{ __('website.Expert Guidance') }}</h5>
                                            <p>{{ __('website.Learn from qualified teachers with deep knowledge of tajweed and memorization techniques') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="benefit-item">
                                            <h5><i class="bi bi-clock-fill text-primary me-2"></i>{{ __('website.Flexible Schedule') }}</h5>
                                            <p>{{ __('website.Study at your own pace with flexible scheduling options') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="benefit-item">
                                            <h5><i class="bi bi-people-fill text-success me-2"></i>{{ __('website.Personalized Learning') }}</h5>
                                            <p>{{ __('website.One-on-one attention and customized learning plans') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="benefit-item">
                                            <h5><i class="bi bi-award-fill text-info me-2"></i>{{ __('website.Certification') }}</h5>
                                            <p>{{ __('website.Receive certificates upon completion of each level') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        <div class="course-sidebar">
                            <div class="course-card p-4 mb-4">
                                <h4 class="mb-3">{{ __('website.Course Information') }}</h4>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-clock me-2 text-primary"></i>{{ __('website.Duration: Flexible') }}</li>
                                    <li class="mb-2"><i class="bi bi-people me-2 text-success"></i>{{ __('website.Class Type: One-on-One') }}</li>
                                    <li class="mb-2"><i class="bi bi-globe me-2 text-info"></i>{{ __('website.Language: French & Arabic') }}</li>
                                    <li class="mb-2"><i class="bi bi-book me-2 text-warning"></i>{{ __('website.Level: All Levels') }}</li>
                                </ul>
                                <a href="{{ route('enroll.show') }}" class="btn btn-primary w-100">{{ __('website.Enroll Now') }}</a>
                            </div>

                            <div class="course-card p-4">
                                <h4 class="mb-3">{{ __('website.Why Choose This Course?') }}</h4>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>{{ __('website.Comprehensive curriculum') }}</li>
                                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>{{ __('website.Expert native teachers') }}</li>
                                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>{{ __('website.Flexible scheduling') }}</li>
                                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>{{ __('website.Regular progress tracking') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials section py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">{{ __('website.Student Testimonials') }}</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="testimonial-card bg-white p-4 rounded shadow">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('website_assets/img/test_man1.png') }}" alt="Student" class="rounded-circle" width="50">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-0">Ahmed Hassan</h5>
                                    <small class="text-muted">{{ __('website.Quran Student') }}</small>
                                </div>
                            </div>
                            <p class="mb-0">{{ __('website.The combination of tajweed and memorization in one course has been perfect for my learning journey. The teachers are excellent and very patient.') }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="testimonial-card bg-white p-4 rounded shadow">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('website_assets/img/test_girl.png') }}" alt="Student" class="rounded-circle" width="50">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-0">Fatima Zahra</h5>
                                    <small class="text-muted">{{ __('website.Hifz Student') }}</small>
                                </div>
                            </div>
                            <p class="mb-0">{{ __('website.I\'ve made remarkable progress in both my recitation and memorization. The systematic approach and regular revision sessions are very effective.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section section py-5" style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);">
            <div class="container text-center text-dark">
                <h2 class="mb-4">{{ __('website.Ready to Start Your Quran Journey?') }}</h2>
                <p class="lead mb-4">{{ __('website.Join our comprehensive Quran course and master recitation, tajweed, and memorization with expert guidance.') }}</p>
                <a href="{{ route('enroll.show') }}" class="btn btn-primary btn-lg px-5">{{ __('website.Enroll Now') }}</a>
            </div>
        </section>
    </div>
@endsection 