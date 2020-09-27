@extends('admin.admin')

@section('title', 'Detail Car')

@section('heading', 'Detail Car')

@section('breadcrumb', 'Detail Car')

@section('content')      
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><b>Name : </b>{{ $car->name }}</h5>

            <img src="{{ asset('img/img_upload_car/'.$car->file) }}" class="img-fluid mt-3" width="300px">

            <p class="card-text mt-3 text-capitalize">
                <b>Price Bali : </b>
                Rp {{ $car->priceBali }}
            </p>

            <p class="card-text mt-3 text-capitalize">
                <b>Price Banyuwangi : </b>
                Rp {{ $car->priceBanyuwangi }}
            </p>
            
            <p class="card-text mb-5">
                <b>Capacity : </b>
                {{ $car->capacity }}
            </p>

            <a href="{{ url()->previous() }}" class="card-link ml-2">Back</a>
        </div>
    </div>
@endsection
