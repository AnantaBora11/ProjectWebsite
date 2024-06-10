@extends('layout.other.template1.index')

@section('template1')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            
            @if (session('status'))
                <div class="alert alert-succes">{{ session('status') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Categories
                        <a href="{{ url('categories') }}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('categories/create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label>name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" id="form-control" rows="3">{{ old('description') }}</textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label>Is Active</label>
                            <input type="checkbox" name="is_active" {{ old('is_active') == true ? checked:''}}>
                            @error('is_active') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb3">
                            <label>Upload File/Image</label>
                            <input type="file" name="image" id="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection