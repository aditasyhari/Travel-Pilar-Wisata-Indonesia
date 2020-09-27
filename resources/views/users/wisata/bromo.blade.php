@extends('users.wisata.wisata')

@section('content-wisata')
    @foreach($articles as $article)
        <div class="col-md-4 mb-5 zoom">
            <a href="<?= url("/wisata/{$article->place}/{$article->slug}") ?>">
                <div class="card bg-dark text-white">
                    <img src="{{ asset('img/img_upload_article/'.$article->file) }}" class="card-img">
                    <div class="overlay"></div>
                    <div class="card-img-overlay">
                        <h5 class="card-title">{{ $article->name }}</h5>
                        <p class="card-text text-capitalize"><i class="fas fa-map-marker-alt"></i> {{ $article->place }}</p>
                        <p class="card-text author">Oleh Pilar Wisata</p>
                        <div class="corner-bottom">Bromo</div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
@endsection