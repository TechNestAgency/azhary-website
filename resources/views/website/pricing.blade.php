@extends('website.layouts.app')

@section('title', __('website.Pricing') . ' - Azhary Academy')
@section('meta_description', __('website.Choose the perfect package for your Quran learning journey'))

@push('styles')
<style>
    :root {
      --heading-color: #13223F;
      --accent-color: #0d7adb;
    }

    .category-section {
      margin-bottom: 60px;
    }

    .category-title {
      text-align: center;
      margin-bottom: 30px;
      color: var(--heading-color);
      font-size: 28px;
      font-weight: 700;
    }

    .pricing-item {
      padding: 25px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      position: relative;
      overflow: hidden;
      background: #fff;
      transition: 0.3s;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .pricing-item:hover {
      transform: translateY(-5px);
    }

    .pricing-item.featured {
      border: 2px solid var(--accent-color);
    }

    .popular-badge {
      position: absolute;
      top: 15px;
      right: -35px;
      background: var(--accent-color);
      color: #fff;
      padding: 4px 35px;
      transform: rotate(45deg);
      font-size: 12px;
      font-weight: 600;
    }

    .pricing-item h3 {
      font-size: 20px;
      font-weight: 700;
      margin-bottom: 15px;
      color: var(--heading-color);
    }

    .price {
      font-size: 28px;
      font-weight: 700;
      color: var(--accent-color);
      margin-bottom: 15px;
    }

    .price sup {
      font-size: 16px;
      top: -10px;
    }

    .price span {
      font-size: 14px;
      font-weight: 400;
      color: #6c757d;
    }

    .pricing-item ul {
      padding: 0;
      list-style: none;
      margin-bottom: 20px;
      flex-grow: 1;
    }

    .pricing-item ul li {
      padding: 8px 0;
      display: flex;
      align-items: center;
      font-size: 14px;
    }

    .pricing-item ul li i {
      margin-right: 8px;
      font-size: 16px;
    }

    .pricing-item ul li i.bi-check-circle-fill {
      color: #28a745;
    }

    .pricing-item ul li i.bi-x-circle {
      color: #dc3545;
    }

    .pricing-item ul li.na {
      color: #6c757d;
    }

    .savings-box {
      background: #f8f9fa;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 15px;
      text-align: center;
    }

    .savings-box p {
      margin: 0;
      color: #6c757d;
      font-size: 13px;
    }

    .savings-amount {
      font-weight: 600;
      color: #28a745 !important;
    }

    .benefit-item {
      text-align: center;
      padding: 25px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
    }

    .benefit-item i {
      font-size: 32px;
      color: var(--accent-color);
      margin-bottom: 15px;
    }

    .benefit-item h4 {
      font-size: 18px;
      font-weight: 600;
      margin-bottom: 10px;
    }

    .faq-item {
      background: #fff;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
    }

    .faq-item h4 {
      font-size: 16px;
      font-weight: 600;
      margin-bottom: 10px;
      color: var(--heading-color);
    }

    .cta-box {
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .special-badge {
      position: absolute;
      top: 15px;
      right: -35px;
      background: #ff6b6b;
      color: #fff;
      padding: 4px 35px;
      transform: rotate(45deg);
      font-size: 12px;
      font-weight: 600;
    }

    /* Additional styles for better spacing and alignment */
    .page-title {
      padding: 60px 0;
      background: #f8f9fa;
      margin-bottom: 40px;
    }

    .page-title h1 {
      font-size: 32px;
      font-weight: 700;
      color: var(--heading-color);
      margin-bottom: 10px;
    }

    .breadcrumbs {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .breadcrumbs li {
      display: inline;
      font-size: 14px;
      color: #6c757d;
    }

    .breadcrumbs li + li:before {
      content: "/";
      padding: 0 8px;
    }

    .breadcrumbs li a {
      color: var(--accent-color);
      text-decoration: none;
    }

    .breadcrumbs li.current {
      color: #6c757d;
    }

    .section-title {
      text-align: center;
      margin-bottom: 40px;
    }

    .section-title h2 {
      font-size: 28px;
      font-weight: 700;
      color: var(--heading-color);
      margin-bottom: 10px;
    }

    .section-title p {
      color: #6c757d;
      font-size: 16px;
    }

    /* Page specific styles */
    .pricing-page {
      padding-top: 140px;
    }

    .page-header {
      background: linear-gradient(135deg, #0a2260 0%, #1e3a8a 50%, #3b82f6 100%);
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
    }
  </style>
@endpush

@section('content')
<div class="pricing-page">
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">{{ __('website.Pricing Plans') }}</h1>
                    <p class="page-subtitle">{{ __('website.Choose the perfect package for your Quran learning journey') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing section">
        <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>{{ __('website.Choose Your Learning Path') }}</h2>
          <p>{{ __('website.Select the perfect plan that matches your goals and budget') }}</p>
        </div>

        <!-- Best Value Category -->
        <div class="category-section mb-5" data-aos="fade-up">
          <h3 class="category-title">{{ __('website.Best Value Plans') }}</h3>
          <div class="row gy-4">
            <!-- Basic Plan -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="pricing-item">
                <h3>{{ __('website.Starter') }}</h3>
                <div class="price">
                  <sup>$</sup>49<span>/{{ __('website.month') }}</span>
                </div>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('website.2 Classes/week') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('website.30 min/class') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Basic Quran reading') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Email support') }}</li>
                </ul>
                <div class="savings-box">
                  <p>{{ __('website.Save 20% annually') }}</p>
                  <p class="savings-amount">$470/{{ __('website.year') }}</p>
                </div>
                <a href="{{ route('enroll.show') }}" class="btn btn-primary">{{ __('website.Get Started') }}</a>
              </div>
            </div>

            <!-- Standard Plan -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="pricing-item featured">
                <div class="popular-badge">{{ __('website.Most Popular') }}</div>
                <h3>{{ __('website.Family Plan') }}</h3>
                <div class="price">
                  <sup>$</sup>79<span>/{{ __('website.month') }}</span>
                </div>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('website.3 Classes/week') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('website.45 min/class') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('website.With Tajweed') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Priority support') }}</li>
                </ul>
                <div class="savings-box">
                  <p>{{ __('website.Save 25% annually') }}</p>
                  <p class="savings-amount">$711/{{ __('website.year') }}</p>
                </div>
                <a href="{{ route('enroll.show') }}" class="btn btn-primary">{{ __('website.Get Started') }}</a>
              </div>
            </div>

            <!-- Premium Plan -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="pricing-item">
                <h3>{{ __('website.Premium Plan') }}</h3>
                <div class="price">
                  <sup>$</sup>129<span>/{{ __('website.month') }}</span>
                </div>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('website.4 Classes/week') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('website.60 min/class') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('website.Advanced reading') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('website.24/7 support') }}</li>
                </ul>
                <div class="savings-box">
                  <p>{{ __('website.Save 30% annually') }}</p>
                  <p class="savings-amount">$1,083/{{ __('website.year') }}</p>
                </div>
                <a href="{{ route('enroll.show') }}" class="btn btn-primary">{{ __('website.Get Started') }}</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Special Offers Category -->
        <div class="category-section mb-5" data-aos="fade-up">
          <h3 class="category-title">{{ __('website.Special Offers') }}</h3>
          <div class="row gy-4">
            <!-- Basic Memorization -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="pricing-item">
                <div class="special-badge">Limited Time</div>
                <h3>Ramadan Special</h3>
                <div class="price">
                  <sup>$</sup>69<span>/month</span>
                </div>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> 2 Classes/week</li>
                  <li><i class="bi bi-check-circle-fill"></i> 30 min/class</li>
                  <li><i class="bi bi-check-circle-fill"></i> Extra Ramadan classes</li>
                  <li><i class="bi bi-check-circle-fill"></i> Special Ramadan content</li>
                </ul>
                <div class="savings-box">
                  <p>Save 25% annually</p>
                  <p class="savings-amount">$621/year</p>
                </div>
                <a href="{{ route('enroll.show') }}" class="btn btn-primary">Get Started</a>
              </div>
            </div>

            <!-- Standard Memorization -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="pricing-item featured">
                <div class="popular-badge">Best Deal</div>
                <h3>Family Bundle</h3>
                <div class="price">
                  <sup>$</sup>99<span>/month</span>
                </div>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> 3 Classes/week</li>
                  <li><i class="bi bi-check-circle-fill"></i> 45 min/class</li>
                  <li><i class="bi bi-check-circle-fill"></i> Up to 3 family members</li>
                  <li><i class="bi bi-check-circle-fill"></i> Shared resources</li>
                </ul>
                <div class="savings-box">
                  <p>Save 35% annually</p>
                  <p class="savings-amount">$772/year</p>
                </div>
                <a href="{{ route('enroll.show') }}" class="btn btn-primary">Get Started</a>
              </div>
            </div>

            <!-- Premium Memorization -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="pricing-item">
                <div class="special-badge">New</div>
                <h3>Weekend Special</h3>
                <div class="price">
                  <sup>$</sup>149<span>/month</span>
                </div>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Weekend classes only</li>
                  <li><i class="bi bi-check-circle-fill"></i> 60 min/class</li>
                  <li><i class="bi bi-check-circle-fill"></i> Flexible scheduling</li>
                  <li><i class="bi bi-check-circle-fill"></i> Priority booking</li>
                </ul>
                <div class="savings-box">
                  <p>Save 30% annually</p>
                  <p class="savings-amount">$1,251/year</p>
                </div>
                <a href="{{ route('enroll.show') }}" class="btn btn-primary">Get Started</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Islamic Values Category -->
        <div class="category-section mb-5" data-aos="fade-up">
          <h3 class="category-title">{{ __('website.Islamic Values') }}</h3>
          <div class="row gy-4">
            <!-- Basic Islamic Studies -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="pricing-item">
                <h3>Community Plan</h3>
                <div class="price">
                  <sup>$</sup>59<span>/month</span>
                </div>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> 2 Classes/week</li>
                  <li><i class="bi bi-check-circle-fill"></i> 30 min/class</li>
                  <li><i class="bi bi-check-circle-fill"></i> Group sessions</li>
                  <li><i class="bi bi-check-circle-fill"></i> Community events</li>
                </ul>
                <div class="savings-box">
                  <p>Save 20% annually</p>
                  <p class="savings-amount">$566/year</p>
                </div>
                <a href="{{ route('enroll.show') }}" class="btn btn-primary">Get Started</a>
              </div>
            </div>

            <!-- Standard Islamic Studies -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="pricing-item featured">
                <div class="popular-badge">Recommended</div>
                <h3>Spiritual Growth</h3>
                <div class="price">
                  <sup>$</sup>89<span>/month</span>
                </div>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> 3 Classes/week</li>
                  <li><i class="bi bi-check-circle-fill"></i> 45 min/class</li>
                  <li><i class="bi bi-check-circle-fill"></i> Personal development</li>
                  <li><i class="bi bi-check-circle-fill"></i> Spiritual guidance</li>
                </ul>
                <div class="savings-box">
                  <p>Save 25% annually</p>
                  <p class="savings-amount">$801/year</p>
                </div>
                <a href="{{ route('enroll.show') }}" class="btn btn-primary">Get Started</a>
              </div>
            </div>

            <!-- Premium Islamic Studies -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="pricing-item">
                <h3>Complete Journey</h3>
                <div class="price">
                  <sup>$</sup>139<span>/month</span>
                </div>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> 4 Classes/week</li>
                  <li><i class="bi bi-check-circle-fill"></i> 60 min/class</li>
                  <li><i class="bi bi-check-circle-fill"></i> Comprehensive learning</li>
                  <li><i class="bi bi-check-circle-fill"></i> Personal mentorship</li>
                </ul>
                <div class="savings-box">
                  <p>Save 30% annually</p>
                  <p class="savings-amount">$1,167/year</p>
                </div>
                <a href="{{ route('enroll.show') }}" class="btn btn-primary">Get Started</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Additional Benefits Section -->
        <div class="row mt-5">
          <div class="col-12 text-center" data-aos="fade-up">
            <h3>{{ __('website.All Plans Include') }}</h3>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="benefit-item">
              <i class="bi bi-person-check-fill"></i>
              <h4>{{ __('website.Qualified Teachers') }}</h4>
              <p>{{ __('website.Learn from certified Quran teachers with years of experience') }}</p>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="benefit-item">
              <i class="bi bi-calendar-check"></i>
              <h4>{{ __('website.Flexible Schedule') }}</h4>
              <p>{{ __('website.Choose class times that work best for you') }}</p>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="benefit-item">
              <i class="bi bi-laptop"></i>
              <h4>{{ __('website.Online Platform') }}</h4>
              <p>{{ __('website.Access your classes from anywhere in the world') }}</p>
            </div>
          </div>
        </div>

        <!-- FAQ Section -->
        <div class="row mt-5">
          <div class="col-12 text-center" data-aos="fade-up">
            <h3>{{ __('website.Frequently Asked Questions') }}</h3>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="faq-item">
              <h4>{{ __('website.Can I change my plan later?') }}</h4>
              <p>{{ __('website.Yes, you can upgrade or downgrade your plan at any time. Changes will be reflected in your next billing cycle.') }}</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="faq-item">
              <h4>{{ __('website.What payment methods do you accept?') }}</h4>
              <p>{{ __('website.We accept all major credit cards, PayPal, and bank transfers. All payments are secure and encrypted.') }}</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="faq-item">
              <h4>{{ __('website.Is there a free trial?') }}</h4>
              <p>{{ __('website.Yes, we offer a free trial class to help you experience our teaching methods and meet your potential teacher.') }}</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="faq-item">
              <h4>{{ __('website.What if I miss a class?') }}</h4>
              <p>{{ __('website.We understand life happens. You can reschedule missed classes within the same week, subject to teacher availability.') }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="cta section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center" data-aos="fade-up">
            <div class="cta-box">
              <h3>{{ __('website.Ready to Start Your Quranic Journey?') }}</h3>
              <p class="mb-4">{{ __('website.Join thousands of students who have already transformed their relationship with the Quran through our structured learning programs.') }}</p>
              <a href="{{ route('enroll.show') }}" class="btn btn-primary btn-lg px-5 py-3">{{ __('website.Enroll Now') }}</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>
@endsection 
</html> 