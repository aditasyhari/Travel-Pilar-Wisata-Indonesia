@extends('users.user')

@section('title', 'About | Pilar Wisata Indonesia')

@section('css')
    <link rel="stylesheet" href="{{ asset('layout/css/about.css') }}">
@endsection

@section('content')
<div style="background-image: url('{{ asset('img/bg-gallery2.jpg')}}');" id="bg-about"></div>

<div class="container">
    <div class="row">
        <div class="col" id="content-about">
            <img src="{{ asset('img/logo-pilar-wisata.png') }}" class="img-fluid d-block mx-auto">
            <h3 class="text-uppercase text-primary text-center">pilar wisata indonesia</h3>
            <div class="text-about">
                <p>Kami adalah penyedia jasa <b>Rental Mobil</b> dan <b>Tour Travel</b> yang sudah melayani selama 15 tahun. Kami beralamatkan di Perumahan Griya Indah Pengatigan, Rogojampi Banyuwangi. Untuk Tour Travel kami siap melayani di daerah Bali, Banyuwangi, dan Bromo. Untuk Rental Mobil kami siap melayani di seluruh Indonesia. Dengan didukung armada yang kami miliki cukup memadai untuk explore wisata-wisata di Bali, Banyuwangi, dan Bromo. Dan jangan kuatir dengan servis pelayanan kami, mobil-mobil kami terawat sangat baik, driver kami yang handal dan berpengalaman, serta kami tawarkan harga yang sesuai dengan kantong anda semua.</p>
            </div>
            <p class="text-center text-quote">- Kenyamanan anda prioritas utama kami -</p>
        </div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col-10">
            <div class="video-content justify-content-center align-items-center">
                <video class="mx-1 video" width="400px" height="350px" controls>
                    <source src="{{ asset('video/pilar-wisata1.mp4') }}">
                </video>
                <video class="mx-1 video" width="400px" height="350px" controls>
                    <source src="{{ asset('video/pilar-wisata2.mp4') }}">
                </video>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection