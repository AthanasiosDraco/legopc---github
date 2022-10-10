@extends('layouts.front')

@section('title')
	Welcome to LegoPC
@endsection

@section('content')
	
	<div class="container-fluid d-none d-lg-block">
		<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">		
			<div class="carousel-inner">
			<div class="carousel-item active" data-bs-interval="3000">
				<img src="{{ asset('assets/carousel/banner1.jpg') }}" class="d-block w-100" alt="">				
			</div>
			<div class="carousel-item" data-bs-interval="3000">
				<img src="{{ asset('assets/carousel/banner2.jpg') }}" class="d-block w-100" alt="">
			</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
	

	
@endsection