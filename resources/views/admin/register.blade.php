@extends('admin.admin')

@section('title', 'Register')

@section('heading', 'New Admin')

@section('breadcrumb', 'Register')

@section('content')
    <form method="post" action="{{ url('/admin/registerPost') }}" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @endif" id="name" placeholder="input name" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @endif" id="email" placeholder="Input Email" name="email" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @endif" id="password" placeholder="Password" name="password" value="{{ old('password') }}">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Confirm Password</label>
            <input type="password" class="form-control @error('confirmation') is-invalid @endif" id="confirmation" placeholder="Confirm Password" name="confirmation" value="{{ old('confirmation') }}">
            @error('confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
@endsection
