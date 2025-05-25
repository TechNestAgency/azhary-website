@extends('website.layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center mb-4 mb-md-0">
                            @if($teacher->photo)
                                <img src="{{ asset('storage/' . $teacher->photo) }}" alt="{{ $teacher->name }}" class="img-fluid rounded-circle" style="max-width: 200px;">
                            @else
                                <div class="rounded-circle bg-secondary mx-auto" style="width: 200px; height: 200px;"></div>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <h1 class="h3 mb-3">{{ $teacher->name }}</h1>
                            <div class="text-warning mb-3">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= round($teacher->rating))
                                        ★
                                    @else
                                        ☆
                                    @endif
                                @endfor
                                <span class="text-muted ms-2">({{ $teacher->total_reviews }} {{ __('reviews') }})</span>
                            </div>
                            <p class="lead">{{ $teacher->short_description }}</p>
                            <div class="d-flex gap-2 mb-3">
                                <span class="badge bg-primary">{{ $teacher->years_experience }} {{ __('years experience') }}</span>
                                <span class="badge bg-info">{{ $teacher->total_teaching_hours }} {{ __('teaching hours') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-4">{{ __('About') }}</h2>
                    <p>{{ $teacher->full_bio }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h5 mb-3">{{ __('Languages') }}</h3>
                            @if($teacher->languages)
                                {!! $teacher->languages !!}
                            @else
                                <p>{{ __('No languages specified') }}</p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h5 mb-3">{{ __('Certifications') }}</h3>
                            @if($teacher->certifications)
                                {!! $teacher->certifications !!}
                            @else
                                <p>{{ __('No certifications specified') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="h5 mb-3">{{ __('Teaching Methods') }}</h3>
                    <p>{{ $teacher->teaching_methods }}</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="h5 mb-3">{{ __('Materials Used') }}</h3>
                    <p>{{ $teacher->materials_used }}</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3 class="h5 mb-4">{{ __('Reviews') }}</h3>
                    @if($teacher->reviews->count() > 0)
                        @foreach($teacher->reviews as $review)
                            <div class="border-bottom pb-3 mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div>
                                        <strong>{{ $review->reviewer_name }}</strong>
                                        <div class="text-warning">
                                            @for($i = 1; $i <= 5; $i++)
                                                @if($i <= $review->rating)
                                                    ★
                                                @else
                                                    ☆
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                    <small class="text-muted">{{ $review->created_at->diffForHumans() }}</small>
                                </div>
                                <p class="mb-0">{{ $review->comment }}</p>
                            </div>
                        @endforeach
                    @else
                        <p>{{ __('No reviews yet') }}</p>
                    @endif

                    @auth
                        <div class="mt-4">
                            <h4 class="h6 mb-3">{{ __('Write a Review') }}</h4>
                            <form action="{{ route('website.teachers.reviews.store', $teacher) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">{{ __('Your Rating') }}</label>
                                    <div class="rating">
                                        @for($i = 5; $i >= 1; $i--)
                                            <input type="radio" name="rating" value="{{ $i }}" id="star{{ $i }}" required>
                                            <label for="star{{ $i }}">☆</label>
                                        @endfor
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">{{ __('Your Review') }}</label>
                                    <textarea name="comment" class="form-control" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('Submit Review') }}</button>
                            </form>
                        </div>
                    @else
                        <div class="alert alert-info mt-4">
                            {{ __('Please') }} <a href="{{ route('login') }}">{{ __('login') }}</a> {{ __('to write a review') }}.
                        </div>
                    @endauth
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="h5 mb-4">{{ __('Other Teachers') }}</h3>
                    @foreach($relatedTeachers as $relatedTeacher)
                        <div class="d-flex align-items-center mb-3">
                            @if($relatedTeacher->photo)
                                <img src="{{ asset('storage/' . $relatedTeacher->photo) }}" alt="{{ $relatedTeacher->name }}" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
                            @else
                                <div class="rounded-circle bg-secondary me-3" style="width: 50px; height: 50px;"></div>
                            @endif
                            <div>
                                <h4 class="h6 mb-0">
                                    <a href="{{ route('website.teachers.show', $relatedTeacher) }}" class="text-decoration-none">
                                        {{ $relatedTeacher->name }}
                                    </a>
                                </h4>
                                <div class="text-warning small">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= round($relatedTeacher->rating))
                                            ★
                                        @else
                                            ☆
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .rating {
        display: flex;
        flex-direction: row-reverse;
        justify-content: flex-end;
    }

    .rating input {
        display: none;
    }

    .rating label {
        cursor: pointer;
        font-size: 1.5em;
        color: #ddd;
        padding: 0 0.1em;
    }

    .rating input:checked ~ label,
    .rating label:hover,
    .rating label:hover ~ label {
        color: #ffd700;
    }
</style>
@endpush
@endsection 