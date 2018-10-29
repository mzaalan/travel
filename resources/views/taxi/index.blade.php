@extends('layouts.master')

@section('content')

	@include('taxi.search')
	@include('taxi.search-result')

	<section class="section has-bg-img has-dark" style="background-image:url('assets/img/taxi/taxi.jpg')">
		<div class="bg-img-inner">
			<div class="container">
				<div class="text">Nothing feels worse than landing in a foreign country and not even knowing how to get to your hotel. With RoundBooking you can avoid this unpleasant situation as we offer you transfer services from airport and directly to your accommodation.</div>
			</div>
		</div>
	</section>
	
@endsection