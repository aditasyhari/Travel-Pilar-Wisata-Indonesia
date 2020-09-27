@extends('admin.admin')

@section('title', 'Testimonials')

@section('heading', 'Testimonials')

@section('breadcrumb', 'Testimonials')

@section('content')
    <a href="{{ url('admin/testimonials/create') }}" class="btn btn-primary my-3">Add Testimoni</a>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <ul class="list-group">
        <?php $number = 0; ?>
        @foreach( $testimonials as $testimonial )
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php $number++; echo $number. ". "; ?> {{ $testimonial->name }}
                <div>
                    <a href="<?= url("/admin/testimonials/{$testimonial->id}") ?>" class="badge badge-info mr-1">View</a>
                    <a href="<?= url("/admin/testimonials/{$testimonial->id}/edit") ?>" class="badge badge-primary mr-1">Edit</a>
                    <form action="<?= url("/admin/testimonials/{$testimonial->id}") ?>" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                        <button type="submit" onclick="return confirm('Are you sure to delete?')" class="badge badge-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
