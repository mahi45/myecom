@extends('backend.layouts.master')

@section('backend_title', 'Create Testimonial')

@push('admin_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" />
@endpush

@section('admin_content')
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <h3>Create Testimonial</h3>
            <a href="{{ route('testimonial.index') }}"><button class="btn btn-primary"><i class="fa-solid fa-backward"></i>
                    Testimonial
                    List</button></a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="client_name" class="form-label">Client Name</label>
                            <input type="text" class="form-control @error('client_name') is-invalid @enderror"
                                id="client_name" name="client_name" placeholder="Enter Your Client Name">

                            @error('client_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_designation" class="form-label">Client Designation</label>
                            <input type="text" class="form-control @error('client_designation') is-invalid @enderror"
                                id="client_designation" name="client_designation"
                                placeholder="Enter Your Client Designation">

                            @error('client_designations')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_message" class="form-label">Client Message</label>
                            <textarea name="client_message" id="client_designation" cols="30" rows="10" class="form-control"
                                @error('client_message') is-invalid @enderror></textarea>

                            @error('client_desigclient_messagenations')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_image" class="form-label">Client Image</label>
                            <input type="file" class="form-control dropify" data-max-file-size="1M"
                                data-errors-position="outside" data-allowed-file-extensions="jpg png jpeg"
                                name="client_image">
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="is_active" checked>
                            <label class="form-check-label" for="is_active">Active/Inactive</label>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-info">Create Testimonial</button>
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
                'default': 'Drag and drop a file here or click'
            }
        });
    </script>
@endpush
