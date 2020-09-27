@extends('admin.admin')

@section('title', 'Add Image')

@section('heading', 'Add Image')

@section('breadcrumb', 'Add Image')

@section('content')
    <form method="post" action="{{ url('/admin/gallery') }}" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @endif" id="name" placeholder="input name" name="name" value="{{ old('name') }}">
            @error('name')
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
