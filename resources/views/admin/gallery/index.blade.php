@extends('admin.admin')

@section('title', 'Gallery')

@section('heading', 'Gallery')

@section('breadcrumb', 'Gallery')

@section('content')
    <a href="{{ url('admin/gallery/create') }}" class="btn btn-primary my-3">Add Image</a>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <ul class="list-group">
        <?php $number = 0; ?>
        @foreach( $galleries as $gallery )
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php $number++; echo $number. ". "; ?> {{ $gallery->name }}
                <img class="img-fluid image" src="{{ asset('img/img_upload_gallery/'.$gallery->file) }}" width="100px">
                <div>
                    <a href="<?= url("/admin/gallery/{$gallery->id}") ?>" class="badge badge-info mr-1">View</a>
                    <a href="<?= url("/admin/gallery/{$gallery->id}/edit") ?>" class="badge badge-primary mr-1">Edit</a>
                    <form action="<?= url("/admin/gallery/{$gallery->id}") ?>" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                        <button type="submit" onclick="return confirm('Are you sure to delete?')" class="badge badge-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
