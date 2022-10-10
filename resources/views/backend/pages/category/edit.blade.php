@extends('backend.layouts.master')

@section('backend_title', 'Edit Category')

@push('admin_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" />
@endpush

@section('admin_content')
    <div class="row">
        <div class="col-12 my-4 d-flex justify-content-between">
            <h3>Edit Category</h3>
            <a href="{{ route('category.index') }}"><button class="btn btn-primary"><i class="fa-solid fa-backward"></i>
                    Category List</button></a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('category.update', $edit_cat->slug) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" value="{{ $edit_cat->title }}" placeholder="Enter Your Category Title">

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category_image" class="form-label">Category Image</label>
                            <input type="file" class="form-control dropify" data-max-file-size="1M"
                                data-errors-position="outside" data-allowed-file-extensions="jpg png jpeg"
                                data-default-file="{{ asset('uploads/categories') }}/{{ $edit_cat->category_image }}"
                                name="category_image">
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active"
                                @if ($edit_cat->is_active) checked @endif>
                            <label class="form-check-label" for="is_active">Active/Inactive</label>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-info">Update Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('admin_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script>
        $('.dropify').dropify({
            messages: {
                'default': 'Drag and drop your file here',
                'replace': 'Drag and drop your file here',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
    </script>
@endpush
