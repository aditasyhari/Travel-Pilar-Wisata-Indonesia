@extends('admin.admin')

@section('title', 'Wisata Banyuwangi')

@section('heading', 'Wisata - Banyuwangi')

@section('breadcrumb', 'Wisata Banyuwangi')

@section('content')

    <ul class="list-group mt-3">
        <?php $number = 0 ?>
        @foreach( $articles as $article )
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php $number++; echo $number. ". "; ?> {{ $article->name }}
                <div>
                    <a href="<?= url("/admin/wisata/{$article->id}") ?>" class="badge badge-info mr-1">View</a>
                    <a href="<?= url("/admin/wisata/{$article->id}/edit") ?>" class="badge badge-primary mr-1">Edit</a>
                    <form action="<?= url("/admin/wisata/{$article->id}") ?>" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                        <button type="submit" onclick="return confirm('Are you sure to delete?')" class="badge badge-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
