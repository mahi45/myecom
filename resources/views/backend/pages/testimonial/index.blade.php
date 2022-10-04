@extends('backend.layouts.master')

@section('backend_title', 'Testimonial List');

@push('admin_style')
    <style>
        .dataTables_length {
            padding: 15px 0;
        }

        .dataTables_filter {
            padding-top: 15px;
        }
    </style>
@endpush

@section('admin_content')
    <div class="row">
        <div class="col-12 my-4 d-flex justify-content-between">
            <h3>Testimonial List Table</h3>
            <a href="{{ route('testimonial.create') }}"><button class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i>
                    Add New Testimonial</button></a>
        </div>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable">
                    <thead class="bg-dark mt-4">
                        <tr>
                            <th scope="col" class="text-white">#</th>
                            <th scope="col" class="text-white">Last Modified</th>
                            <th scope="col" class="text-white">Client Name</th>
                            <th scope="col" class="text-white">Client Image</th>
                            <th scope="col" class="text-white">Client Designation</th>
                            <th scope="col" class="text-white">Active Status</th>
                            <th scope="col" class="text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonials as $testimonial)
                            <tr>
                                <td>{{ $testimonials->firstItem() + $loop->index }}</td>
                                <td>{{ $testimonial->updated_at->format('d-m-Y') }}</td>
                                <td>{{ $testimonial->client_name }}</td>
                                <td>
                                    <img src="{{ asset('uploads/testimonials') }}/{{ $testimonial->client_image }}"
                                        alt="" class="img-fluid img-responsive img-thumbnail rounded-circle"
                                        style="width: 105px;height: 105px;">
                                </td>
                                <td>{{ $testimonial->client_designation }}</td>
                                <td>
                                    @if ($testimonial->is_active == 1)
                                        <span class="btn btn-primary">
                                            {{ 'Active' }}
                                        </span>
                                    @else
                                        <span class="btn btn-danger">
                                            {{ 'Inactive' }}
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" id="dropdownMenuButton"
                                            type="button" data-toggle="dropdown" aria-expanded="false">Settings</button>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <a href="{{ route('testimonial.edit', $testimonial->client_name_slug) }}"
                                                    class="dropdown-item">
                                                    <i class="fa-regular fa-pen-to-square"></i> Edit
                                                </a>
                                                <form
                                                    action="{{ route('testimonial.destroy', $testimonial->client_name_slug) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item show_confirm">
                                                        <i class="fa-solid fa-trash text-black"></i> Delete</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('admin_script')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();

            $('.show_confirm').click(function(event) {
                let form = $(this).closest('form');
                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            })
        });
    </script>
@endpush
