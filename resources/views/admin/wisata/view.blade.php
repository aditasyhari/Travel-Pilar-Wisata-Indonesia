@extends('admin.admin')

@section('title', 'Detail Wisata')

@section('heading', 'Detail Wisata')

@section('breadcrumb', 'Detail Wisata')

@section('content')      
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><b>Name : </b>{{ $article->name }}</h5>
            <br>
            <img src="{{ asset('img/img_upload_article/'.$article->file) }}" class="img-fluid mt-3" width="300px">

            <p class="card-text mt-3 text-capitalize">
                <b>Place : </b>
                {{ $article->place }}
            </p>
            
            <p class="card-text mb-5">
                <!-- <b>Description :</b> -->
                {!! $article->description !!}
            </p>

            <a href="{{ url()->previous() }}" class="card-link ml-2">Back</a>
        </div>
    </div>
@endsection
