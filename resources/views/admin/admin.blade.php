<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{ url('img/logo-pilar-wisata.png') }}" type="image/x-icon">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('layout/about.css') }}">
    @yield('css')
    <!-- <link rel="stylesheet" href="{{ asset('layout/css/summernote.css') }}"> -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet"></link>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script> -->

</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- sidebar -->
        @include('admin/sidebar')
        <!-- end sidebar -->

        <!-- Content -->
        <div class="content-wrapper">
            <!-- Content Header -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm"></div>
                        <div class="col-sm">
                            <h1 class="m-0 text-dark text-center">@yield('heading')</h1>
                        </div>
                        <div class="col-sm">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active">@yield('breadcrumb')</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm"></div>
                        <div class="col-sm-10 mb-3">@yield('content')</div>
                        <div class="col-sm"></div>
                    </div>
                </div>
            </div>
            <!-- End Main content -->
        </div>
        <!-- End Content -->


        <!-- Footer -->
        @include('admin/footer')
        <!-- end footer -->
    </div>



    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('layout/js/summernote.js') }}"></script>
    @yield('js')
    <script>
    $(document).ready(function() {
        $('#description').summernote({
            placeholder: "Desciption your tour...",
            height: '300'
        });
    });
</script>

</body>
</html>
