@extends('backend.layouts.master')

@section('frontend_title', 'Category');

@section('admin_content')
    <div class="row">
        <div class="col-12 my-4 d-flex justify-content-between">
            <h3>Category List Table</h3>
            <a href="{{ route('category.create') }}"><button class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i>
                    Add New Category</button></a>
        </div>
        <div class="col-12">
            <div class="table-responsive my-2">
                <table class="table table-striped table-bordered">
                    <thead class="bg-dark">
                        <tr>
                            <th scope="col" class="text-white">#</th>
                            <th scope="col" class="text-white">Last Modified</th>
                            <th scope="col" class="text-white">Category Name</th>
                            <th scope="col" class="text-white">Category Slug</th>
                            <th scope="col" class="text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $categories->firstItem() + $loop->index }}</td>
                                <td>{{ $category->updated_at->format('d-m-Y') }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" id="dropdownMenuButton"
                                            type="button" data-toggle="dropdown" aria-expanded="false">Settings</button>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <a href="" class="dropdown-item">
                                                    <i class="fa-regular fa-pen-to-square"></i> Edit
                                                </a>
                                                <a href="" class="dropdown-item">
                                                    <i class="fa-solid fa-trash"></i> Delete
                                                </a>
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
