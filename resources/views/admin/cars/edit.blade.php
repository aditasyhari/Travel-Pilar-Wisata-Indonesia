@extends('admin.admin')

@section('title', 'Edit Car')

@section('heading', 'Edit Car')

@section('breadcrumb', 'Edit Car')

@section('content')
    <form method="post" action="<?= url("/admin/cars/{$car->id}") ?>" enctype="multipart/form-data">
    @method('put')
    @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @endif" id="name" placeholder="input name" name="name" value="{{ $car->name }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Price Bali</label>
            <input type="text" class="form-control @error('priceBali') is-invalid @endif" id="priceBali" placeholder="Rp" name="priceBali" value="{{ $car->priceBali }}">
            @error('priceBali')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Price Banyuwangi</label>
            <input type="text" class="form-control @error('priceBanyuwangi') is-invalid @endif" id="priceBanyuwangi" placeholder="Rp" name="priceBanyuwangi" value="{{ $car->priceBanyuwangi }}">
            @error('priceBanyuwangi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Capacity</label>
            <input type="text" class="form-control @error('capacity') is-invalid @endif" id="capacity" placeholder="input capacity" name="capacity" value="{{ $car->capacity }}">
            @error('capacity')
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
            <input type="file" name="file" id="file" class="@error('file') is-invalid @endif" value="{{ $car->file }}">
            @error('file')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="{{ url()->previous() }}" class="ml-2">Back</a>
    </form>
@endsection
