@extends('website.layouts.app')

@section('title', __('website.Articles') . ' - Azhary Academy')
@section('meta_description', __('website.Explore our collection of Islamic articles and educational content'))

@section('content')
<!-- Page Header -->


<!-- Articles Section -->
<section class="articles-section section" style="padding-top: 160px;">
  <div class="container">
    <!-- Filters -->


    <!-- Articles Grid -->
    <div class="row g-4">
      @forelse($articles as $article)
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
        <div class="article-card">
          <div class="article-image">
            <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid" alt="{{ $article->getTranslation('title', app()->getLocale()) }}">
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
    <div class="row mt-5">
      <div class="col-12">
        <div class="pagination-wrapper">
          {{ $articles->links() }}
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('styles')
<style>
.page-header {
  background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('website_assets/img/articles-header.jpg') }}');
  background-size: cover;
  background-position: center;
  padding: 100px 0;
  color: white;
  text-align: center;
}

.filters-wrapper {
  display: flex;
  gap: 20px;
  align-items: center;
}

.filters-group {
  display: flex;
  align-items: center;
  gap: 10px;
}

.filters-group label {
  margin-bottom: 0;
  font-weight: 500;
}

.article-card {
  background: white;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
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
}

.article-excerpt {
  color: #666;
  margin-bottom: 15px;
}

.read-more {
  color: var(--primary-color);
  text-decoration: none;
  font-weight: 500;
  display: inline-flex;
  align-items: center;
  gap: 5px;
}

.pagination-wrapper {
  display: flex;
  justify-content: center;
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Handle sort filter change
  document.getElementById('sort-filter').addEventListener('change', function() {
    updateFilters();
  });

  function updateFilters() {
    const sort = document.getElementById('sort-filter').value;
    const search = new URLSearchParams(window.location.search).get('search') || '';
    
    let url = new URL(window.location.href);
    url.searchParams.set('sort', sort);
    if (search) url.searchParams.set('search', search);
    
    window.location.href = url.toString();
  }
});
</script>
@endpush 