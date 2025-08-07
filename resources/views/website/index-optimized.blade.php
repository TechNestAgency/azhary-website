@extends('website.layouts.app')

@section('title', 'Azhary Academy - Online Quran & Islamic Studies for French Speakers')
@section('meta_description', 'Learn Quran recitation, tajweed, Arabic language, and Islamic studies online with native French-speaking teachers. Personalized learning for all levels.')
@section('meta_keywords', 'Quran online, Islamic studies, Arabic language, French Quran teachers, tajweed, Quran memorization, Islamic education, online Islamic classes')
@section('og_image', asset('website_assets/img/hero-main.png'))

@push('styles')
<link rel="preload" href="{{ asset('website_assets/css/optimized.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
@endpush

@section('content')
<!-- Hero Section with Optimized Images -->
<section id="hero" class="hero section p-0" style="background: url('{{ asset('hero-back.jpg') }}') no-repeat center center; background-size: cover; position: relative;">
  <!-- Transparent Overlay -->
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color:rgb(2, 37, 108); opacity: 0.88;"></div>
  
  <!-- Carousel Content -->
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" style="position: relative; z-index: 2;">
    <div class="carousel-inner pt-5">
      <!-- Slide 1: Welcome -->
      <div class="carousel-item active">
        <div class="container">
          <div class="row align-items-center flex-column flex-lg-row" style="min-height: 560px;">
            <!-- Optimized Image with lazy loading -->
            <div class="col-12 col-lg-6 text-center mb-4 mb-lg-0">
              <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400'%3E%3Crect width='400' height='400' fill='%23f0f0f0'/%3E%3C/svg%3E" 
                   data-src="{{ asset('presenting.png') }}" 
                   alt="Welcome to Azhary Academy - Online Islamic Education" 
                   class="img-fluid lazy" 
                   style="max-height: 400px;"
                   loading="lazy">
            </div>
            <!-- Welcome Content -->
            <div class="col-12 col-lg-6 text-white text-center text-lg-start">
              <h1 class="display-5 fw-bold" style="color: white; letter-spacing: 2px; margin-bottom: 1.5rem;">
                {{ __('website.Welcome to Azhary Academy') }}
              </h1>
              <p class="lead mb-4">
                {{ __('website.Experience personalized Quran and Islamic education with native French-speaking teachers') }}
              </p>
              <a href="{{ route('enroll.show') }}" class="btn btn-primary btn-lg" aria-label="{{ __('website.Start your Quranic journey today') }}">
                {{ __('website.Enroll Now') }}
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Slide 2: Interactive Learning -->
      <div class="carousel-item">
        <div class="container">
          <div class="row align-items-center flex-column flex-lg-row" style="min-height: 560px;">
            <div class="col-12 col-lg-6 text-center mb-4 mb-lg-0">
              <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400'%3E%3Crect width='400' height='400' fill='%23f0f0f0'/%3E%3C/svg%3E" 
                   data-src="{{ asset('man2.png') }}" 
                   alt="Interactive Online Learning Platform" 
                   class="img-fluid lazy" 
                   style="max-height: 400px;"
                   loading="lazy">
            </div>
            <div class="col-12 col-lg-6 text-white text-center text-lg-start">
              <h2 class="mb-4" style="color: #36b6e7; font-weight: bold;">
                {{ __('website.Interactive Online Learning') }}
              </h2>
              <p class="mb-4" style="font-size: 1.2rem;">
                {{ __('website.Experience our state-of-the-art virtual classroom designed specifically for Quranic education. Learn from qualified teachers through interactive sessions, real-time feedback, and personalized attention, all from the comfort of your home.') }}
              </p>
              <a href="{{ route('enroll.show') }}" class="btn btn-primary btn-lg">
                {{ __('website.Start Learning Today') }}
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Slide 3: French Community -->
      <div class="carousel-item">
        <div class="container">
          <div class="row align-items-center flex-column flex-lg-row" style="min-height: 560px;">
            <div class="col-12 col-lg-6 text-center mb-4 mb-lg-0">
              <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400'%3E%3Crect width='400' height='400' fill='%23f0f0f0'/%3E%3C/svg%3E" 
                   data-src="{{ asset('man3.png') }}" 
                   alt="Join Our French-Speaking Community" 
                   class="img-fluid lazy" 
                   style="max-height: 400px;"
                   loading="lazy">
            </div>
            <div class="col-12 col-lg-6 text-white text-center text-lg-start">
              <h2 class="mb-4" style="color: #36b6e7; font-weight: bold;">
                {{ __('website.Join Our French-Speaking Community') }}
              </h2>
              <p class="mb-4" style="font-size: 1.2rem;">
                {{ __('website.Connect with fellow French-speaking Muslims worldwide in our supportive learning environment. Our native French-speaking teachers ensure you understand every aspect of your Islamic education in your preferred language.') }}
              </p>
              <a href="{{ route('enroll.show') }}" class="btn btn-primary btn-lg">
                {{ __('website.Join Our Community') }}
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" aria-label="Previous slide">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" aria-label="Next slide">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<!-- Why Choose Section with Structured Data -->
<section id="why-choose" class="why-choose section py-5" itemscope itemtype="https://schema.org/Service">
  <div class="container">
    <div class="text-center mb-5 islamic-section-header">
      <h2 itemprop="name">
        ✨ {{ __('website.why_choose_title') }}
      </h2>
      <p class="lead" itemprop="description">{{ __('website.why_choose_subtitle') }}</p>
    </div>
    
    <div class="row g-4 justify-content-center">
      <!-- Individual Courses -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white islamic-card" itemprop="hasOfferCatalog" itemscope itemtype="https://schema.org/Offer">
          <div class="mb-3" style="font-size:2rem;" aria-hidden="true">👩‍🏫</div>
          <h4 class="mb-2 text-success" itemprop="name">{{ __('website.individual_courses_title') }}</h4>
          <p itemprop="description">{{ __('website.individual_courses_desc') }}</p>
        </div>
      </div>
      
      <!-- Flexible Hours -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white islamic-card">
          <div class="mb-3" style="font-size:2rem;" aria-hidden="true">🕒</div>
          <h4 class="mb-2 text-primary">{{ __('website.flexible_hours_title') }}</h4>
          <p>{{ __('website.flexible_hours_desc') }}</p>
        </div>
      </div>
      
      <!-- Monthly Reports -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white islamic-card">
          <div class="mb-3" style="font-size:2rem;" aria-hidden="true">📊</div>
          <h4 class="mb-2 text-purple">{{ __('website.monthly_reports_title') }}</h4>
          <p>{{ __('website.monthly_reports_desc') }}</p>
        </div>
      </div>
      
      <!-- Games & Activities -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
        <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white islamic-card">
          <div class="mb-3" style="font-size:2rem;" aria-hidden="true">🎮</div>
          <h4 class="mb-2 text-warning">{{ __('website.games_activities_title') }}</h4>
          <p>{{ __('website.games_activities_desc') }}</p>
        </div>
      </div>
      
      <!-- Recorded Lessons -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
        <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white islamic-card">
          <div class="mb-3" style="font-size:2rem;" aria-hidden="true">🎧</div>
          <h4 class="mb-2 text-danger">{{ __('website.recorded_lessons_title') }}</h4>
          <p>{{ __('website.recorded_lessons_desc') }}</p>
        </div>
      </div>
      
      <!-- Certified Teachers -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
        <div class="feature-card h-100 text-center p-4 shadow-sm rounded-4 bg-white islamic-card">
          <div class="mb-3" style="font-size:2rem;" aria-hidden="true">🎓</div>
          <h4 class="mb-2 text-success">{{ __('website.certified_teachers_title') }}</h4>
          <p>{{ __('website.certified_teachers_desc') }}</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Statistics Section with Live Counters -->
<section id="statistics" class="statistics-section py-5" itemscope itemtype="https://schema.org/Organization">
  <div class="container position-relative" style="z-index: 2;">
    <div class="text-center mb-5">
      <h2 class="text-white display-4 fw-bold mb-3" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
        🏆 {{ __('website.Our Achievements') }}
      </h2>
      <p class="text-white-50 lead" style="font-size: 1.2rem;">
        {{ __('website.Join thousands of students who have transformed their Quranic journey with us') }}
      </p>
    </div>

    <div class="row g-4 justify-content-center">
      <!-- Students Counter -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="stat-card text-center p-4">
          <div class="stat-icon mb-3" aria-hidden="true">
            <i class="bi bi-people-fill"></i>
          </div>
          <div class="stat-number mb-2">
            <span class="counter" data-target="2500" data-live="true" data-live-increment="3">0</span>+
          </div>
          <div class="stat-label">{{ __('website.Happy Students') }}</div>
          <div class="stat-description">{{ __('website.Enrolled worldwide') }}</div>
        </div>
      </div>

      <!-- Teachers Counter -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="stat-card text-center p-4">
          <div class="stat-icon mb-3" aria-hidden="true">
            <i class="bi bi-person-workspace"></i>
          </div>
          <div class="stat-number mb-2">
            <span class="counter" data-target="85" data-live="true" data-live-increment="1">0</span>+
          </div>
          <div class="stat-label">{{ __('website.Expert Teachers') }}</div>
          <div class="stat-description">{{ __('website.Certified instructors') }}</div>
        </div>
      </div>

      <!-- Hours Conducted Counter -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="stat-card text-center p-4">
          <div class="stat-icon mb-3" aria-hidden="true">
            <i class="bi bi-clock-history"></i>
          </div>
          <div class="stat-number mb-2">
            <span class="counter" data-target="15000" data-live="true" data-live-increment="25">0</span>+
          </div>
          <div class="stat-label">{{ __('website.Hours Conducted') }}</div>
          <div class="stat-description">{{ __('website.Quranic lessons') }}</div>
        </div>
      </div>

      <!-- Countries Counter -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="stat-card text-center p-4">
          <div class="stat-icon mb-3" aria-hidden="true">
            <i class="bi bi-globe"></i>
          </div>
          <div class="stat-number mb-2">
            <span class="counter" data-target="45" data-live="true" data-live-increment="1">0</span>+
          </div>
          <div class="stat-label">{{ __('website.Countries') }}</div>
          <div class="stat-description">{{ __('website.Worldwide reach') }}</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="about section" itemscope itemtype="https://schema.org/AboutPage">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <p class="who-we-are">{{ __('website.Who We Are') }}</p>
        <h3 itemprop="name">{{ __('website.Bringing Islamic Knowledge to French Speakers Worldwide') }}</h3>
        <p class="fst-italic" itemprop="description">
          {{ __('website.Azhary Academy is dedicated to making Quranic education and Islamic studies accessible to French-speaking Muslims around the world through personalized online learning.') }}
        </p>
        <ul>
          <li><i class="bi bi-check-circle" aria-hidden="true"></i> <span>{{ __('website.Native French-speaking teachers with deep knowledge of Islamic sciences') }}</span></li>
          <li><i class="bi bi-check-circle" aria-hidden="true"></i> <span>{{ __('website.Personalized curriculum tailored to each student\'s level and goals') }}</span></li>
          <li><i class="bi bi-check-circle" aria-hidden="true"></i> <span>{{ __('website.Comprehensive courses in Quran recitation, memorization, tajweed') }}</span></li>
          <li><i class="bi bi-check-circle" aria-hidden="true"></i> <span>{{ __('website.Flexible scheduling to accommodate students across different time zones') }}</span></li>
          <li><i class="bi bi-check-circle" aria-hidden="true"></i> <span>{{ __('website.Engaging teaching methods that make learning enjoyable and effective') }}</span></li>
        </ul>
        <a href="#services" class="read-more" aria-label="{{ __('website.Explore our comprehensive course offerings') }}">
          <span>{{ __('website.Explore Our Courses') }}</span>
          <i class="bi bi-arrow-right" aria-hidden="true"></i>
        </a>
      </div>
      
      <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 400'%3E%3Crect width='600' height='400' fill='%23f0f0f0'/%3E%3C/svg%3E" 
             data-src="{{asset('about.png')}}" 
             class="img-fluid rounded-4 shadow lazy" 
             alt="Online Islamic Class - Azhary Academy"
             loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- Services Section with Structured Data -->
<section id="services" class="services section" itemscope itemtype="https://schema.org/Service">
  <div class="container section-title islamic-section-header" data-aos="fade-up">
    <h2 itemprop="name">{{ __('website.Our Courses') }}</h2>
    <p class="mt-4" itemprop="description">{{ __('website.Comprehensive Islamic education tailored for French-speaking students from beginners to advanced levels') }}</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center g-5">
      <!-- Quran Course -->
      <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
        <div class="service-item" itemprop="hasOfferCatalog" itemscope itemtype="https://schema.org/Offer">
          <div class="service-icon" aria-hidden="true">
            <i class="bi bi-book-half"></i>
          </div>
          <div class="service-content">
            <h3 itemprop="name">{{ __('website.Quran (Recitation, Tajweed & Memorization)') }}</h3>
            <p itemprop="description">{{ __('website.Comprehensive Quran learning program covering recitation, tajweed rules, and memorization techniques. Our native French-speaking instructors guide you through proper pronunciation, tajweed rules, and systematic memorization methods.') }}</p>
            <a href="{{ route('website.courses.quran') }}" class="service-link" aria-label="{{ __('website.Learn more about our Quran course') }}">
              <span>{{ __('website.Learn More') }}</span>
              <i class="bi bi-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Arabic Language Course -->
      <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
        <div class="service-item" itemprop="hasOfferCatalog" itemscope itemtype="https://schema.org/Offer">
          <div class="service-icon" aria-hidden="true">
            <i class="bi bi-translate"></i>
          </div>
          <div class="service-content">
            <h3 itemprop="name">{{ __('website.Arabic Language') }}</h3>
            <p itemprop="description">{{ __('website.Master the Arabic language with native speakers - from basic conversation to advanced grammar and cultural understanding. Learn Modern Standard Arabic and colloquial dialects with authentic cultural context.') }}</p>
            <a href="{{ route('website.courses.arabic-language') }}" class="service-link" aria-label="{{ __('website.Learn more about our Arabic language course') }}">
              <span>{{ __('website.Learn More') }}</span>
              <i class="bi bi-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Islamic Studies Course -->
      <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
        <div class="service-item" itemprop="hasOfferCatalog" itemscope itemtype="https://schema.org/Offer">
          <div class="service-icon" aria-hidden="true">
            <i class="bi bi-moon-stars"></i>
          </div>
          <div class="service-content">
            <h3 itemprop="name">{{ __('website.Islamic Studies') }}</h3>
            <p itemprop="description">{{ __('website.Explore the fundamentals of Islam including Aqeedah (beliefs), Fiqh (jurisprudence), and Seerah (biography of Prophet Muhammad ﷺ). Our curriculum provides a solid foundation in Islamic knowledge delivered in French.') }}</p>
            <a href="{{ route('website.courses.islamic-studies') }}" class="service-link" aria-label="{{ __('website.Learn more about our Islamic studies course') }}">
              <span>{{ __('website.Learn More') }}</span>
              <i class="bi bi-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Ijazah Course -->
      <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
        <div class="service-item" itemprop="hasOfferCatalog" itemscope itemtype="https://schema.org/Offer">
          <div class="service-icon" aria-hidden="true">
            <i class="bi bi-award"></i>
          </div>
          <div class="service-content">
            <h3 itemprop="name">{{ __('website.Ijazah (Qur\'an Certification)') }}</h3>
            <p itemprop="description">{{ __('website.Advanced program for those seeking formal authorization (Ijazah) in Quran recitation. Study under certified scholars and join the unbroken chain of narration tracing back to the Prophet Muhammad ﷺ through our rigorous certification program.') }}</p>
            <a href="{{ route('website.courses.ijazah') }}" class="service-link" aria-label="{{ __('website.Learn more about our Ijazah certification program') }}">
              <span>{{ __('website.Learn More') }}</span>
              <i class="bi bi-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Section -->
<section id="cta" class="cta-section py-5" style="background: linear-gradient(135deg, var(--islamic-blue) 0%, var(--islamic-navy) 100%);">
  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 class="text-white mb-4">{{ __('website.Ready to Start Your Quranic Journey?') }}</h2>
        <p class="text-white-50 mb-4 lead">{{ __('website.Join thousands of students worldwide and begin your Islamic education today') }}</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
          <a href="{{ route('enroll.show') }}" class="btn btn-primary btn-lg px-5" aria-label="{{ __('website.Enroll now and start learning') }}">
            {{ __('website.Enroll Now') }}
          </a>
          <a href="{{ route('website.teachers.index') }}" class="btn btn-outline-light btn-lg px-5" aria-label="{{ __('website.Meet our qualified teachers') }}">
            {{ __('website.Meet Our Teachers') }}
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script src="{{ asset('website_assets/js/optimized.js') }}" defer></script>
@endpush 