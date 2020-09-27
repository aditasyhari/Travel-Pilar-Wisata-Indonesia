@extends('admin.admin')

@section('title', 'Detail Testimonial')

@section('heading', 'Detail Testimonial')

@section('breadcrumb', 'Detail Testimonial')

@section('content')      
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><b>Name : </b>{{ $testimonial->name }}</h5>

            <img src="{{ asset('img/img_upload_testimonial/'.$testimonial->file) }}" class="img-fluid mt-3" width="300px">

            <p class="card-text mt-3 text-capitalize">
                <b>Description : </b>
                {!! $testimonial->description !!}
            </p>
            
            <p class="card-text mb-5">
                <b>From : </b>
                {{ $testimonial->from }}
            </p>

            <a href="{{ url()->previous() }}" class="card-link ml-2">Back</a>
        </div>
    </div>
@endsection
