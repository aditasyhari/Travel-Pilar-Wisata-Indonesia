@extends('admin.admin')

@section('title', 'Add Testimonial')

@section('heading', 'Add Testimonial')

@section('breadcrumb', 'Add Testimonial')

@section('content')
    <form method="post" action="{{ url('/admin/testimonials') }}" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @endif" id="name" placeholder="input name" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Description</label>
            <textarea class="form-control @error('description') is-invalid @endif" id="description" placeholder="Description" name="description">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">From</label>
            <input type="text" class="form-control @error('from') is-invalid @endif" id="from" placeholder="from" name="from" value="{{ old('from') }}">
            @error('from')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="file">Input image</label><br>
            <input type="file" name="file" id="file" class="@error('file') is-invalid @endif">
            @error('file')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
@endsection
