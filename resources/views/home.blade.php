@extends('users.user')

@section('title', 'Pilar Wisata Indonesia')

@section('css')
    <link rel="stylesheet" href="{{ asset('layout/css/home.css') }}">
@endsection

@section('content')

<section>
    <div id="home">
        <video src="{{ asset('video/travel.mp4') }}" id="home-bg-video" autoplay muted loop></video>
    </div>

    <div id="home-overlay">
        <div class="container">
            <div id="home-content-inner" class="text-center">
                <div id="home-heading">
                    <img src="{{ asset('img/pilar-wisata.png') }}" class="img-fluid">
                </div>
                <!-- <div id="home-text">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod iste, deserunt voluptas, culpa reiciendis illo aperiam enim dolor accusantium tempore perferendis sapiente ipsam. Cum vitae ab, voluptatibus quaerat provident ducimus.
                    </p>
                </div> -->
            </div>
        </div>
    </div>
    <span id="dark-overlay"></span>
</section>

<section id='wisata' style="background-image: url('{{ asset('img/wave4.png')}}');">
    <div class="container text-white">
        <div id="heading">
            <h3>Wisata</h3>
            <p>3B (Bali, Banyuwangi, Bromo)</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/bali.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-sm-block d-md-block">
                                <h5>BALI</h5>
                                <p>Pulau seribu dewata adalah sebutan bagi Bali. Dan tentunya Bali memiliki banyak sekali tempat wisata yang sangat memanjakan mata.</p>
                                <a href="{{ url('wisata/bali') }}" class="btn btn-primary">Show More</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/bwi3.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-sm-block d-md-block">
                                <h5>BANYUWANGI</h5>
                                <p>The Sunrise of Java, itu julukan bagi Banyuwangi. Sama seperti Bali, Banyuwangi juga memiliki banyak sekali tempat wisata yang patut dikunjungi.</p>
                                <a href="{{ url('wisata/banyuwangi') }}" class="btn btn-primary">Show More</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/bromo.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-sm-block d-md-block">
                                <h5>BROMO</h5>
                                <p>Gunung yang berada pada provinsi Jawa Timur ini, lebih tepatnya berada pada empat wilayah kabupaten, yakni Probolinggo, Pasuruan, Lumajang, Malang.</p>
                                <a href="{{ url('wisata/bromo') }}" class="btn btn-primary">Show More</a>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div id="threeb">
                    <h1><a href="{{ url('wisata/bali') }}"><span>B</span>ali</a></h1>
                    <h1><a href="{{ url('wisata/banyuwangi') }}"><span>B</span>anyuwangi</a></h1>
                    <h1><a href="{{ url('wisata/bromo') }}"><span>B</span>romo</a></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="service">
    <div class="container text-sm">
        <div id="heading" class="text-center">
            <h5>Mengapa harus memilih layanan kami ?</h5>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 offset-md-1 my-auto">
                <img src="{{ asset('img/trusted.png') }}" class="img-thumbnail img-fluid">
            </div>
            <div class="col-md-6 my-auto">
                <h5><b>Terpercaya</b></h5>
                <p>Kami sudah berdiri selama 15 tahun, dan tentunya kami sudah melayani pelanggan dari berbagai negara. Semoga bisa menjadi partner yang saling menguntungkan</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4 offset-md-1 my-auto">
                <img src="{{ asset('img/car.png') }}" class="img-thumbnail img-fluid">
            </div>
            <div class="col-md-6 my-auto">
                <h5><b>Banyak Pilihan Mobil</b></h5>
                <p>Kami menyediakan berbagai jenis mobil, jadi anda tidak perlu kawatir bahkan anda bisa request mobil yang anda inginkan, kami siap menyediakannya demi kenyamanan anda</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4 offset-md-1 my-auto">
                <img src="{{ asset('img/money.png') }}" class="img-thumbnail img-fluid">
            </div>
            <div class="col-md-6 my-auto">
                <h5><b>Harga Terjangkau</b></h5>
                <p>Harga layanan kami sangat terjangkau dan tentunya pas dikantong</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4 offset-md-1 my-auto">
                <img src="{{ asset('img/person.png') }}" class="img-thumbnail img-fluid">
            </div>
            <div class="col-md-6 my-auto">
                <h5><b>Driver Handal</b></h5>
                <p>Driver yang kami miliki tentunya sudah berpengalaman dan handal. Driver kami dapan diandalkan disemua medan track, dan tentunya paham betul wisata-wisata Banyuwangi, Bali, dan Bromo</p>
            </div>
        </div>
    </div>
</section>

<section id="testimoni">
    <div class="container">
        <div class="row pb-3">
            <div class="col-sm-12">			
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <h2>Customer <b>Testimonials</b></h2>
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>   
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="{{ asset('img/testi-female.png') }}" alt="">										
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Paula Wilson</b></div>
                                                <div class="details">Dari Italy</div>
                                            </div>										
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="{{ asset('img/testi-male.png') }}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Antonio Moreno</b></div>
                                                <div class="details">Dari Perancis</div>
                                            </div>										
                                        </div>
                                    </div>
                                </div>
                            </div>			
                        </div>
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="{{ asset('img/testi-male.png') }}" alt="">										
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Michael Holz</b></div>
                                                <div class="details">Dari Singapore</div>
                                            </div>										
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="{{ asset('img/testi-female.png') }}" alt="">										
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Mary Saveley</b></div>
                                                <div class="details">Dari Australia</div>
                                            </div>										
                                        </div>
                                    </div>
                                </div>
                            </div>			
                        </div>
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="{{ asset('img/testi-male.png') }}" alt="">										
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Aditya R</b></div>
                                                <div class="details">Dari Tetangga pencari wifi GRATIS :v</div>
                                            </div>										
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="{{ asset('img/testi-male.png') }}" alt="">										
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Firman Alfa</b></div>
                                                <div class="details">Dari Tetangga pencari wifi GRATIS :v</div>
                                            </div>										
                                        </div>
                                    </div>
                                </div>
                            </div>			
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
    <script src="{{ asset('layout/js/home.js') }}"></script>
@endsection