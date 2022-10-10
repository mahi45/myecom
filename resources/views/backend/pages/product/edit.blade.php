@extends('backend.layouts.master')

@section('backend_title', 'Edit Product')

@push('admin_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" />
@endpush

@section('admin_content')
    <div class="row">
        <div class="col-12 my-4 d-flex justify-content-between">
            <h3>Edit Product</h3>
            <a href="{{ route('product.index') }}"><button class="btn btn-primary"><i class="fa-solid fa-backward"></i>
                    Product List</button></a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="category_name" class="form-label">Category Name</label>
                            <select name="category_id" id="category_id" class="form-select">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($product->category_id == $category->id) selected @endif>
                                        {{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" value="{{ $product->name }}"
                                class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                placeholder="Enter Your Product Name">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="product_code" class="form-label">Product Code</label>
                            <input type="text" value="{{ $product->product_code }}"
                                class="form-control @error('product_code') is-invalid @enderror" id="product_code"
                                name="product_code" placeholder="Enter Your Product Code">

                            @error('product_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="product_price" class="form-label">Product Price</label>
                            <input type="number" value="{{ $product->product_price }}"
                                class="form-control @error('product_price') is-invalid @enderror" id="product_price"
                                name="product_price" placeholder="Enter Your Product price" min="0">

                            @error('product_price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="product_image" class="form-label">Product Image</label>
                            <input type="file" class="form-control dropify" data-max-file-size="1M"
                                data-default-file="{{ asset('uploads/products') }}/{{ $product->product_image }}"
                                data-errors-position="outside" data-allowed-file-extensions="jpg png jpeg"
                                name="product_image">
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active"
                                @if ($product->is_active) checked @endif>
                            <label class="form-check-label" for="is_active">Active/Inactive</label>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-info">Update Product</button>
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
