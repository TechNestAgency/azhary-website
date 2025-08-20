@extends('website.layouts.app')

@section('title', __('website.Start Arabic today with a free course!') . ' - ' . __('website.Azhary Academy'))
@section('meta_description', __('website.Enroll in our Quranic education programs'))

@push('styles')
<style>
/* Islamic Theme Colors */
:root {
    --islamic-green: #28a745;
    --islamic-gold: #d4af37;
    --islamic-blue: #1e3a8a;
    --islamic-dark: #13223F;
    --islamic-light: #f8f9fa;
    --islamic-accent: #0d7adb;
}

.enroll-hero-section {
    min-height: 80vh;
    background: linear-gradient(135deg, var(--islamic-light) 0%, #e9ecef 100%);
    padding: 0;
    margin: 0;
    position: relative;
}

.enroll-hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        radial-gradient(circle at 20% 20%, rgba(212, 175, 55, 0.03) 0%, transparent 30%),
        radial-gradient(circle at 80% 80%, rgba(40, 167, 69, 0.03) 0%, transparent 30%);
    background-size: 100px 100px, 150px 150px;
    background-position: 0 0, 50px 50px;
    background-repeat: repeat;
    pointer-events: none;
    z-index: 1;
}

/* Page Header Styles */
.page-header {
    background: linear-gradient(135deg, var(--islamic-dark) 0%, var(--islamic-blue) 50%, var(--islamic-accent) 100%);
    color: white;
    padding: 80px 0;
    margin-bottom: 0;
    position: relative;
    overflow: hidden;
    margin-top: 140px;
}

.page-header::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 20px;
    background: linear-gradient(135deg, var(--islamic-green) 0%, var(--islamic-gold) 100%);
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 50%);
}

.page-header::before {
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

.page-header .container {
    position: relative;
    z-index: 2;
}

.page-title {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    position: relative;
}

.page-title::before {
    content: "☪";
    position: absolute;
    top: -20px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 2rem;
    color: var(--islamic-gold);
    opacity: 0.8;
}

.page-subtitle {
    font-size: 1.2rem;
    opacity: 0.9;
    max-width: 600px;
    margin: 0 auto;
}

.enroll-container {
    display: flex;
    min-height: 80vh;
    max-width: 75%;
    margin: 60px auto;
    padding: 0;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    border-radius: 20px;
    overflow: hidden;
    position: relative;
    z-index: 2;
}

.enroll-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(212, 175, 55, 0.05) 0%, rgba(40, 167, 69, 0.05) 100%);
    pointer-events: none;
}

/* Left Section - Teacher Slider */
.teacher-slider-section {
    flex: 1;
    position: relative;
    background: linear-gradient(135deg, #fff 0%, #f8f9fa 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    max-height: 100vh;
    border-right: 3px solid var(--islamic-green);
}

.teacher-slider {
    width: 100%;
    height: 100%;
    position: relative;
    max-height: 600px;
    overflow: hidden;
}

.teacher-slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    align-items: center;
    justify-content: center;
    max-height: 600px;
    z-index: 1;
    transform: translateX(100%);
    pointer-events: none;
}

.teacher-slide.active {
    opacity: 1;
    visibility: visible;
    z-index: 2;
    transform: translateX(0);
    pointer-events: auto;
}

.teacher-slide.prev {
    transform: translateX(-100%);
    opacity: 0;
    visibility: hidden;
}

.teacher-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: relative;
    max-height: 600px;
    border-radius: 0;
}

.teacher-image::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.teacher-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
    color: white;
    padding: 40px 30px 30px;
    text-align: center;
    z-index: 2;
}

.teacher-name {
    font-size: 2.2rem;
    font-weight: 700;
    margin-bottom: 15px;
    line-height: 1.2;
    text-align: center;
}

.teacher-description {
    font-size: 1.1rem;
    line-height: 1.6;
    margin-bottom: 25px;
    opacity: 0.9;
    text-align: center;
    max-width: 90%;
    margin-left: auto;
    margin-right: auto;
}

.learn-more-btn {
    display: inline-block;
    padding: 12px 30px;
    border: 2px solid var(--islamic-gold);
    color: var(--islamic-gold);
    text-decoration: none;
    border-radius: 25px;
    font-weight: 600;
    transition: all 0.3s ease;
    background: rgba(255, 255, 255, 0.1);
    font-size: 0.9rem;
    text-align: center;
}

.learn-more-btn:hover {
    background: var(--islamic-gold);
    color: var(--islamic-dark);
    text-decoration: none;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
}

.learn-more-btn:hover {
    background: white;
    color: #333;
    text-decoration: none;
}

.slider-indicators {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 8px;
    z-index: 10;
}

.slider-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.5);
    cursor: pointer;
    transition: all 0.3s ease;
}

.slider-dot.active {
    background: white;
    transform: scale(1.2);
}

.slider-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.5);
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.3);
    width: 45px;
    height: 45px;
    border-radius: 50%;
    cursor: pointer;
    transition: all 0.3s ease;
    z-index: 10;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    backdrop-filter: blur(5px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.slider-nav:hover {
    background: rgba(0, 0, 0, 0.7);
    border-color: rgba(255, 255, 255, 0.6);
    transform: translateY(-50%) scale(1.1);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
}

.slider-nav:active {
    transform: translateY(-50%) scale(0.95);
}

.slider-nav.prev {
    left: 25px;
}

.slider-nav.next {
    right: 25px;
}

.slider-nav:disabled {
    opacity: 0.3;
    cursor: not-allowed;
    transform: translateY(-50%) scale(0.8);
}

.slider-nav i {
    font-weight: bold;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
}

/* Right Section - Enrollment Form */
.enrollment-form-section {
    flex: 0 0 50%;
    background: linear-gradient(135deg, #fff 0%, #f8f9fa 100%);
    padding: 40px 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    max-width: 50%;
    position: relative;
}

.enrollment-form-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        radial-gradient(circle at 10% 20%, rgba(40, 167, 69, 0.03) 0%, transparent 50%),
        radial-gradient(circle at 90% 80%, rgba(212, 175, 55, 0.03) 0%, transparent 50%);
    pointer-events: none;
}

.form-header {
    text-align: center;
    margin-bottom: 30px;
}

.form-title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--islamic-green);
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    position: relative;
}

.form-title::before {
    content: "📖";
    font-size: 1.5rem;
    margin-right: 8px;
}

.form-title::before {
    content: "🎁";
    font-size: 1.2rem;
}

.form-title::after {
    content: "";
    width: 40px;
    height: 2px;
    background: #28a745;
    margin-top: 3px;
}

.form-subtitle {
    color: #6c757d;
    font-size: 0.9rem;
}

.enrollment-form {
    width: 100%;
}

.form-group {
    margin-bottom: 15px;
}

.form-label {
    display: block;
    margin-bottom: 4px;
    font-weight: 600;
    color: #333;
    font-size: 0.8rem;
}

.form-control {
    width: 100%;
    padding: 10px 15px;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    font-size: 0.9rem;
    transition: all 0.3s ease;
    background: rgba(255, 255, 255, 0.8);
}

.form-control:focus {
    outline: none;
    border-color: var(--islamic-green);
    background: white;
    box-shadow: 0 0 0 3px rgba(40, 167, 69, 0.1);
    transform: translateY(-1px);
}

.form-control:focus {
    outline: none;
    border-color: #28a745;
    background: white;
    box-shadow: 0 0 0 3px rgba(40, 167, 69, 0.1);
}

.form-control::placeholder {
    color: #6c757d;
}

.phone-input-group {
    position: relative;
    display: flex;
    align-items: center;
}

.phone-input-group .form-control {
    padding-left: 35px;
}

.flag-icon {
    position: absolute;
    left: 10px;
    width: 18px;
    height: 12px;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480"><path fill="%23ED2939" d="M0 0h640v480H0z"/><path fill="%23fff" d="M0 0h640v320H0z"/><path fill="%23002395" d="M0 0h640v160H0z"/></svg>') no-repeat center;
    background-size: contain;
}

.date-time-group {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
}

.submit-btn {
    width: 100%;
    padding: 15px;
    background: linear-gradient(135deg, var(--islamic-green) 0%, var(--islamic-accent) 100%);
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 20px;
    position: relative;
    overflow: hidden;
}

.submit-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.submit-btn:hover::before {
    left: 100%;
}

.submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(40, 167, 69, 0.3);
}

.submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(40, 167, 69, 0.3);
}

    .required {
        color: #dc3545;
    }

    /* Form Validation Styles */
    .form-control.is-invalid {
        border-color: #dc3545;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .form-control.is-invalid:focus {
        border-color: #dc3545;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .invalid-feedback {
        display: block;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 0.875rem;
        color: #dc3545;
        font-weight: 500;
    }

    /* Alert Styles */
    .alert {
        border-radius: 10px;
        border: none;
        padding: 15px 20px;
        margin-bottom: 20px;
        font-weight: 500;
    }

    .alert-success {
        background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
        color: #155724;
        border-left: 4px solid #28a745;
    }

    .alert-danger {
        background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
        color: #721c24;
        border-left: 4px solid #dc3545;
    }

    /* Multilingual Success Message Styles */
    .success-message {
        line-height: 1.6;
    }

    .success-message .message-en {
        color: #155724;
        font-weight: 500;
    }

    .success-message .message-ar {
        color: #155724;
        font-weight: 500;
        font-family: 'Arial', sans-serif;
    }

    .success-message .message-fr {
        color: #155724;
        font-weight: 500;
    }

    .success-message strong {
        color: #0f5132;
        font-weight: 700;
    }





    .btn-close {
        opacity: 0.7;
        transition: opacity 0.3s ease;
    }

    .btn-close:hover {
        opacity: 1;
    }

    /* Loading State */
    .submit-btn.loading {
        background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
        cursor: not-allowed;
        opacity: 0.8;
    }

    .submit-btn.loading::before {
        animation: none;
    }

    /* Alert Animation */
    .alert {
        transition: opacity 0.3s ease;
    }

/* Responsive Design */
@media (max-width: 768px) {
    .page-title {
        font-size: 2rem;
    }
    
    .page-subtitle {
        font-size: 1rem;
    }
    
    .page-header {
        padding: 40px 0;
    }
    
    .enroll-container {
        flex-direction: column;
    }
    
    .teacher-slider-section {
        height: 40vh;
        max-height: 400px;
        flex: 0 0 100%;
    }
    
    .enrollment-form-section {
        padding: 30px 20px;
        max-width: 100%;
        flex: 0 0 100%;
    }
    
    .teacher-name {
        font-size: 1.8rem;
    }
    
    .form-title {
        font-size: 1.3rem;
    }
    
    .date-time-group {
        grid-template-columns: 1fr;
    }
    
    .slider-nav {
        width: 40px;
        height: 40px;
        font-size: 1.2rem;
        border-width: 1px;
    }
    
    .slider-nav.prev {
        left: 15px;
    }
    
    .slider-nav.next {
        right: 15px;
    }
    
    .slider-indicators {
        bottom: 15px;
    }
    
    .slider-dot {
        width: 10px;
        height: 10px;
    }
}

@media (max-width: 480px) {
    .enrollment-form-section {
        padding: 30px 20px;
    }
    
    .teacher-overlay {
        padding: 40px 20px 30px;
    }
    
    .teacher-name {
        font-size: 1.8rem;
    }
}
</style>
@endpush

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">{{ __('website.Enroll in Our Programs') }}</h1>
                <p class="page-subtitle">{{ __('website.Join our community and start your learning journey with expert teachers') }}</p>
            </div>
        </div>
    </div>
</section>

<div class="enroll-hero-section">
    <div class="enroll-container">
        <!-- Left Section - Teacher Slider -->
        <div class="teacher-slider-section">
            <div class="teacher-slider">
                @foreach($teachers as $index => $teacher)
                <div class="teacher-slide {{ $index === 0 ? 'active' : '' }}" data-slide="{{ $index }}">
                    @if($teacher->photo)
                        <img src="{{ asset($teacher->photo) }}" alt="{{ $teacher->localized_name }}" class="teacher-image">
                    @else
                        <div class="teacher-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-person" style="font-size: 8rem; color: white; opacity: 0.3;"></i>
                        </div>
                    @endif
                    <div class="teacher-overlay">
                                        <h2 class="teacher-name" style="color: white;">{{ $teacher->localized_name }}</h2>
                <p class="teacher-description">{!! $teacher->localized_short_description !!}</p>
                        <a href="{{ route('website.teachers.show', $teacher) }}" class="learn-more-btn">{{ __('website.Learn more') }}</a>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Slider Navigation -->
            <button class="slider-nav prev" aria-label="Previous teacher">
                <i class="bi bi-chevron-left"></i>
            </button>
            <button class="slider-nav next" aria-label="Next teacher">
                <i class="bi bi-chevron-right"></i>
            </button>
            
            <!-- Slider Indicators -->
            <div class="slider-indicators">
                @foreach($teachers as $index => $teacher)
                <div class="slider-dot {{ $index === 0 ? 'active' : '' }}" data-slide="{{ $index }}"></div>
                @endforeach
            </div>
        </div>

        <!-- Right Section - Enrollment Form -->
        <div class="enrollment-form-section">
            <div class="form-header">
                <h2 class="form-title">{{ __('website.Application Form') }}</h2>
                <p class="form-subtitle">{{ __('website.Please complete the form below to begin your enrollment process') }}</p>
            </div>



            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>❌ Error:</strong> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>✅ Success:</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>❌ Please fix the following errors:</strong>
                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form class="enrollment-form" action="{{ route('enroll.store') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label class="form-label">{{ __('website.Name') }}: <span class="required">*</span></label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('website.Name') }}" required value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">{{ __('website.Email') }}: <span class="required">*</span></label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('website.Email') }}" required value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">{{ __('website.Whatsapp / Phone Number') }} <span class="required">*</span></label>
                    <div class="phone-input-group">
                        <div class="flag-icon"></div>
                        <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="{{ __('website.Number with Country Code') }}" required value="{{ old('phone') }}">
                    </div>
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="date-time-group">
                        <div>
                            <label class="form-label">{{ __('website.Date') }}:</label>
                            <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}">
                            @error('date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label class="form-label">{{ __('website.Time') }}:</label>
                            <input type="time" name="time" class="form-control @error('time') is-invalid @enderror" value="{{ old('time') }}">
                            @error('time')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">{{ __('website.Your level in Arabic') }} <span class="required">*</span></label>
                    <select name="arabic_level" class="form-control @error('arabic_level') is-invalid @enderror" required>
                        <option value="">{{ __('website.Select your level') }}</option>
                        <option value="beginner" {{ old('arabic_level') == 'beginner' ? 'selected' : '' }}>{{ __('website.I have some notions') }}</option>
                        <option value="intermediate" {{ old('arabic_level') == 'intermediate' ? 'selected' : '' }}>{{ __('website.Intermediate') }}</option>
                        <option value="advanced" {{ old('arabic_level') == 'advanced' ? 'selected' : '' }}>{{ __('website.Advanced') }}</option>
                        <option value="native" {{ old('arabic_level') == 'native' ? 'selected' : '' }}>{{ __('website.Native speaker') }}</option>
                    </select>
                    @error('arabic_level')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">{{ __('website.The course you are interested in') }}: <span class="required">*</span></label>
                    <select name="course_interest" class="form-control @error('course_interest') is-invalid @enderror" required>
                        <option value="">{{ __('website.Select a course') }}</option>
                        <option value="quran" {{ old('course_interest') == 'quran' ? 'selected' : '' }}>{{ __('website.Quran (Recitation, Tajweed & Memorization)') }}</option>
                        <option value="arabic_language" {{ old('course_interest') == 'arabic_language' ? 'selected' : '' }}>{{ __('website.Arabic Language') }}</option>
                        <option value="islamic_studies" {{ old('course_interest') == 'islamic_studies' ? 'selected' : '' }}>{{ __('website.Islamic Studies') }}</option>
                        <option value="ijazah" {{ old('course_interest') == 'ijazah' ? 'selected' : '' }}>{{ __('website.Ijazah (Qur\'an Certification)') }}</option>
                    </select>
                    @error('course_interest')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">{{ __('website.Message (precision)') }}</label>
                    <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="4" placeholder="{{ __('website.Tell us more about your learning goals...') }}">{{ old('message') }}</textarea>
                    @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="submit-btn">{{ __('website.Start Learning Today') }}</button>
            </form>
        </div>
    </div>
</div>


@endsection

@push('scripts')
<!-- SweetAlert2 Library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
// Global SweetAlert configuration for minimal modals
Swal.mixin({
    showConfirmButton: false,
    showCancelButton: false,
    showCloseButton: false,
    allowOutsideClick: false,
    allowEscapeKey: false,
    timerProgressBar: true,
    input: null,
    inputPlaceholder: null,
    inputValue: null,
    inputOptions: null,
    inputAutoFocus: false,
    inputAutoTrim: false,
    inputAttributes: null,
    inputValidator: null,
    inputClass: null,
    inputLabel: null,
    inputFormatter: null,
    customClass: {
        popup: 'animated fadeInDown'
    }
});

document.addEventListener('DOMContentLoaded', function() {
    // Check for success message and show SweetAlert
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: '{{ __("website.Success!") }}',
            text: '{{ session("success") }}',
            timer: 3000
        });
    @endif
    // Teacher Slider Functionality
    const teacherSlider = document.querySelector('.teacher-slider');
    const slides = document.querySelectorAll('.teacher-slide');
    const dots = document.querySelectorAll('.slider-dot');
    const prevBtn = document.querySelector('.slider-nav.prev');
    const nextBtn = document.querySelector('.slider-nav.next');
    
    let currentSlide = 0;
    let slideInterval;
    let isTransitioning = false;

    // Initialize slider only if slides exist
    if (slides.length > 0) {
        initializeSlider();
    }

    function initializeSlider() {
        // Set initial state
        slides.forEach((slide, index) => {
            if (index === 0) {
                slide.classList.add('active');
                slide.style.transform = 'translateX(0)';
                slide.style.opacity = '1';
                slide.style.visibility = 'visible';
            } else {
                slide.classList.remove('active');
                slide.style.transform = 'translateX(100%)';
                slide.style.opacity = '0';
                slide.style.visibility = 'hidden';
            }
        });

        // Update dots
        updateDots();

        // Start auto-slide if multiple slides
        if (slides.length > 1) {
            startAutoSlide();
        }

        // Add event listeners
        addEventListeners();
    }

    function showSlide(index) {
        if (isTransitioning || index === currentSlide) return;
        
        isTransitioning = true;
        const currentSlideElement = slides[currentSlide];
        const nextSlideElement = slides[index];

        // Remove active class from current slide
        currentSlideElement.classList.remove('active');
        currentSlideElement.style.transform = 'translateX(-100%)';
        currentSlideElement.style.opacity = '0';
        currentSlideElement.style.visibility = 'hidden';

        // Add active class to next slide
        nextSlideElement.classList.add('active');
        nextSlideElement.style.transform = 'translateX(0)';
        nextSlideElement.style.opacity = '1';
        nextSlideElement.style.visibility = 'visible';

        // Update current slide index
        currentSlide = index;

        // Update dots
        updateDots();

        // Reset transition flag after animation
        setTimeout(() => {
            isTransitioning = false;
        }, 300);
    }

    function nextSlide() {
        if (slides.length <= 1) return;
        const nextIndex = (currentSlide + 1) % slides.length;
        showSlide(nextIndex);
    }

    function prevSlide() {
        if (slides.length <= 1) return;
        const prevIndex = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(prevIndex);
    }

    function updateDots() {
        dots.forEach((dot, index) => {
            if (index === currentSlide) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    }

    function startAutoSlide() {
        if (slides.length <= 1) return;
        stopAutoSlide();
        slideInterval = setInterval(nextSlide, 5000);
    }

    function stopAutoSlide() {
        if (slideInterval) {
            clearInterval(slideInterval);
            slideInterval = null;
        }
    }

    function addEventListeners() {
        // Dot navigation
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                if (index !== currentSlide) {
                    showSlide(index);
                    stopAutoSlide();
                    startAutoSlide();
                }
            });
        });

        // Arrow navigation
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                prevSlide();
                stopAutoSlide();
                startAutoSlide();
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                nextSlide();
                stopAutoSlide();
                startAutoSlide();
            });
        }

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                prevSlide();
                stopAutoSlide();
                startAutoSlide();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
                stopAutoSlide();
                startAutoSlide();
            }
        });

        // Pause on hover
        if (teacherSlider) {
            teacherSlider.addEventListener('mouseenter', stopAutoSlide);
            teacherSlider.addEventListener('mouseleave', startAutoSlide);
        }
    }

    // Form Animations
    const formInputs = document.querySelectorAll('.form-control');
    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'scale(1.02)';
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'scale(1)';
        });
    });

    // Form submission with AJAX
    const submitBtn = document.querySelector('.submit-btn');
    const form = document.querySelector('.enrollment-form');
    
    if (form && submitBtn) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading state
            submitBtn.innerHTML = '<i class="bi bi-hourglass-split"></i> {{ __("website.Processing...") }}';
            submitBtn.style.pointerEvents = 'none';
            submitBtn.disabled = true;
            submitBtn.classList.add('loading');
            
            // Clear previous error messages
            const errorMessages = form.querySelectorAll('.invalid-feedback');
            errorMessages.forEach(error => error.remove());
            
            // Remove invalid classes
            const invalidInputs = form.querySelectorAll('.is-invalid');
            invalidInputs.forEach(input => input.classList.remove('is-invalid'));
            
            // Get form data
            const formData = new FormData(form);
            
            // Submit form via AJAX
            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => {
                if (!response.ok) {
                    if (response.status === 422) {
                        // Validation errors
                        return response.json().then(data => {
                            throw new Error(JSON.stringify(data.errors));
                        });
                    }
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Show success modal
                    Swal.fire({
                        icon: 'success',
                        title: '{{ __("website.Success!") }}',
                        text: data.message,
                        timer: 3000
                    }).then(() => {
                        // Reset form after success
                        form.reset();
                    });
                } else {
                    // Show error modal
                    Swal.fire({
                        icon: 'error',
                        title: '{{ __("website.Error") }}',
                        text: data.message,
                        timer: 4000
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                
                // Check if it's a validation error
                if (error.message.includes('{')) {
                    try {
                        const validationErrors = JSON.parse(error.message);
                        let errorMessage = '{{ __("website.Please fix the following errors:") }}\n\n';
                        
                        Object.keys(validationErrors).forEach(field => {
                            validationErrors[field].forEach(err => {
                                errorMessage += `• ${err}\n`;
                            });
                        });
                        
                        // Show validation errors modal
                        Swal.fire({
                            icon: 'error',
                            title: '{{ __("website.Validation Errors") }}',
                            text: errorMessage,
                            timer: 5000
                        });
                    } catch (e) {
                        // Fallback error modal
                        Swal.fire({
                            icon: 'error',
                            title: '{{ __("website.Error") }}',
                            text: '{{ __("website.An error occurred. Please try again.") }}',
                            timer: 4000
                        });
                    }
                } else {
                    // Show general error modal
                    Swal.fire({
                        icon: 'error',
                        title: '{{ __("website.Error") }}',
                        text: '{{ __("website.An error occurred. Please try again.") }}',
                        timer: 4000
                    });
                }
            })
            .finally(() => {
                // Reset button state
                submitBtn.innerHTML = '{{ __("website.Start Learning Today") }}';
                submitBtn.style.pointerEvents = 'auto';
                submitBtn.disabled = false;
                submitBtn.classList.remove('loading');
            });
        });
    }





    // Add floating animation to teacher images
    const teacherImages = document.querySelectorAll('.teacher-image');
    teacherImages.forEach(img => {
        img.style.animation = 'float 6s ease-in-out infinite';
    });
});

// Add CSS animations
const style = document.createElement('style');
style.textContent = `
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .animated {
        animation-duration: 0.5s;
        animation-fill-mode: both;
    }
    
    .fadeInDown {
        animation-name: fadeInDown;
    }
    
    /* Custom SweetAlert styling for minimal modals */
    .swal2-popup {
        border-radius: 15px !important;
        padding: 2rem !important;
        max-width: 400px !important;
    }
    
    .swal2-title {
        font-size: 1.5rem !important;
        font-weight: 600 !important;
        margin-bottom: 1rem !important;
        color: #333 !important;
    }
    
    .swal2-html-container {
        font-size: 1rem !important;
        line-height: 1.5 !important;
        margin: 0 !important;
        color: #666 !important;
    }
    
    .swal2-icon {
        margin: 0 auto 1rem !important;
    }
    
    /* Hide ALL unwanted elements */
    .swal2-actions,
    .swal2-footer,
    .swal2-input,
    .swal2-file,
    .swal2-textarea,
    .swal2-select,
    .swal2-radio,
    .swal2-checkbox,
    .swal2-range,
    .swal2-progress-steps,
    .swal2-validation-message,
    .swal2-image,
    .swal2-close {
        display: none !important;
    }
    
    /* Ensure timer progress bar is visible and styled */
    .swal2-timer-progress-bar {
        background: #28a745 !important;
        height: 3px !important;
    }
    
    /* Hide any content that might be added by default */
    .swal2-popup *:not(.swal2-icon):not(.swal2-title):not(.swal2-html-container):not(.swal2-timer-progress-bar) {
        display: none !important;
    }
    
    /* Force only essential elements to be visible */
    .swal2-popup {
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
        justify-content: center !important;
        text-align: center !important;
    }
    
    .swal2-popup > *:not(.swal2-icon):not(.swal2-title):not(.swal2-html-container):not(.swal2-timer-progress-bar) {
        display: none !important;
    }
    
    /* Ensure clean modal structure */
    .swal2-container {
        padding: 0 !important;
    }
    
    .swal2-popup {
        margin: 0 !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3) !important;
    }
    
    .form-group {
        animation: fadeInUp 0.6s ease-out forwards;
    }
    
    .form-group:nth-child(1) { animation-delay: 0.1s; }
    .form-group:nth-child(2) { animation-delay: 0.2s; }
    .form-group:nth-child(3) { animation-delay: 0.3s; }
    .form-group:nth-child(4) { animation-delay: 0.4s; }
    .form-group:nth-child(5) { animation-delay: 0.5s; }
    .form-group:nth-child(6) { animation-delay: 0.6s; }
    .form-group:nth-child(7) { animation-delay: 0.7s; }
`;
document.head.appendChild(style);
</script>
@endpush 