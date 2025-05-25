@extends('app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Articles /</span> All Articles
    </h4>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Articles List</h5>
            <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">
                <i class="bx bx-plus"></i> Add New Article
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 25%">Title (EN)</th>
                        <th style="width: 25%">Title (FR)</th>
                        <th style="width: 10%">Status</th>
                        <th style="width: 20%">Created At</th>
                        <th style="width: 20%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($articles as $article)
                    <tr>
                        <td class="text-wrap">{{ $article->getTranslation('title', 'en') }}</td>
                        <td class="text-wrap">{{ $article->getTranslation('title', 'fr') }}</td>
                        <td>
                            <span class="badge bg-label-{{ $article->status ? 'success' : 'danger' }}">
                                {{ $article->status ? 'Published' : 'Draft' }}
                            </span>
                        </td>
                        <td>{{ $article->created_at->format('Y-m-d H:i') }}</td>
                        <td>
                            <div class="dropdown position-static">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" data-bs-boundary="viewport">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ route('admin.articles.edit', $article) }}">
                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this article?')">
                                            <i class="bx bx-trash me-1"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">No articles found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $articles->links() }}
        </div>
    </div>
</div>

<style>
.dropdown-menu {
    position: absolute !important;
    z-index: 1000;
}
.table-responsive {
    overflow-x: auto;
    overflow-y: visible;
}
</style>
@endsection 