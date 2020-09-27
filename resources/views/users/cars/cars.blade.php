@extends('users.user')

@section('title', 'Cars | Pilar Wisata Indonesia')

@section('css')
    <link rel="stylesheet" href="{{ asset('layout/css/cars.css') }}">
@endsection

@section('content')
<div style="background-image: url('{{ asset('img/road.jpg')}}');" id="bg-car"></div>
<div class="container">
    <div class="row card-row">
        @yield('content-cars')
    </div>
</div>
@endsection