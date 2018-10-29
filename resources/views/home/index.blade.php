@extends('layouts.master')

@section('content')
    @if(session()->has('bookingConfirmed'))
        {{ session('success')}}
    @endif
	<section class="banner" data-filter="blur" data-image="{{asset('img/banner.jpg')}}">
	    <div class="content">
	        <div class="container">
	            <div class="h2">Explore The World</div>
	            <div class="h1">With Us</div>
	        </div>
	    </div>
	</section>

	@include('home.search')

	@include('home.trending')

	@include('home.book')

	@include('home.testimonial')


@endsection
