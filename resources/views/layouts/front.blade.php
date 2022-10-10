<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>
    <!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('admin/fonticons/kit.min.css') }}"> 
    <!-- Bootsrap -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrapLux.min.css') }}">    
	    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/custom2.css') }}"> 
	<!-- -->
    <link rel="stylesheet" href="{{ asset('frontend/css/reset2.css') }}">

    <!-- jQuery-->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>  
	
</head>
<body>
	<div class="top-header">
		<nav class="navbar navbar-light bg-light navbar-expand-lg">
			<div class="container-fluid">
			<a class="navbar-brand" href="/"><i class="fas fa-microchip "></i> LegoPC</a>		  
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>		  
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<!-- Left Side Of Navbar -->
				<ul class="navbar-nav me-auto">
				<li class="nav-item">
					<a class="nav-link {{ Request::is('/') ? 'active':'' }}" aria-current="page" href="/">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ Request::is('shop') ? 'active':'' }}" href="/shop">Shop</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Build-A-PC</a>
				</li>
				</ul>
				<!-- Right Side Of Navbar -->
				<ul class="navbar-nav ms-auto">		
					<li class="nav-item">
						<a href="#" class="nav-link">Cart <i class="fas fa-cart-plus"></i></a>
					</li>                  
					<!-- Authentication Links -->
					@guest
						@if (Route::has('login'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
						@endif

						@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
						@endif
					@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }}
							</a>

							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</div>
						</li>
					@endguest
				</ul>	
			</div>
			</div>
		</nav>
	</div>
	<main>
		@yield('content')
	</main>

    <!-- SCRIPTS -->
    <!-- Bootstrap -->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
	<!-- Font Awesome Icons -->
    <script src="{{ asset('admin/fonticons/all.min.js') }}" defer></script> 
	
	
    <!-- Jquery 
    <script src="{{ asset('frontend/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/jquery-migrate-3.0.0.js') }}" defer></script>
	<script src="{{ asset('frontend/js/jquery-ui.min.js') }}" defer></script>-->
	<!-- Popper JS 
	<script src="{{ asset('frontend/js/popper.min.js') }}" defer></script>-->
 
    @stack('scripts') <!-- for future scripts to be added -->
        
</body>
</html>
