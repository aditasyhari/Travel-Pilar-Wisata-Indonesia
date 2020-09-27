@extends('users.user')

@section('title')
    {{ $article->name }}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('layout/css/detail-wisata.css') }}">
@endsection

@section('content')
<div style="background-image: url('{{ asset('img/bg-article2.jpg')}}');" id="bg-wisata"></div>
<div class="bg-overlay"></div>
<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4">{{ $article->name }}</h1>

            <!-- Author -->
            <p class="lead">
            oleh
            <a href="{{ url('about') }}">Pilar Wisata</a>
            </p>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded mb-4" src="{{ asset('img/img_upload_article/'.$article->file) }}">

            <!-- Post Content -->
            {!! $article->description !!}

            <hr>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4 side-widget">

            <!-- Search Widget -->
            <div class="my-4">
                <img src="{{ asset('img/pilar-wisata.png') }}" class="img-fluid">
            </div>

            <!-- Categories Widget -->
            <div class="my-5">
                <h5 class="card-header">Wisata</h5>
                <div class="card-body">
                    <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="{{ url('wisata/bali') }}">Bali</a>
                            </li>
                            <li>
                                <a href="{{ url('wisata/banyuwangi') }}">Banyuwangi</a>
                            </li>
                            <li>
                                <a href="{{ url('wisata/bromo') }}">Bromo</a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="my-5">
                <h5 class="card-header">Baca Juga</h5>

                @php
                    $thumbArticles = DB::table('articles')->skip(0)->take(5)->inRandomOrder()->get()
                @endphp

                @foreach($thumbArticles as $thumbArticle)
                <div class="card mt-1 mb-3">

                    <a href="<?= url("/wisata/{$thumbArticle->place}/{$thumbArticle->slug}") ?>">
                        <div class="bg-dark text-white zoom">
                            <img src="{{ asset('img/img_upload_article/'.$thumbArticle->file) }}" class="card-img">
                            <div class="overlay"></div>
                            <div class="card-img-overlay">
                                <h5 class="card-title">{{ $thumbArticle->name }}</h5>
                                <p class="card-text text-capitalize"><i class="fas fa-map-marker-alt"></i> {{ $thumbArticle->place }}</p>
                                <p class="card-text author">Oleh Pilar Wisata</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

@endsection