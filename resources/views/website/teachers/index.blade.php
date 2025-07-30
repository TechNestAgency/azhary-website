@extends('website.layouts.app')

@section('title', __('website.Our Teachers') . ' - Azhary Academy')
@section('meta_description', __('website.Meet our qualified and experienced Quran teachers who are dedicated to helping you learn'))

@push('styles')
<style>
  /* Teacher Profile Card Styles - Matching the Design */
  .teacher-profile-card {
    background: white;
    border-radius: 90px 90px 20px 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    position: relative;
    height: 100%;
    display: flex;
    flex-direction: column;
    background-image: 
      radial-gradient(circle at 20% 20%, rgba(212, 175, 55, 0.03) 0%, transparent 30%),
      radial-gradient(circle at 80% 80%, rgba(34, 139, 34, 0.03) 0%, transparent 30%);
    background-size: 100px 100px, 150px 150px;
    background-position: 0 0, 50px 50px;
    background-repeat: repeat;
  }
  
  .teacher-photo-section {
    position: relative;
    background: white;
    padding: 0;
    overflow: hidden;
    border-radius: 90px 90px 0 0;
  }
  
  .teacher-photo {
    width: 100%;
    height: 280px;
    object-fit: cover;
    border-radius: 0 0 20px 20px;
    display: block;
    position: relative;
  }
  
  .teacher-photo::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 30px;
    background: white;
    border-radius: 0 0 20px 20px;
    z-index: 1;
  }
  
  .teacher-info-section {
    padding: 25px 20px 30px 20px;
    text-align: center;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  
  .teacher-name {
    font-size: 1.5rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 15px;
    line-height: 1.2;
  }
  
  .teacher-description {
    color: #6c757d;
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 25px;
    flex-grow: 1;
  }
  
  .teacher-btn {
    display: inline-block;
    background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
    color: white;
    padding: 12px 30px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
  }
  
  .teacher-btn:hover {
    background: linear-gradient(135deg, #218838 0%, #1ea085 100%);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(40, 167, 69, 0.4);
  }
  
  /* Responsive adjustments for teacher cards */
  @media (max-width: 768px) {
    .teacher-photo {
      height: 220px;
    }
    
    .teacher-name {
      font-size: 1.3rem;
    }
    
    .teacher-description {
      font-size: 0.9rem;
    }
    
    .teacher-btn {
      padding: 10px 25px;
      font-size: 0.9rem;
    }
  }

  /* Page specific styles */
  .teachers-page {
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
<div class="teachers-page">
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">{{ __('website.Our Teachers') }}</h1>
                    <p class="page-subtitle">{{ __('website.Meet our qualified and experienced Quran teachers who are dedicated to helping you learn') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Teachers Section -->
    <section class="teachers-section py-5">
        <div class="container">

    <div class="row">
        @foreach($teachers as $teacher)
        <div class="col-md-4 mb-4">
            <div class="teacher-profile-card">
                <div class="teacher-photo-section">
                    @if($teacher->photo)
                        <img src="{{ asset($teacher->photo) }}" class="teacher-photo" alt="{{ $teacher->name }}">
                    @else
                        <div class="teacher-photo bg-secondary d-flex align-items-center justify-content-center">
                            <i class="bi bi-person" style="font-size: 3rem; color: #6c757d;"></i>
                        </div>
                    @endif
                </div>
                <div class="teacher-info-section">
                    <h4 class="teacher-name">{{ $teacher->name }}</h4>
                    <div class="text-warning mb-3">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= round($teacher->rating))
                                ★
                            @else
                                ☆
                            @endif
                        @endfor
                        <span class="text-muted ms-1">({{ $teacher->total_reviews }})</span>
                    </div>
                    <p class="teacher-description">{!! Str::limit($teacher->short_description, 150) !!}</p>
                    <a href="{{ route('website.teachers.show', $teacher) }}" class="teacher-btn">{{ __('website.Learn More') }}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

        </div>

        <!-- Pagination -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    {{ $teachers->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection 