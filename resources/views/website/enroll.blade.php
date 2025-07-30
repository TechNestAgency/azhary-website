@extends('website.layouts.app')

@section('title', __('website.Start Arabic today with a free course! - Azhary Academy'))
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
}

.teacher-slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
    display: flex;
    align-items: center;
    justify-content: center;
    max-height: 600px;
}

.teacher-slide.active {
    opacity: 1;
}

.teacher-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: relative;
    max-height: 600px;
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
                        <img src="{{ asset($teacher->photo) }}" alt="{{ $teacher->name }}" class="teacher-image">
                    @else
                        <div class="teacher-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-person" style="font-size: 8rem; color: white; opacity: 0.3;"></i>
                        </div>
                    @endif
                    <div class="teacher-overlay">
                        <h2 class="teacher-name" style="color: white;">{{ $teacher->name }}</h2>
                        <p class="teacher-description">{!! $teacher->short_description !!}</p>
                        <a href="{{ route('website.teachers.show', $teacher) }}" class="learn-more-btn">{{ __('website.Learn more') }}</a>
                    </div>
                </div>
                @endforeach
            </div>
            
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

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form class="enrollment-form" action="{{ route('enroll.store') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label class="form-label">{{ __('website.Name') }}: <span class="required">*</span></label>
                    <input type="text" name="name" class="form-control" placeholder="{{ __('website.Name') }}" required value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">{{ __('website.Email') }}: <span class="required">*</span></label>
                    <input type="email" name="email" class="form-control" placeholder="{{ __('website.Email') }}" required value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">{{ __('website.Whatsapp / Phone Number') }} <span class="required">*</span></label>
                    <div class="phone-input-group">
                        <div class="flag-icon"></div>
                        <input type="tel" name="phone" class="form-control" placeholder="{{ __('website.Number with Country Code') }}" required value="{{ old('phone') }}">
                    </div>
                    @error('phone')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="date-time-group">
                        <div>
                            <label class="form-label">{{ __('website.Date') }}:</label>
                            <input type="date" name="date" class="form-control" value="{{ old('date') }}">
                            @error('date')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label class="form-label">{{ __('website.Time') }}:</label>
                            <input type="time" name="time" class="form-control" value="{{ old('time') }}">
                            @error('time')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">{{ __('website.Your level in Arabic') }} <span class="required">*</span></label>
                    <select name="arabic_level" class="form-control" required>
                        <option value="">{{ __('website.Select your level') }}</option>
                        <option value="beginner" {{ old('arabic_level') == 'beginner' ? 'selected' : '' }}>{{ __('website.I have some notions') }}</option>
                        <option value="intermediate" {{ old('arabic_level') == 'intermediate' ? 'selected' : '' }}>{{ __('website.Intermediate') }}</option>
                        <option value="advanced" {{ old('arabic_level') == 'advanced' ? 'selected' : '' }}>{{ __('website.Advanced') }}</option>
                        <option value="native" {{ old('arabic_level') == 'native' ? 'selected' : '' }}>{{ __('website.Native speaker') }}</option>
                    </select>
                    @error('arabic_level')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">{{ __('website.The course you are interested in') }}: <span class="required">*</span></label>
                    <select name="course_interest" class="form-control" required>
                        <option value="">{{ __('website.Select a course') }}</option>
                        <option value="quran_recitation" {{ old('course_interest') == 'quran_recitation' ? 'selected' : '' }}>{{ __('website.Recitation of the Quran') }}</option>
                        <option value="tajweed" {{ old('course_interest') == 'tajweed' ? 'selected' : '' }}>{{ __('website.Tajweed Rules') }}</option>
                        <option value="arabic_grammar" {{ old('course_interest') == 'arabic_grammar' ? 'selected' : '' }}>{{ __('website.Arabic Grammar') }}</option>
                        <option value="islamic_studies" {{ old('course_interest') == 'islamic_studies' ? 'selected' : '' }}>{{ __('website.Islamic Studies') }}</option>
                        <option value="quran_memorization" {{ old('course_interest') == 'quran_memorization' ? 'selected' : '' }}>{{ __('website.Quran Memorization') }}</option>
                    </select>
                    @error('course_interest')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">{{ __('website.Message (precision)') }}</label>
                    <textarea name="message" class="form-control" rows="4" placeholder="{{ __('website.Tell us more about your learning goals...') }}">{{ old('message') }}</textarea>
                    @error('message')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="submit-btn">{{ __('website.Start Learning Today') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.teacher-slide');
    const dots = document.querySelectorAll('.slider-dot');
    let currentSlide = 0;

    function showSlide(index) {
        // Hide all slides
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        // Show current slide
        slides[index].classList.add('active');
        dots[index].classList.add('active');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    // Add click event to dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide = index;
            showSlide(currentSlide);
        });
    });

    // Auto-advance slides every 5 seconds
    setInterval(nextSlide, 5000);

    // Add form animations
    const formInputs = document.querySelectorAll('.form-control');
    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'scale(1.02)';
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'scale(1)';
        });
    });

    // Add loading animation to submit button
    const submitBtn = document.querySelector('.submit-btn');
    const form = document.querySelector('.enrollment-form');
    
    form.addEventListener('submit', function(e) {
        // Show loading state
        submitBtn.innerHTML = '<i class="bi bi-hourglass-split"></i> {{ __("website.Processing...") }}';
        submitBtn.style.pointerEvents = 'none';
        submitBtn.disabled = true;
        
        // Add loading class for styling
        submitBtn.classList.add('loading');
    });

    // Auto-hide alerts after 5 seconds
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            if (alert.parentNode) {
                alert.style.opacity = '0';
                setTimeout(() => {
                    if (alert.parentNode) {
                        alert.remove();
                    }
                }, 300);
            }
        }, 5000);
    });

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