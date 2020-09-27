@extends('admin.admin')

@section('title', 'Add Car')

@section('heading', 'Add Car')

@section('breadcrumb', 'Add Car')

@section('content')
    <form method="post" action="{{ url('/admin/cars') }}" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @endif" id="name" placeholder="input name" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Price Bali</label>
            <input type="text" class="form-control @error('priceBali') is-invalid @endif" id="priceBali" placeholder="Rp" name="priceBali" value="{{ old('priceBali') }}">
            @error('priceBali')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Price Banyuwangi</label>
            <input type="text" class="form-control @error('priceBanyuwangi') is-invalid @endif" id="priceBanyuwangi" placeholder="Rp" name="priceBanyuwangi" value="{{ old('priceBanyuwangi') }}">
            @error('priceBanyuwangi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Capacity</label>
            <input type="text" class="form-control @error('capacity') is-invalid @endif" id="capacity" placeholder="input capacity" name="capacity" value="{{ old('capacity') }}">
            @error('capacity')
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
