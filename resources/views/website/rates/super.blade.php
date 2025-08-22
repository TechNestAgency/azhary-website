@extends('website.layouts.app')

@section('title', __('website.Super Teachers') . ' - Azhary Academy')
@section('meta_description', __('website.Choose from our super teachers packages for premium Quran learning experience'))

@push('styles')
<style>
    :root {
      --heading-color: #13223F;
      --accent-color: #0d7adb;
      --islamic-gold: #d4af37;
      --islamic-green: #228b22;
      --super-purple: #8b5cf6;
    }

    .page-header {
      background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 50%, #6d28d9 100%);
      color: white;
      padding: 60px 0;
      margin-bottom: 50px;
      position: relative;
      overflow: hidden;
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
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .page-subtitle {
      font-size: 1.2rem;
      opacity: 0.9;
      max-width: 600px;
      margin: 0 auto;
    }

    .teacher-intro {
      background: #f8f9fa;
      padding: 40px 0;
      margin-bottom: 50px;
    }

    .teacher-intro h2 {
      color: var(--heading-color);
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .teacher-intro p {
      font-size: 1.1rem;
      color: #6c757d;
      max-width: 800px;
      margin: 0 auto;
    }

    .pricing-grid {
      margin-bottom: 60px;
    }

    .pricing-card {
      background: white;
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      height: 100%;
      position: relative;
      overflow: hidden;
      border: 2px solid transparent;
    }

    .pricing-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(139, 92, 246, 0.1), transparent);
      transition: left 0.5s ease;
    }

    .pricing-card:hover::before {
      left: 100%;
    }

    .pricing-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(139, 92, 246, 0.2);
      border-color: var(--super-purple);
    }

    .package-name {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--heading-color);
      margin-bottom: 10px;
    }

    .package-subtitle {
      color: #6c757d;
      font-size: 0.9rem;
      margin-bottom: 20px;
    }

    .price-container {
      text-align: center;
      margin-bottom: 25px;
    }

    .original-price {
      font-size: 1.2rem;
      color: #6c757d;
      text-decoration: line-through;
      margin-bottom: 5px;
    }

    .current-price {
      font-size: 2.5rem;
      font-weight: 800;
      color: var(--super-purple);
      margin-bottom: 5px;
    }

    .currency {
      font-size: 1.5rem;
      font-weight: 600;
    }

    .savings-badge {
      background: linear-gradient(135deg, var(--super-purple), #7c3aed);
      color: white;
      padding: 5px 15px;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 600;
      display: inline-block;
      margin-bottom: 20px;
    }

    .features-list {
      list-style: none;
      padding: 0;
      margin-bottom: 30px;
    }

    .features-list li {
      padding: 8px 0;
      display: flex;
      align-items: center;
      font-size: 0.95rem;
      color: #495057;
    }

    .features-list li i {
      margin-right: 10px;
      color: var(--super-purple);
      font-size: 1.1rem;
    }

    .enroll-btn {
      background: linear-gradient(135deg, var(--super-purple), #7c3aed);
      color: white;
      border: none;
      padding: 12px 30px;
      border-radius: 25px;
      font-weight: 600;
      font-size: 1rem;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-block;
      width: 100%;
      text-align: center;
    }

    .enroll-btn:hover {
      background: linear-gradient(135deg, #7c3aed, var(--super-purple));
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(139, 92, 246, 0.3);
    }

    .info-section {
      background: #f8f9fa;
      padding: 40px 0;
      margin-top: 60px;
    }

    .info-card {
      background: white;
      border-radius: 15px;
      padding: 25px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
    }

    .info-card h4 {
      color: var(--heading-color);
      font-weight: 600;
      margin-bottom: 15px;
    }

    .info-card p {
      color: #6c757d;
      line-height: 1.6;
    }

    .cta-section {
      background: linear-gradient(135deg, var(--super-purple), #7c3aed);
      color: white;
      padding: 60px 0;
      text-align: center;
    }

    .cta-section h3 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .cta-section p {
      font-size: 1.1rem;
      opacity: 0.9;
      margin-bottom: 2rem;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }

    .cta-btn {
      background: white;
      color: var(--super-purple);
      border: none;
      padding: 15px 40px;
      border-radius: 30px;
      font-weight: 600;
      font-size: 1.1rem;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-block;
    }

    .cta-btn:hover {
      background: var(--islamic-gold);
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(212, 175, 55, 0.3);
    }

    .premium-badge {
      position: absolute;
      top: 15px;
      right: 15px;
      background: linear-gradient(135deg, var(--super-purple), #7c3aed);
      color: white;
      padding: 5px 15px;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 600;
      z-index: 10;
    }

    @media (max-width: 768px) {
      .page-title {
        font-size: 2rem;
      }
      
      .page-subtitle {
        font-size: 1rem;
      }
      
      .teacher-intro h2 {
        font-size: 2rem;
      }
      
      .current-price {
        font-size: 2rem;
      }
      
      .cta-section h3 {
        font-size: 2rem;
      }
    }
</style>
@endpush

@section('content')
<div class="pricing-page" style="padding-top: 140px;">
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">⚡ {{ __('website.Super Teachers') }} ⚡</h1>
                    <p class="page-subtitle">{{ __('website.Experience premium Quran learning with our most qualified and experienced teachers. Advanced methodology and personalized attention guaranteed.') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Teacher Introduction -->
    <section class="teacher-intro">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>{{ __('website.Our Super Teachers') }}</h2>
                    <p>{{ __('website.Our Super Teachers are highly qualified instructors with advanced degrees from prestigious Islamic universities, extensive teaching experience, and specialized training in modern educational methodologies. They provide premium learning experiences with advanced techniques and personalized attention.') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Packages -->
    <section class="pricing-grid">
        <div class="container">
            <div class="row g-4">
                <!-- Trial Pack -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <div class="sale-badge">SALE</div>
                        <h3 class="package-name">🪴 {{ __('website.Trial Pack') }}</h3>
                        <p class="package-subtitle">{{ __('website.to get started') }}</p>
                        
                        <div class="price-container">
                            <div class="current-price">
                                <span class="currency">€</span>48
                            </div>
                            <div class="savings-badge">{{ __('website.You save') }} €0</div>
                        </div>

                        <ul class="features-list">
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.4 courses') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.1 hour per course') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Personalized accompaniment') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Free choice') }} ({{ __('website.Arabic, Quran, Tajweed, Islamic Studies') }})</li>
                        </ul>

                        <a href="{{ route('enroll.show') }}" class="enroll-btn">{{ __('website.Book Now') }} !</a>
                    </div>
                </div>

                <!-- Hafiz Pack -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card">
                        <div class="sale-badge">SALE</div>
                        <h3 class="package-name">😁 {{ __('website.Hafiz Pack') }}</h3>
                        <p class="package-subtitle">{{ __('website.For advanced users') }}</p>
                        
                        <div class="price-container">
                            <div class="original-price">€96</div>
                            <div class="current-price">
                                <span class="currency">€</span>92
                            </div>
                            <div class="savings-badge">{{ __('website.You save') }} €4</div>
                        </div>

                        <ul class="features-list">
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.8 courses') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.1 hour per course') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Personalized accompaniment') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Free choice') }} ({{ __('website.Arabic, Quran, Tajweed, Islamic Studies') }})</li>
                        </ul>

                        <a href="{{ route('enroll.show') }}" class="enroll-btn">{{ __('website.Book Now') }} !</a>
                    </div>
                </div>

                <!-- Mujtahid Pack -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        <div class="sale-badge">SALE</div>
                        <h3 class="package-name">😎 {{ __('website.Mujtahid Pack') }}</h3>
                        <p class="package-subtitle">{{ __('website.The best choice') }}</p>
                        
                        <div class="price-container">
                            <div class="original-price">€144</div>
                            <div class="current-price">
                                <span class="currency">€</span>134
                            </div>
                            <div class="savings-badge">{{ __('website.You save') }} €10</div>
                        </div>

                        <ul class="features-list">
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.12 courses') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.1 hour per course') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Personalized accompaniment') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Free choice') }} ({{ __('website.Arabic, Quran, Tajweed, Islamic Studies') }})</li>
                        </ul>

                        <a href="{{ route('enroll.show') }}" class="enroll-btn">{{ __('website.Book Now') }} !</a>
                    </div>
                </div>

                <!-- Bronze Pack -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="pricing-card">
                        <div class="sale-badge">SALE</div>
                        <h3 class="package-name">🥉 {{ __('website.Bronze Pack') }}</h3>
                        <p class="package-subtitle">{{ __('website.For advanced users') }}</p>
                        
                        <div class="price-container">
                            <div class="original-price">€192</div>
                            <div class="current-price">
                                <span class="currency">€</span>175
                            </div>
                            <div class="savings-badge">{{ __('website.You save') }} €17</div>
                        </div>

                        <ul class="features-list">
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.16 courses') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.1 hour per course') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Personalized accompaniment') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Free choice') }} ({{ __('website.Arabic, Quran, Tajweed, Islamic Studies') }})</li>
                        </ul>

                        <a href="{{ route('enroll.show') }}" class="enroll-btn">{{ __('website.Book Now') }} !</a>
                    </div>
                </div>

                <!-- Silver Pack -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="pricing-card">
                        <div class="sale-badge">SALE</div>
                        <h3 class="package-name">🥈 {{ __('website.Silver Pack') }}</h3>
                        <p class="package-subtitle">{{ __('website.The most popular') }}</p>
                        
                        <div class="price-container">
                            <div class="original-price">€288</div>
                            <div class="current-price">
                                <span class="currency">€</span>259.99
                            </div>
                            <div class="savings-badge">{{ __('website.You save') }} €28</div>
                        </div>

                        <ul class="features-list">
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.24 courses') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.1 hour per course') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Personalized accompaniment') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Free choice') }} ({{ __('website.Arabic, Quran, Tajweed, Islamic Studies') }})</li>
                        </ul>

                        <a href="{{ route('enroll.show') }}" class="enroll-btn">{{ __('website.Book Now') }} !</a>
                    </div>
                </div>

                <!-- Gold Pack -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="pricing-card">
                        <div class="sale-badge">SALE</div>
                        <h3 class="package-name">🥇 {{ __('website.Gold Pack') }}</h3>
                        <p class="package-subtitle">{{ __('website.For advanced users') }}</p>
                        
                        <div class="price-container">
                            <div class="original-price">€576</div>
                            <div class="current-price">
                                <span class="currency">€</span>499.99
                            </div>
                            <div class="savings-badge">{{ __('website.You save') }} €76</div>
                        </div>

                        <ul class="features-list">
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.48 courses') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.1 hour per course') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Personalized accompaniment') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Free choice') }} ({{ __('website.Arabic, Quran, Tajweed, Islamic Studies') }})</li>
                        </ul>

                        <a href="{{ route('enroll.show') }}" class="enroll-btn">{{ __('website.Book Now') }} !</a>
                    </div>
                </div>

                <!-- Diamond Pack -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="pricing-card">
                        <div class="sale-badge">SALE</div>
                        <h3 class="package-name">🌟 {{ __('website.Diamond Pack') }}</h3>
                        <p class="package-subtitle">{{ __('website.The most economical') }}</p>
                        
                        <div class="price-container">
                            <div class="original-price">€1200</div>
                            <div class="current-price">
                                <span class="currency">€</span>999.99
                            </div>
                            <div class="savings-badge">{{ __('website.You save') }} €200</div>
                        </div>

                        <ul class="features-list">
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.100 courses') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.1 hour per course') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Personalized accompaniment') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Free choice') }} ({{ __('website.Arabic, Quran, Tajweed, Islamic Studies') }})</li>
                        </ul>

                        <a href="{{ route('enroll.show') }}" class="enroll-btn">{{ __('website.Book Now') }} !</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Information -->
    <section class="info-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h3>{{ __('website.Here are our different Super Teacher packages to learn Arabic & Quran & Tajweed & Islamic Studies online.') }}</h3>
                    <p class="lead">{{ __('website.We offer 1 hour of course at €15 for people who do not want to take a package. Everything is adaptable according to your level.') }}</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-card">
                        <h4>{{ __('website.What makes Super Teachers different?') }}</h4>
                        <p>{{ __('website.Our Super Teachers have advanced degrees from prestigious Islamic universities, extensive teaching experience, and specialized training in modern educational methodologies. They provide premium learning experiences with advanced techniques and personalized attention.') }}</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="info-card">
                        <h4>{{ __('website.What additional features do I get?') }}</h4>
                        <p>{{ __('website.Super Teacher packages include advanced teaching methods, progress tracking systems, priority scheduling, exclusive study materials, and enhanced support. You also get access to premium learning resources and personalized study plans.') }}</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="info-card">
                        <h4>{{ __('website.Can I upgrade from Confirmed to Super Teachers?') }}</h4>
                        <p>{{ __('website.Yes! You can upgrade your package to Super Teachers at any time. The difference in price will be calculated proportionally, and you\'ll immediately gain access to all premium features and advanced teaching methods.') }}</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="info-card">
                        <h4>{{ __('website.What is the progress tracking system?') }}</h4>
                        <p>{{ __('website.Our advanced progress tracking system monitors your learning journey, provides detailed reports on your improvement, identifies areas for focus, and helps create personalized study plans to maximize your learning efficiency.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3>{{ __('website.Ready for Premium Learning Experience?') }}</h3>
                    <p>{{ __('website.Choose the perfect Super Teacher package for your needs and experience the highest quality Quranic education with our most qualified instructors.') }}</p>
                    <a href="{{ route('enroll.show') }}" class="cta-btn">{{ __('website.Enroll Now') }}</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection 