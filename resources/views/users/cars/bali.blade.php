@extends('users.cars.cars')

@section('content-cars')
    @foreach($cars as $car)
        <div class="col-md-4 mb-5">
            <div class="card" style="background-image: url('{{ asset('img/login/wave2.png')}}');">
                <div class="corner"><p>Bali</p></div>
                <div class="img-wrapper">
                    <img src="{{ asset('img/img_upload_car/'.$car->file) }}" alt="">
                </div>
                <div class="content-wrapper">
                    <h3 class="title">{{ $car->name }}</h3>
                    <div class="desc">
                        <p>
                            <span>Capacity {{ $car->capacity }} Seat</span><br>
                            <span>Rp {{ number_format($car->priceBali, 0, ',' , '.') }} / Day</span>
                        </p>
                    </div>

                    <div class="icons">
                        <span class="icon icon1"><i class="fas fa-phone-square-alt mr-2"></i></span>
                        <span class="icon icon2"><i class="fab fa-whatsapp-square"></i></span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection