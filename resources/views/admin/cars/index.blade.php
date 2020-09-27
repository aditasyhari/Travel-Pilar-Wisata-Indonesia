@extends('admin.admin')

@section('title', 'Cars')

@section('heading', 'Cars')

@section('breadcrumb', 'Cars')

@section('content')
    <a href="{{ url('admin/cars/create') }}" class="btn btn-primary my-3">Add Car</a>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <ul class="list-group">
        <?php $number = 0; ?>
        @foreach( $cars as $car )
            <li class="list-group-item d-flex justify-content-between align-items-center">
                
                <?php $number++; echo $number. ". "; ?> {{ $car->name }}
                <img class="img-fluid image" src="{{ asset('img/img_upload_car/'.$car->file) }}" width="100px">

                <div>
                    <a href="<?= url("/admin/cars/{$car->id}") ?>" class="badge badge-info mr-1">View</a>
                    <a href="<?= url("/admin/cars/{$car->id}/edit") ?>" class="badge badge-primary mr-1">Edit</a>
                    <form action="<?= url("/admin/cars/{$car->id}") ?>" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                        <button type="submit" onclick="return confirm('Are you sure to delete?')" class="badge badge-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
