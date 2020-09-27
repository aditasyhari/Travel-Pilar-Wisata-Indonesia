<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/logo-pilar-wisata.png') }}">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('layout/css/navbar-footer.css') }}">
    @yield('css')

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <div>
                <img src="{{ asset('img/logo-pilar-wisata.png') }}" class="mr-1">
                <a class="navbar-brand" href="#">Pilar Wisata</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fas fa-bars text-white"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="wisataDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wisata</a>
                        <div class="dropdown-menu bg-primary" aria-labelledby="wisataDropdown">
                            <a href="{{ url('wisata/bali') }}" class="dropdown-item text-primary">Bali</a>
                            <a href="{{ url('wisata/banyuwangi') }}" class="dropdown-item text-primary">Banyuwangi</a>
                            <a href="{{ url('wisata/bromo') }}" class="dropdown-item text-primary">Bromo</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="wisataDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Car</a>
                        <div class="dropdown-menu bg-primary" aria-labelledby="wisataDropdown">
                            <a href="{{ url('cars/bali') }}" class="dropdown-item text-primary">Bali</a>
                            <a href="{{ url('cars/banyuwangi') }}" class="dropdown-item text-primary">Banyuwangi</a>
                            <a href="{{ url('cars/bromo') }}" class="dropdown-item text-primary">Bromo</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('gallery') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('testimonials') }}">Testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div id="google_translate_element" class="img-fluid"></div>


    @yield('content')
    
 
    <section id="contact">
        <div>
            <a href="tel:+6282140145733">
                <i class="fas fa-phone-square-alt"></i>
            </a>
            <a href="https://api.whatsapp.com/send?phone=6282140145733&text=Hello%20Pilar%20Wisata">
                <i class="fab fa-whatsapp-square"></i>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="page-footer font-small pt-4 mt-5">
        <div class="container">
            <h5 class="mb-2 text-center">More info? Contact Me</h5>
            <ul class="list-unstyled list-inline text-center py-1">
                <li class="list-inline-item">
                    <a href="tel:+6282140145733" class="btn btn-outline-danger"><i class="fas fa-phone-alt"></i> Telephone</a>
                </li>
                <li class="list-inline-item">
                    <a href="https://api.whatsapp.com/send?phone=6282140145733&text=Hello%20Pilar%20Wisata" class="btn btn-outline-success"><i class="fab fa-whatsapp"></i> Whatsapp</a>
                </li>
            </ul>
        </div>
        <div class="footer-copyright text-center py-2">© 2020 Copyright:
            <a href="{{ url('/') }}" class="text-dark"> Pilar Wisata</a>
        </div>
    </footer>
    <!-- End Footer -->

    <img src="{{ asset('img/wave-bottom2.png') }}" id="bg-bottom">


    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('layout/js/navbar-footer.js') }}"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    @yield('js')
</body>
</html>