@extends('users.user')

@section('title', 'Testimonials | Pilar Wisata Indonesia')

@section('css')
    <link rel="stylesheet" href="{{ asset('layout/css/testimonials.css') }}">
@endsection

@section('content')
<div style="background-image: url('{{ asset('img/testimonial.jpg')}}');" id="bg-testimonials"></div>
<div class="container">
    <div class="item">
        <div class="row card-row">
            @foreach($testimonials as $testimonial)
            <div class="col-sm-6">
                <div class="testimonial">
                    <p>{!! $testimonial->description !!}</p>
                </div>
                <div class="media">
                    <div class="media-left d-flex mr-3">
                        <img class="img-fluid image" src="{{ asset('img/img_upload_testimonial/'.$testimonial->file) }}">										
                    </div>
                    <div class="media-body">
                        <div class="overview">
                            <div class="name"><b>{{ $testimonial->name }}</b></div>
                            <div class="details">Dari {{ $testimonial->from }}</div>
                        </div>										
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
