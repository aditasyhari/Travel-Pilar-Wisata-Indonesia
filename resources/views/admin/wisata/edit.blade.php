@extends('admin.admin')

@section('title', 'Edit Wisata')

@section('heading', 'Edit Wisata')

@section('breadcrumb', 'Edit Wisata')

@section('content')
    <form method="post" action="<?= url("/admin/wisata/{$article->id}") ?>" enctype="multipart/form-data">
    @method('put')
    @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @endif" id="name" placeholder="input name" name="name" value="{{ $article->name }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control summernote @error('description') is-invalid @endif" id="description" name="description" placeholder="Description your tour">{{ $article->description }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <select name="place" class="form-control" value="{{ $article->place }}">
                <option value ="bali" {{ $article->place == 'bali' ? 'selected' : '' }}>Bali</option>
                <option value ="banyuwangi" {{ $article->place == 'banyuwangi' ? 'selected' : '' }}>Banyuwangi</option>
                <option value ="bromo" {{ $article->place == 'bromo' ? 'selected' : '' }}>Bromo</option>
            </select>
        </div>

        <div class="form-group">
            <p>
                <b for="file">Input image</b><br>
                <span class="lead text-muted">
                    <small>Jika gambar tidak diganti, abaikan form ini!</small>
                </span>
            </p>
            <input type="file" name="file" id="file" value="{{ $article->file }}">
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="{{ url()->previous() }}" class="ml-2">Back</a>
    </form>
@endsection
