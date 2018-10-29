@extends('layouts.master')

@section('content')

@include('flight.search')
@include('flight.search-result')

<section class="section has-bg-img has-light" style="background-image:url('{{asset('img/airline/plane.jpg')}}')">
	<div class="bg-img-inner">
		<div class="container">
			<div class="text">We all know that choosing an appropriate flight ticket can be sometimes a real torture. We will find a perfect flight for you that will become your most comfortable and seamless journey.</div>
		</div>
	</div>
</section>


@endsection