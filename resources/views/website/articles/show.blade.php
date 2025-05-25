@extends('website.layouts.app')

@section('title', $article->getTranslation('title', app()->getLocale()) . ' - Azhary Academy')
@section('meta_description', $article->getTranslation('content', app()->getLocale()))

@section('content')
<!-- Hero Section -->
<section class="article-hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('storage/' . $article->image) }}')">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="article-hero-content">
                    <div class="article-meta">
                        <span class="date">
                            <i class="bi bi-calendar3"></i>
                            {{ $article->created_at->format('F d, Y') }}
                        </span>
                        @if($article->author)
                        <span class="author">
                            <i class="bi bi-person-circle"></i>
                            {{ $article->author->name }}
                        </span>
                        @endif
                    </div>
                    <h1 class="article-title">{{ $article->getTranslation('title', app()->getLocale()) }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Article Content -->
<article class="article-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Featured Image -->
                <div class="article-featured-image">
                    <img src="{{ asset('storage/' . $article->image) }}" 
                         class="img-fluid rounded-4 shadow-lg" 
                         alt="{{ $article->getTranslation('title', app()->getLocale()) }}">
                </div>

                <!-- Article Body -->
                <div class="article-body">
                    {!! $article->getTranslation('content', app()->getLocale()) !!}
                </div>

                <!-- Share Section -->
                <div class="article-share">
                    <h4 class="share-title">{{ __('website.Share this article') }}</h4>
                    <div class="share-buttons">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" 
                           target="_blank" 
                           class="share-btn facebook"
                           title="{{ __('website.Share on Facebook') }}">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($article->getTranslation('title', app()->getLocale())) }}" 
                           target="_blank" 
                           class="share-btn twitter"
                           title="{{ __('website.Share on Twitter') }}">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($article->getTranslation('title', app()->getLocale())) }}" 
                           target="_blank" 
                           class="share-btn linkedin"
                           title="{{ __('website.Share on LinkedIn') }}">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="https://wa.me/?text={{ urlencode($article->getTranslation('title', app()->getLocale()) . ' ' . request()->url()) }}" 
                           target="_blank" 
                           class="share-btn whatsapp"
                           title="{{ __('website.Share on WhatsApp') }}">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Related Articles -->
                @if(isset($relatedArticles) && $relatedArticles->isNotEmpty())
                <div class="related-articles">
                    <h3 class="related-title">{{ __('website.Related Articles') }}</h3>
                    <div class="row g-4">
                        @foreach($relatedArticles as $relatedArticle)
                        <div class="col-md-6">
                            <div class="related-article-card">
                                <div class="related-article-image">
                                    <img src="{{ asset('storage/' . $relatedArticle->image) }}" 
                                         class="img-fluid" 
                                         alt="{{ $relatedArticle->getTranslation('title', app()->getLocale()) }}">
                                </div>
                                <div class="related-article-content">
                                    <h4>
                                        <a href="{{ route('website.articles.show', $relatedArticle->id) }}">
                                            {{ $relatedArticle->getTranslation('title', app()->getLocale()) }}
                                        </a>
                                    </h4>
                                    <div class="related-article-meta">
                                        <span>
                                            <i class="bi bi-calendar3"></i>
                                            {{ $relatedArticle->created_at->format('M d, Y') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</article>
@endsection

@push('styles')
<style>
/* Hero Section */
.article-hero {
    background-size: cover;
    background-position: center;
    padding: 120px 0;
    color: white;
    text-align: center;
    position: relative;
}

.article-hero::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100px;
    background: linear-gradient(to bottom, transparent, white);
}

.article-hero-content {
    position: relative;
    z-index: 1;
}

.article-meta {
    display: flex;
    justify-content: center;
    gap: 25px;
    margin-bottom: 25px;
    font-size: 1.1rem;
}

.article-meta span {
    display: flex;
    align-items: center;
    gap: 8px;
    opacity: 0.9;
}

.article-title {
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1.2;
    margin: 0;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

/* Article Content */
.article-content {
    padding: 80px 0;
    background: #fff;
}

.article-featured-image {
    margin-bottom: 40px;
}

.article-featured-image img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease;
}

.article-featured-image img:hover {
    transform: scale(1.02);
}

.article-body {
    font-size: 1.2rem;
    line-height: 1.8;
    color: #2c3e50;
}

.article-body p {
    margin-bottom: 1.8rem;
}

.article-body h2 {
    font-size: 2.2rem;
    font-weight: 700;
    margin: 3rem 0 1.5rem;
    color: #1a202c;
}

.article-body h3 {
    font-size: 1.8rem;
    font-weight: 600;
    margin: 2.5rem 0 1.2rem;
    color: #2d3748;
}

.article-body img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin: 2rem 0;
}

.article-body blockquote {
    border-left: 4px solid var(--primary-color);
    padding: 1rem 2rem;
    margin: 2rem 0;
    background: #f8f9fa;
    font-style: italic;
}

/* Share Section */
.article-share {
    margin: 60px 0;
    padding: 30px;
    background: #f8f9fa;
    border-radius: 12px;
    text-align: center;
}

.share-title {
    font-size: 1.5rem;
    margin-bottom: 20px;
    color: #2d3748;
}

.share-buttons {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.share-btn {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 1.2rem;
}

.share-btn:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.facebook { background: #1877f2; }
.twitter { background: #000; }
.linkedin { background: #0077b5; }
.whatsapp { background: #25d366; }

/* Related Articles */
.related-articles {
    margin-top: 80px;
}

.related-title {
    font-size: 2rem;
    margin-bottom: 30px;
    color: #1a202c;
    text-align: center;
}

.related-article-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    height: 100%;
}

.related-article-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.related-article-image {
    height: 200px;
    overflow: hidden;
}

.related-article-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.related-article-card:hover .related-article-image img {
    transform: scale(1.1);
}

.related-article-content {
    padding: 20px;
}

.related-article-content h4 {
    font-size: 1.2rem;
    margin-bottom: 15px;
    line-height: 1.4;
}

.related-article-content h4 a {
    color: #2d3748;
    text-decoration: none;
    transition: color 0.3s ease;
}

.related-article-content h4 a:hover {
    color: var(--primary-color);
}

.related-article-meta {
    font-size: 0.9rem;
    color: #718096;
}

.related-article-meta span {
    display: flex;
    align-items: center;
    gap: 5px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .article-hero {
        padding: 80px 0;
    }

    .article-title {
        font-size: 2.5rem;
    }

    .article-meta {
        flex-direction: column;
        gap: 15px;
    }

    .article-body {
        font-size: 1.1rem;
    }

    .article-body h2 {
        font-size: 1.8rem;
    }

    .article-body h3 {
        font-size: 1.5rem;
    }

    .share-buttons {
        flex-wrap: wrap;
    }
}
</style>
@endpush 