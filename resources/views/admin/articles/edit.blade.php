@extends('app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Articles /</span> Edit Article
    </h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit Article</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data" id="articleForm">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label class="form-label" for="title_en">Title (English)</label>
                            <input type="text" class="form-control @error('title.en') is-invalid @enderror" 
                                id="title_en" name="title[en]" value="{{ old('title.en', $article->getTranslation('title', 'en')) }}" required />
                            @error('title.en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="title_fr">Title (French)</label>
                            <input type="text" class="form-control @error('title.fr') is-invalid @enderror" 
                                id="title_fr" name="title[fr]" value="{{ old('title.fr', $article->getTranslation('title', 'fr')) }}" required />
                            @error('title.fr')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="content_en">Content (English)</label>
                            <textarea class="form-control @error('content.en') is-invalid @enderror" 
                                id="content_en" name="content[en]" rows="5">{{ old('content.en', $article->getTranslation('content', 'en')) }}</textarea>
                            <input type="hidden" name="content[en]" id="content_en_hidden" required>
                            @error('content.en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="content_fr">Content (French)</label>
                            <textarea class="form-control @error('content.fr') is-invalid @enderror" 
                                id="content_fr" name="content[fr]" rows="5">{{ old('content.fr', $article->getTranslation('content', 'fr')) }}</textarea>
                            <input type="hidden" name="content[fr]" id="content_fr_hidden" required>
                            @error('content.fr')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="image">Article Image</label>
                            @if($article->image)
                                <div class="mb-2">
                                    <img src="{{ asset($article->image) }}" alt="Current Image" class="img-thumbnail" style="max-height: 200px;">
                                </div>
                            @endif
                            <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                id="image" name="image" accept="image/*" />
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="meta_description_en">Meta Description (English)</label>
                            <textarea class="form-control @error('meta_description.en') is-invalid @enderror" 
                                id="meta_description_en" name="meta_description[en]" rows="2">{{ old('meta_description.en', $article->getTranslation('meta_description', 'en')) }}</textarea>
                            @error('meta_description.en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="meta_description_fr">Meta Description (French)</label>
                            <textarea class="form-control @error('meta_description.fr') is-invalid @enderror" 
                                id="meta_description_fr" name="meta_description[fr]" rows="2">{{ old('meta_description.fr', $article->getTranslation('meta_description', 'fr')) }}</textarea>
                            @error('meta_description.fr')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="meta_keywords_en">Meta Keywords (English)</label>
                            <input type="text" class="form-control @error('meta_keywords.en') is-invalid @enderror" 
                                id="meta_keywords_en" name="meta_keywords[en]" value="{{ old('meta_keywords.en', $article->getTranslation('meta_keywords', 'en')) }}" />
                            @error('meta_keywords.en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="meta_keywords_fr">Meta Keywords (French)</label>
                            <input type="text" class="form-control @error('meta_keywords.fr') is-invalid @enderror" 
                                id="meta_keywords_fr" name="meta_keywords[fr]" value="{{ old('meta_keywords.fr', $article->getTranslation('meta_keywords', 'fr')) }}" />
                            @error('meta_keywords.fr')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="status" name="status" value="1" 
                                    {{ old('status', $article->status) ? 'checked' : '' }}>
                                <label class="form-check-label" for="status">Published</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Article</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    let editorEn, editorFr;

    ClassicEditor
        .create(document.querySelector('#content_en'))
        .then(editor => {
            editorEn = editor;
            editor.model.document.on('change:data', () => {
                document.getElementById('content_en_hidden').value = editor.getData();
            });
        })
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#content_fr'))
        .then(editor => {
            editorFr = editor;
            editor.model.document.on('change:data', () => {
                document.getElementById('content_fr_hidden').value = editor.getData();
            });
        })
        .catch(error => {
            console.error(error);
        });

    document.getElementById('articleForm').addEventListener('submit', function(e) {
        if (editorEn && editorFr) {
            document.getElementById('content_en_hidden').value = editorEn.getData();
            document.getElementById('content_fr_hidden').value = editorFr.getData();
        }
    });
</script>
@endpush 