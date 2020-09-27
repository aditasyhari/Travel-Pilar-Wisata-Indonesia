@extends('admin.admin')

@section('title', 'Detail Image')

@section('heading', 'Detail Image')

@section('breadcrumb', 'Detail Image')

@section('content')      
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><b>Name : </b>{{ $gallery->name }}</h5><br>

            <img src="{{ asset('img/img_upload_gallery/'.$gallery->file) }}" class="img-fluid mt-3" width="300px"><br>

            <a href="{{ url()->previous() }}" class="card-link ml-2">Back</a>
        </div>
    </div>
@endsection
