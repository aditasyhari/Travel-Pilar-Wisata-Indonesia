<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="{{ asset('img/logo-pilar-wisata.png') }}" type="image/x-icon">
	<title>Login | Pilar Wisata Indonesia</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('layout/css/login.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="{{ asset('img/login/wave2.png') }}">
	<div class="container">
		<div class="img">
			<img src="{{ asset('img/login/bg-ride.svg') }}">
		</div>
		<div class="login-content">
            <form action="{{ url('admin/loginPost') }}" method="post">
                @csrf
				<img src="{{ asset('img/login/logo-pilar-wisata.png') }}">
				<h2 class="title">Welcome</h2>
				@if(\session()->has('alert'))
					<div class="alert alert-danger">
						<div>{{session()->get('alert')}}</div>
					</div>
				@endif
				@if(\session()->has('alert-success'))
					<div class="alert alert-success">
						<div>{{session()->get('alert-success')}}</div>
					</div>
				@endif
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" class="input" name="email" id="email">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password" id="password">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>

	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('layout/js/login.js') }}"></script>
</body>
</html>
