@extends('backend.layouts.master')

@section('frontend_title', 'Create Category')

@section('admin_content')
    <div class="row">
        <div class="col-12 my-4 d-flex justify-content-between">
            <h3>Create New Category</h3>
            <a href="{{ route('category.index') }}"><button class="btn btn-primary"><i class="fa-solid fa-backward"></i>
                    Category List</button></a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" placeholder="Enter Your Category Title">

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="is_active" checked>
                            <label class="form-check-label" for="is_active">Active/Inactive</label>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-info">Create Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
