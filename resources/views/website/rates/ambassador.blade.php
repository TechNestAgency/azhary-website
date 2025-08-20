@extends('website.layouts.app')

@section('title', __('website.Ambassador Teachers') . ' - Azhary Academy')
@section('meta_description', __('website.Choose from our ambassador teachers packages for the ultimate Quran learning experience'))

@push('styles')
<style>
    :root {
      --heading-color: #13223F;
      --accent-color: #0d7adb;
      --islamic-gold: #d4af37;
      --islamic-green: #228b22;
      --ambassador-gold: #ffd700;
    }

    .page-header {
      background: linear-gradient(135deg, #ffd700 0%, #ffed4e 50%, #ffd700 100%);
      color: #13223F;
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
        radial-gradient(circle at 25% 25%, rgba(19, 34, 63, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 75% 75%, rgba(19, 34, 63, 0.03) 0%, transparent 50%);
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
      text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
    }

    .page-subtitle {
      font-size: 1.2rem;
      opacity: 0.8;
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
      border: 3px solid transparent;
    }

    .pricing-card::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, rgba(255, 215, 0, 0.05), rgba(255, 215, 0, 0.02));
      border-radius: 20px;
      opacity: 0;
      transition: opacity 0.3s ease;
      pointer-events: none;
      z-index: 1;
    }

    .pricing-card:hover::after {
      opacity: 1;
    }

    .pricing-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(255, 215, 0, 0.2);
      border-color: var(--ambassador-gold);
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
      color: var(--ambassador-gold);
      margin-bottom: 5px;
    }

    .currency {
      font-size: 1.5rem;
      font-weight: 600;
    }

    .savings-badge {
      background: linear-gradient(135deg, var(--ambassador-gold), #ffed4e);
      color: #13223F;
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
      color: var(--ambassador-gold);
      font-size: 1.1rem;
    }

    .enroll-btn {
      background: linear-gradient(135deg, var(--ambassador-gold), #ffed4e);
      color: #13223F;
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
      position: relative;
      z-index: 50;
      cursor: pointer;
      pointer-events: auto;
    }

    .enroll-btn:hover {
      background: linear-gradient(135deg, #ffed4e, var(--ambassador-gold));
      color: #13223F;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(255, 215, 0, 0.3);
      z-index: 100;
    }

    .enroll-btn:active {
      transform: translateY(0);
      box-shadow: 0 2px 8px rgba(255, 215, 0, 0.4);
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
      background: linear-gradient(135deg, var(--ambassador-gold), #ffed4e);
      color: #13223F;
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
      opacity: 0.8;
      margin-bottom: 2rem;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }

    .cta-btn {
      background: #13223F;
      color: white;
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
      background: var(--islamic-green);
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(34, 139, 34, 0.3);
    }

    .exclusive-badge {
      position: absolute;
      top: 15px;
      right: 15px;
      background: linear-gradient(135deg, var(--ambassador-gold), #ffed4e);
      color: #13223F;
      padding: 5px 15px;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 600;
      z-index: 10;
    }

    .vip-badge {
      position: absolute;
      top: 15px;
      left: 15px;
      background: linear-gradient(135deg, #13223F, #1e3a8a);
      color: white;
      padding: 5px 15px;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 600;
      z-index: 10;
    }

    .price-per-hour {
      font-size: 1.2rem;
      color: #6c757d;
      margin-bottom: 10px;
    }

    .pricing-explanation {
      background: rgba(255, 215, 0, 0.1);
      border-radius: 15px;
      padding: 20px;
      border: 1px solid rgba(255, 215, 0, 0.2);
    }

    .example-calculations {
      background: #f8f9fa;
      border-radius: 15px;
      padding: 25px;
      margin-top: 30px;
    }

    .example-calculations h4 {
      color: var(--heading-color);
      font-weight: 600;
      margin-bottom: 20px;
      text-align: center;
    }

    .calculation-card {
      background: white;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    .calculation-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .calculation-card h5 {
      color: var(--heading-color);
      font-weight: 600;
      margin-bottom: 10px;
    }

    .calculation-price {
      font-size: 2rem;
      font-weight: 800;
      color: var(--ambassador-gold);
    }

    .pricing-note {
      background: rgba(255, 215, 0, 0.1);
      border-radius: 15px;
      padding: 20px;
      border: 1px solid rgba(255, 215, 0, 0.2);
    }

    .faq-section {
      padding: 80px 0;
      background: #f8f9fa;
    }

    .faq-card {
      background: white;
      border-radius: 15px;
      padding: 30px;
      margin-bottom: 30px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      border-left: 4px solid var(--ambassador-gold);
    }

    .faq-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .faq-card h4 {
      color: var(--heading-color);
      font-weight: 600;
      margin-bottom: 15px;
      font-size: 1.2rem;
    }

    .faq-card p {
      color: #6c757d;
      line-height: 1.6;
      margin-bottom: 0;
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
                    <h1 class="page-title">🚀 {{ __('website.Ambassador Teachers') }} 🚀</h1>
                    <p class="page-subtitle">{{ __('website.Experience the ultimate Quran learning with our most prestigious and highly qualified teachers. Exclusive methodology and VIP treatment guaranteed.') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Teacher Introduction -->
    <section class="teacher-intro">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>{{ __('website.Our Ambassador Teachers') }}</h2>
                    <p>{{ __('website.Our Ambassador Teachers are the most prestigious and highly qualified instructors in our network. They are renowned scholars with PhDs from the most prestigious Islamic universities, decades of teaching experience, and are recognized experts in their fields. They provide the ultimate learning experience with exclusive methodologies and VIP treatment.') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Packages -->
    <section class="pricing-grid">
        <div class="container">
            <div class="row g-4">
                <!-- Starter Pack -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <div class="exclusive-badge">Exclusive</div>
                        <div class="card-content" style="position: relative; z-index: 30;">
                            <h3 class="package-name">🪴 {{ __('website.Starter Pack') }}</h3>
                            <p class="package-subtitle">{{ __('website.to get started') }}</p>
                            
                            <div class="price-container">
                                <div class="original-price">€60</div>
                                <div class="current-price">
                                    <span class="currency">€</span>58
                                </div>
                                <div class="savings-badge">{{ __('website.You save') }} €2</div>
                            </div>

                            <ul class="features-list">
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.4 courses') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.1 hour per course') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.VIP personalized accompaniment') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Exclusive teaching methods') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Free choice') }} ({{ __('website.Arabic, Quran, Tajweed, Islamic Studies') }})</li>
                            </ul>

                            <a href="{{ route('enroll.show', ['package' => 'ambassador_starter']) }}" class="enroll-btn">{{ __('website.Book Now') }} !</a>
                        </div>
                    </div>
                </div>

                <!-- Scholar Pack -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card">
                        <div class="exclusive-badge">Exclusive</div>
                        <div class="card-content" style="position: relative; z-index: 30;">
                            <h3 class="package-name">😁 {{ __('website.Scholar Pack') }}</h3>
                            <p class="package-subtitle">{{ __('website.For advanced users') }}</p>
                            
                            <div class="price-container">
                                <div class="original-price">€120</div>
                                <div class="current-price">
                                    <span class="currency">€</span>114
                                </div>
                                <div class="savings-badge">{{ __('website.You save') }} €6</div>
                            </div>

                            <ul class="features-list">
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.8 courses') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.1 hour per course') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.VIP personalized accompaniment') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Exclusive teaching methods') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Free choice') }} ({{ __('website.Arabic, Quran, Tajweed, Islamic Studies') }})</li>
                            </ul>

                            <a href="{{ route('enroll.show', ['package' => 'ambassador_scholar']) }}" class="enroll-btn">{{ __('website.Book Now') }} !</a>
                        </div>
                    </div>
                </div>

                <!-- Expert Pack -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        <div class="exclusive-badge">Exclusive</div>
                        <div class="vip-badge">VIP</div>
                        <div class="card-content" style="position: relative; z-index: 30;">
                            <h3 class="package-name">😎 {{ __('website.Expert Pack') }}</h3>
                            <p class="package-subtitle">{{ __('website.The best choice') }}</p>
                            
                            <div class="price-container">
                                <div class="original-price">€180</div>
                                <div class="current-price">
                                    <span class="currency">€</span>168
                                </div>
                                <div class="savings-badge">{{ __('website.You save') }} €12</div>
                            </div>

                            <ul class="features-list">
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.12 courses') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.1 hour per course') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.VIP personalized accompaniment') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Exclusive teaching methods') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Advanced progress tracking') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Free choice') }} ({{ __('website.Arabic, Quran, Tajweed, Islamic Studies') }})</li>
                            </ul>

                            <a href="{{ route('enroll.show', ['package' => 'ambassador_expert']) }}" class="enroll-btn">{{ __('website.Book Now') }} !</a>
                        </div>
                    </div>
                </div>

                <!-- Master Pack -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="pricing-card">
                        <div class="exclusive-badge">Exclusive</div>
                        <div class="card-content" style="position: relative; z-index: 30;">
                            <h3 class="package-name">🥉 {{ __('website.Master Pack') }}</h3>
                            <p class="package-subtitle">{{ __('website.For advanced users') }}</p>
                            
                            <div class="price-container">
                                <div class="original-price">€240</div>
                                <div class="current-price">
                                    <span class="currency">€</span>220
                                </div>
                                <div class="savings-badge">{{ __('website.You save') }} €20</div>
                            </div>

                            <ul class="features-list">
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.16 courses') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.1 hour per course') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.VIP personalized accompaniment') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Exclusive teaching methods') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Priority scheduling') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Free choice') }} ({{ __('website.Arabic, Quran, Tajweed, Islamic Studies') }})</li>
                            </ul>

                            <a href="{{ route('enroll.show', ['package' => 'ambassador_master']) }}" class="enroll-btn">{{ __('website.Book Now') }} !</a>
                        </div>
                    </div>
                </div>

                <!-- Elite Pack -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="pricing-card">
                        <div class="exclusive-badge">Exclusive</div>
                        <div class="vip-badge">VIP</div>
                        <div class="card-content" style="position: relative; z-index: 30;">
                            <h3 class="package-name">🥈 {{ __('website.Elite Pack') }}</h3>
                            <p class="package-subtitle">{{ __('website.The most popular') }}</p>
                            
                            <div class="price-container">
                                <div class="original-price">€360</div>
                                <div class="current-price">
                                    <span class="currency">€</span>325
                                </div>
                                <div class="savings-badge">{{ __('website.You save') }} €35</div>
                            </div>

                            <ul class="features-list">
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.24 courses') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.1 hour per course') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.VIP personalized accompaniment') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Exclusive teaching methods') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Exclusive study materials') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.24/7 VIP support') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Free choice') }} ({{ __('website.Arabic, Quran, Tajweed, Islamic Studies') }})</li>
                            </ul>

                            <a href="{{ route('enroll.show', ['package' => 'ambassador_elite']) }}" class="enroll-btn">{{ __('website.Book Now') }} !</a>
                        </div>
                    </div>
                </div>

                <!-- Premium Pack -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="pricing-card">
                        <div class="exclusive-badge">Exclusive</div>
                        <div class="vip-badge">VIP</div>
                        <div class="card-content" style="position: relative; z-index: 30;">
                            <h3 class="package-name">🥇 {{ __('website.Premium Pack') }}</h3>
                            <p class="package-subtitle">{{ __('website.For advanced users') }}</p>
                            
                            <div class="price-container">
                                <div class="original-price">€720</div>
                                <div class="current-price">
                                    <span class="currency">€</span>640
                                </div>
                                <div class="savings-badge">{{ __('website.You save') }} €80</div>
                            </div>

                            <ul class="features-list">
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.48 courses') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.1 hour per course') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.VIP personalized accompaniment') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Exclusive teaching methods') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Personal mentor') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Exclusive workshops') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Free choice') }} ({{ __('website.Arabic, Quran, Tajweed, Islamic Studies') }})</li>
                            </ul>

                            <a href="{{ route('enroll.show', ['package' => 'ambassador_premium']) }}" class="enroll-btn">{{ __('website.Book Now') }} !</a>
                        </div>
                    </div>
                </div>

                <!-- Ultimate Pack -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="pricing-card">
                        <div class="exclusive-badge">Exclusive</div>
                        <div class="vip-badge">VIP</div>
                        <div class="card-content" style="position: relative; z-index: 30;">
                            <h3 class="package-name">🌟 {{ __('website.Ultimate Pack') }}</h3>
                            <p class="package-subtitle">{{ __('website.The most economical') }}</p>
                            
                            <div class="price-container">
                                <div class="original-price">€1500</div>
                                <div class="current-price">
                                    <span class="currency">€</span>1250
                                </div>
                                <div class="savings-badge">{{ __('website.You save') }} €250</div>
                            </div>

                            <ul class="features-list">
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.100 courses') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.1 hour per course') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.VIP personalized accompaniment') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Exclusive teaching methods') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Certificate of excellence') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Priority scheduling') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Exclusive study materials') }}</li>
                                <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Free choice') }} ({{ __('website.Arabic, Quran, Tajweed, Islamic Studies') }})</li>
                            </ul>

                            <a href="{{ route('enroll.show', ['package' => 'ambassador_ultimate']) }}" class="enroll-btn">{{ __('website.Book Now') }} !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h3>{{ __('website.Frequently Asked Questions') }}</h3>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="faq-card">
                        <h4>{{ __('website.Who is the free trial session for?') }}</h4>
                        <p>{{ __('website.Free trials are intended for students who discover Azhary Academy and who have never taken courses there before. Students can only use this offer once in one of the tutoring programs.') }}</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-card">
                        <h4>{{ __('website.What type of technical setup will my child need at home?') }}</h4>
                        <p>{{ __('website.Our program requires: 1- Zoom Client must be installed. 2- High-speed internet connection (at least 10 Mbps). We also strongly recommend headphones to help your child concentrate and be immersed in the virtual classroom.') }}</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="faq-card">
                        <h4>{{ __('website.Can I cancel at any time?') }}</h4>
                        <p>{{ __('website.Absolutely! We know that life happens and students sometimes have to stop classes for many reasons. To cancel your subscription, please fill out the Azhary Academy cancellation request form.') }}</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="faq-card">
                        <h4>{{ __('website.Can I postpone my start date?') }}</h4>
                        <p>{{ __('website.Yes! You can register now and select a later date to start your courses. This is an excellent way to reserve your place to ensure that your student is ready to start their learning once you have time in your schedule.') }}</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="faq-card">
                        <h4>{{ __('website.Do online courses really work?') }}</h4>
                        <p>{{ __('website.Yes absolutely! Our platform relies on both highly qualified professional teachers and teaching methods specially adapted for teaching students online! It\'s like you\'re sitting with your teacher in the same room.') }}</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="faq-card">
                        <h4>{{ __('website.Can I have a female teacher?') }}</h4>
                        <p>{{ __('website.Yes absolutely. Generally, teenagers and older students are usually assigned teachers of the same gender. An exception to this rule is when the student needs a very specialized area of expertise, the teacher\'s academic training is taken into account to assign the best match. Younger children can be assigned teachers of both genders depending on student/parent preferences and assessment of student needs and their match with teacher backgrounds and training.') }}</p>
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
                    <h3>{{ __('website.Ready for the Ultimate Learning Experience?') }}</h3>
                    <p>{{ __('website.Choose the perfect Ambassador Teacher package for your needs and experience the highest quality Quranic education with our most prestigious and qualified instructors.') }}</p>
                    <a href="{{ route('enroll.show', ['package' => 'ambassador_elite']) }}" class="cta-btn">{{ __('website.Enroll Now') }}</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection 