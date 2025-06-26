@extends('app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Teachers /</span> Teacher Details
    </h4>

    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Teacher Information</h5>
                    <div>
                        <a href="{{ route('admin.teachers.edit', $teacher) }}" class="btn btn-primary btn-sm">
                            <i class="bx bx-edit-alt"></i> Edit
                        </a>
                        <form action="{{ route('admin.teachers.destroy', $teacher) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this teacher?')">
                                <i class="bx bx-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-4">
                            @if($teacher->photo)
                                <img src="{{ asset($teacher->photo) }}" alt="{{ $teacher->name }}" class="img-fluid rounded">
                            @else
                                <div class="text-center p-4 bg-light rounded">
                                    <i class="bx bx-user bx-lg"></i>
                                    <p class="mt-2">No photo available</p>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <h4>{{ $teacher->name }}</h4>
                            <div class="mb-2">
                                <span class="badge bg-label-{{ $teacher->is_active ? 'success' : 'danger' }}">
                                    {{ $teacher->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </div>
                            <div class="mb-2">
                                <strong>Rating:</strong> {{ number_format($teacher->rating, 1) }} / 5.0
                                ({{ $teacher->total_reviews }} reviews)
                            </div>
                            <div class="mb-2">
                                <strong>Experience:</strong> {{ $teacher->years_experience }} years
                            </div>
                            <div class="mb-2">
                                <strong>Total Teaching Hours:</strong> {{ $teacher->total_teaching_hours }}
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5>Short Description</h5>
                        <div class="p-3 bg-light rounded">
                            {!! $teacher->short_description !!}
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5>Full Bio</h5>
                        <div class="p-3 bg-light rounded">
                            {!! $teacher->full_bio !!}
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5>Languages</h5>
                        <div class="p-3 bg-light rounded">
                            {!! $teacher->languages ?: '<em>No languages specified</em>' !!}
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5>Certifications</h5>
                        <div class="p-3 bg-light rounded">
                            {!! $teacher->certifications ?: '<em>No certifications specified</em>' !!}
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5>Teaching Methods</h5>
                        <div class="p-3 bg-light rounded">
                            {!! $teacher->teaching_methods !!}
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5>Materials Used</h5>
                        <div class="p-3 bg-light rounded">
                            {!! $teacher->materials_used !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Reviews</h5>
                </div>
                <div class="card-body">
                    @if($teacher->reviews->count() > 0)
                        @foreach($teacher->reviews as $review)
                            <div class="mb-3 pb-3 border-bottom">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div>
                                        <strong>{{ $review->name }}</strong>
                                        <div class="text-warning">
                                            @for($i = 1; $i <= 5; $i++)
                                                <i class="bx bxs-star{{ $i <= $review->rating ? '' : '-half' }}"></i>
                                            @endfor
                                        </div>
                                    </div>
                                    <small class="text-muted">{{ $review->created_at->diffForHumans() }}</small>
                                </div>
                                <p class="mb-0">{{ $review->comment }}</p>
                            </div>
                        @endforeach
                    @else
                        <p class="text-muted mb-0">No reviews yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 