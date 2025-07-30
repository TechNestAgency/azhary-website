@extends('website.layouts.app')

@section('title', __('website.Articles') . ' - Azhary Academy')
@section('meta_description', __('website.Explore our collection of Islamic articles and educational content'))

@push('styles')
<style>
    :root {
      --heading-color: #13223F;
      --accent-color: #0d7adb;
    }

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

    .article-card {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .article-card:hover {
      transform: translateY(-5px);
    }

    .article-image {
      position: relative;
      height: 200px;
      overflow: hidden;
    }

    .article-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .article-content {
      padding: 20px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }

    .article-meta {
      display: flex;
      gap: 15px;
      font-size: 0.9rem;
      color: #666;
      margin-bottom: 10px;
    }

    .article-title {
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .article-title a {
      color: var(--heading-color);
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .article-title a:hover {
      color: var(--accent-color);
    }

    .article-excerpt {
      color: #666;
      margin-bottom: 15px;
      flex-grow: 1;
    }

    .read-more {
      color: var(--accent-color);
      text-decoration: none;
      font-weight: 500;
      display: inline-flex;
      align-items: center;
      gap: 5px;
      transition: color 0.3s ease;
    }

    .read-more:hover {
      color: var(--heading-color);
    }

    .pagination-wrapper {
      display: flex;
      justify-content: center;
      margin-top: 40px;
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
    .articles-page {
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
<div class="articles-page">
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">{{ __('website.Latest Articles') }}</h1>
                    <p class="page-subtitle">{{ __('website.Discover insightful articles about Islamic teachings and education') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Articles Section -->
    <section class="articles-section section">
        <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>{{ __('website.Discover Islamic Knowledge') }}</h2>
          <p>{{ __('website.Explore our collection of insightful articles about Islamic teachings and education') }}</p>
        </div>

        <!-- Articles Grid -->
        <div class="row g-4">
          @forelse($articles as $article)
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
            <div class="article-card">
              <div class="article-image">
                <img src="{{ asset($article->image) }}" class="img-fluid" alt="{{ $article->getTranslation('title', app()->getLocale()) }}">
              </div>
              <div class="article-content">
                <div class="article-meta">
                  <span><i class="bi bi-calendar"></i> {!! $article->created_at->format('M d, Y') !!}</span>
                </div>
                <h3 class="article-title">
                  <a href="{{ route('website.articles.show', $article->id) }}">{!! $article->getTranslation('title', app()->getLocale()) !!}</a>
                </h3>
                <p class="article-excerpt">{!! Str::limit($article->getTranslation('content', app()->getLocale()), 150) !!}</p>
                <a href="{{ route('website.articles.show', $article->id) }}" class="read-more">
                  {{ __('website.Read More') }} <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          @empty
          <div class="col-12">
            <div class="alert alert-info text-center">
              {{ __('website.No articles found matching your criteria.') }}
            </div>
          </div>
          @endforelse
        </div>

        <!-- Pagination -->
        <div class="pagination-wrapper">
          {{ $articles->links() }}
        </div>
      </div>
    </section>
  </div>
@endsection 