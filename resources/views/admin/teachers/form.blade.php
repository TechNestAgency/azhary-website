@extends('app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">{{ isset($teacher) ? 'Edit Teacher' : 'Add New Teacher' }}</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ isset($teacher) ? route('admin.teachers.update', $teacher) : route('admin.teachers.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($teacher))
                            @method('PUT')
                        @endif

                        <div class="mb-3">
                            <label class="form-label" for="name">Name (English)</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $teacher->name ?? '') }}" required />
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="name_fr">Name (French)</label>
                            <input type="text" class="form-control @error('name_fr') is-invalid @enderror" id="name_fr" name="name_fr" value="{{ old('name_fr', $teacher->name_fr ?? '') }}" />
                            @error('name_fr')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="photo">Photo</label>
                            <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" accept="image/*" {{ !isset($teacher) ? 'required' : '' }} />
                            @error('photo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            @if(isset($teacher) && $teacher->photo)
                                <div class="mt-2">
                                    <img src="{{ asset($teacher->photo) }}" alt="{{ $teacher->name }}" class="img-thumbnail" style="max-height: 200px;">
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="short_description">Short Description (English)</label>
                            <textarea class="form-control editor @error('short_description') is-invalid @enderror" id="short_description" name="short_description" required placeholder="Enter a short description">{{ old('short_description', $teacher->short_description ?? '') }}</textarea>
                            @error('short_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="short_description_fr">Short Description (French)</label>
                            <textarea class="form-control editor @error('short_description_fr') is-invalid @enderror" id="short_description_fr" name="short_description_fr" placeholder="Enter a short description in French">{{ old('short_description_fr', $teacher->short_description_fr ?? '') }}</textarea>
                            @error('short_description_fr')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="full_bio">Full Bio (English)</label>
                            <textarea class="form-control editor @error('full_bio') is-invalid @enderror" id="full_bio" name="full_bio" required placeholder="Enter the full biography">{{ old('full_bio', $teacher->full_bio ?? '') }}</textarea>
                            @error('full_bio')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="full_bio_fr">Full Bio (French)</label>
                            <textarea class="form-control editor @error('full_bio_fr') is-invalid @enderror" id="full_bio_fr" name="full_bio_fr" placeholder="Enter the full biography in French">{{ old('full_bio_fr', $teacher->full_bio_fr ?? '') }}</textarea>
                            @error('full_bio_fr')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="languages">Languages (English)</label>
                            <textarea class="form-control editor @error('languages') is-invalid @enderror" id="languages" name="languages" placeholder="Enter languages spoken">{{ old('languages', $teacher->languages ?? '') }}</textarea>
                            @error('languages')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="languages_fr">Languages (French)</label>
                            <textarea class="form-control editor @error('languages_fr') is-invalid @enderror" id="languages_fr" name="languages_fr" placeholder="Enter languages spoken in French">{{ old('languages_fr', $teacher->languages_fr ?? '') }}</textarea>
                            @error('languages_fr')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="certifications">Certifications (English)</label>
                            <textarea class="form-control editor @error('certifications') is-invalid @enderror" id="certifications" name="certifications" placeholder="Enter certifications">{{ old('certifications', $teacher->certifications ?? '') }}</textarea>
                            @error('certifications')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="certifications_fr">Certifications (French)</label>
                            <textarea class="form-control editor @error('certifications_fr') is-invalid @enderror" id="certifications_fr" name="certifications_fr" placeholder="Enter certifications in French">{{ old('certifications_fr', $teacher->certifications_fr ?? '') }}</textarea>
                            @error('certifications_fr')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="teaching_methods">Teaching Methods (English)</label>
                            <textarea class="form-control editor @error('teaching_methods') is-invalid @enderror" id="teaching_methods" name="teaching_methods" required placeholder="Enter teaching methods">{{ old('teaching_methods', $teacher->teaching_methods ?? '') }}</textarea>
                            @error('teaching_methods')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="teaching_methods_fr">Teaching Methods (French)</label>
                            <textarea class="form-control editor @error('teaching_methods_fr') is-invalid @enderror" id="teaching_methods_fr" name="teaching_methods_fr" placeholder="Enter teaching methods in French">{{ old('teaching_methods_fr', $teacher->teaching_methods_fr ?? '') }}</textarea>
                            @error('teaching_methods_fr')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="materials_used">Materials Used (English)</label>
                            <textarea class="form-control editor @error('materials_used') is-invalid @enderror" id="materials_used" name="materials_used" required placeholder="Enter materials used">{{ old('materials_used', $teacher->materials_used ?? '') }}</textarea>
                            @error('materials_used')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="materials_used_fr">Materials Used (French)</label>
                            <textarea class="form-control editor @error('materials_used_fr') is-invalid @enderror" id="materials_used_fr" name="materials_used_fr" placeholder="Enter materials used in French">{{ old('materials_used_fr', $teacher->materials_used_fr ?? '') }}</textarea>
                            @error('materials_used_fr')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="years_experience">Years of Experience</label>
                            <input type="number" class="form-control @error('years_experience') is-invalid @enderror" id="years_experience" name="years_experience" value="{{ old('years_experience', $teacher->years_experience ?? 0) }}" min="0" required />
                            @error('years_experience')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="total_teaching_hours">Total Teaching Hours</label>
                            <input type="number" class="form-control @error('total_teaching_hours') is-invalid @enderror" id="total_teaching_hours" name="total_teaching_hours" value="{{ old('total_teaching_hours', $teacher->total_teaching_hours ?? 0) }}" min="0" required />
                            @error('total_teaching_hours')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $teacher->is_active ?? true) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">Active</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ isset($teacher) ? 'Update' : 'Create' }} Teacher</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize CKEditor for all textareas with the 'editor' class
        document.querySelectorAll('.editor').forEach(function(element) {
            ClassicEditor
                .create(element, {
                    toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'outdent', 'indent', '|', 'blockQuote', 'insertTable', 'undo', 'redo'],
                    heading: {
                        options: [
                            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                        ]
                    }
                })
                .then(editor => {
                    // Update the textarea value when the editor content changes
                    editor.model.document.on('change:data', () => {
                        element.value = editor.getData();
                    });
                })
                .catch(error => {
                    console.error(error);
                });
        });

        // Handle form submission
        const form = document.querySelector('form');
        form.addEventListener('submit', function(e) {
            // Update all editor values before submission
            document.querySelectorAll('.editor').forEach(function(element) {
                const editor = element.ckeditorInstance;
                if (editor) {
                    element.value = editor.getData();
                }
            });
        });
    });
</script>
@endpush
@endsection 