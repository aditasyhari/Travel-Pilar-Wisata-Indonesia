@extends('admin.admin')

@section('title', 'Add new tour')

@section('heading', 'Add new Tour')

@section('breadcrumb', 'Add Wisata')

@section('content')
    <form method="post" action="{{ url('/admin/wisata/all') }}" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @endif" id="name" placeholder="input name" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control summernote @error('description') is-invalid @endif" id="description" rows="10" name="description" placeholder="Description your tour">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <select name="place" class="form-control" value="{{ old('place') }}">
                <option value ="bali">Bali</option>
                <option value ="banyuwangi">Banyuwangi</option>
                <option value ="bromo">Bromo</option>
            </select>
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
