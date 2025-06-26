@extends('website.layouts.app')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-center mb-4">Our Teachers</h1>
            <p class="text-center text-muted">Meet our experienced and dedicated teaching staff</p>
        </div>
    </div>

    <div class="row">
        @foreach($teachers as $teacher)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    @if($teacher->photo)
                        <img src="{{ asset($teacher->photo) }}" alt="{{ $teacher->name }}" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                    @else
                        <div class="rounded-circle bg-secondary mx-auto mb-3" style="width: 150px; height: 150px;"></div>
                    @endif
                    
                    <h5 class="card-title">{{ $teacher->name }}</h5>
                    <div class="text-warning mb-2">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= round($teacher->rating))
                                ★
                            @else
                                ☆
                            @endif
                        @endfor
                        <span class="text-muted ms-1">({{ $teacher->total_reviews }})</span>
                    </div>
                    <p class="card-text">{{ Str::limit($teacher->short_description, 100) }}</p>
                    <div class="mt-3">
                        <a href="{{ route('website.teachers.show', $teacher) }}" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row mt-4">
        <div class="col-12">
            {{ $teachers->links() }}
        </div>
    </div>
</div>
@endsection 