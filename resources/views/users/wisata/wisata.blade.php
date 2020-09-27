@extends('users.user')

@section('title', 'Wisata | Pilar Wisata Indonesia')

@section('css')
    <link rel="stylesheet" href="{{ asset('layout/css/wisata.css') }}">
@endsection

@section('content')
<div style="background-image: url('{{ asset('img/bg-article2.jpg')}}');" id="bg-wisata"></div>
<div class="bg-overlay"></div>
<div class="container">
    <div class="row card-row">
        @yield('content-wisata')
    </div>
</div>
@endsection