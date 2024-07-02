@extends('layout.other.template1.index')

@section('template1')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Categories
                        <a href="{{ url('categories/create') }}" class="btn btn-primary float-end">Add Category</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        @if ($item->image)
                                            <img src="{{ $item->image }}" alt="{{ $item->name }}" class="img-fluid" width="40px" height="40px">
                                        @endif
                                    </td>
                                    <td>
                                        @unless ($item->is_active)
                                            In-Active
                                        @else
                                            Active
                                        @endunless
                                    </td>
                                    <td>
                                        <a href="{{ url('categories/'.$item->id.'/edit') }}" class="btn btn-success mx-2">Edit</a>
                                        <a href="{{ url('categories/'.$item->id.'/delete') }}" class="btn btn-danger mx-1" onclick="return confirm('Are you sure you want to delete this category?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
