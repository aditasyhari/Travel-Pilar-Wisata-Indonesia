@extends('users.user')

@section('title', 'Gallery | Pilar Wisata Indonesia')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="{{ asset('layout/css/gallery.css') }}">
@endsection

@section('content')
<div style="background-image: url('{{ asset('img/bg-gallery2.jpg')}}');" id="bg-gallery"></div>
<section class="gallery-block compact-gallery">
    	<div class="container">
    		<div class="row no-gutters card-row">
                @foreach( $galleries as $gallery )
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
    				<a class="lightbox" href="{{ asset('img/img_upload_gallery/'.$gallery->file) }}">
    					<img class="img-fluid image" src="{{ asset('img/img_upload_gallery/'.$gallery->file) }}">
    					<!-- <span class="description">
    						<span class="description-heading">{{ $gallery->name }}</span>
						</span> -->
						<span class="description">
    						<span class="description-heading">Click to view</span>
    					</span>
    				</a>
                </div>
                @endforeach
            </div>
        </div>
</section>

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
	    baguetteBox.run('.compact-gallery',{animation:'slideIn'});
	</script>
@endsection