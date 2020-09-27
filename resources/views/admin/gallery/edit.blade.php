@extends('admin.admin')

@section('title', 'Edit Image')

@section('heading', 'Edit Image')

@section('breadcrumb', 'Edit Image')

@section('content')
    <form method="post" action="<?= url("/admin/gallery/{$gallery->id}") ?>" enctype="multipart/form-data">
    @method('put')
    @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @endif" id="name" placeholder="input name" name="name" value="{{ $gallery->name }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <p>
                <b for="file">Input image</b><br>
                <span class="lead text-muted">
                    <small>Jika gambar tidak diganti, abaikan form ini!</small>
                </span>
            </p>
            <input type="file" name="file" id="file" class="@error('file') is-invalid @endif" value="{{ $gallery->file }}">
            @error('file')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="{{ url()->previous() }}" class="ml-2">Back</a>
    </form>
@endsection
