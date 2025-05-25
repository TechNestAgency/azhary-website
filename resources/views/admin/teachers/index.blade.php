@extends('app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Teachers Management</h5>
                        <a href="{{ route('admin.teachers.create') }}" class="btn btn-primary">Add New Teacher</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Short Description</th>
                                        <th>Rating</th>
                                        <th>Experience</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($teachers as $teacher)
                                    <tr>
                                        <td>
                                            @if($teacher->photo)
                                                <img src="{{ asset('storage/' . $teacher->photo) }}" alt="{{ $teacher->name }}" class="rounded-circle" width="50" height="50">
                                            @else
                                                <div class="rounded-circle bg-secondary" style="width: 50px; height: 50px;"></div>
                                            @endif
                                        </td>
                                        <td>{{ $teacher->name }}</td>
                                        <td>{{ Str::limit($teacher->short_description, 100) }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="text-warning me-1">★</span>
                                                <span>{{ number_format($teacher->rating, 1) }}</span>
                                                <span class="text-muted ms-1">({{ $teacher->total_reviews }})</span>
                                            </div>
                                        </td>
                                        <td>{{ $teacher->years_experience }} years</td>
                                        <td>
                                            <span class="badge bg-{{ $teacher->is_active ? 'success' : 'danger' }}">
                                                {{ $teacher->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="{{ route('admin.teachers.edit', $teacher) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="{{ route('admin.teachers.show', $teacher) }}" class="btn btn-sm btn-info">View</a>
                                                <form action="{{ route('admin.teachers.destroy', $teacher) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4">
                            {{ $teachers->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 