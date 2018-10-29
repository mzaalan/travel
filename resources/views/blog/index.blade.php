@extends('layouts.master')

@section('content')
	<section class="section blog">
		<div class="container">
			<div class="section-title">Blog</div>
			<div class="bx-bs">
				<div class="row">
					<div class="col-sm-5 col-md-4 col-lg-3">
						<div class="card"><img class="card-img" src="{{asset('img/blog/1.jpg')}}"></div>
					</div>
					<div class="col-sm-7 col-md-8 col-lg-9">
						<div class="blog-title">How much should my luggage weigh? Step-by-step guide by RoundBooking.</div>
						<div class="blog-date">30 May, 2018</div>
						<p>Having problems with overweight luggage is always frustrating. Coming to the airport and finding out at the registration desk that you exceeded luggage limits can lead to unpleasant situations beginning from a public ‘show’ of repacking your baggage and ending with extra fees that will give a gloomy start for your holidays. RoundBooking prepared a detailed guide on how to avoid such problems and be well-prepared before your trip.</p>
						<a class="detail-link" href="blog-detail.html">read more</a>
					</div>
				</div>
			</div>
			<div class="bx-bs">
				<div class="row">
					<div class="col-sm-5 col-md-4 col-lg-3">
						<div class="card"><img class="card-img" src="{{asset('img/blog/2.jpg')}}"></div>
					</div>
					<div class="col-sm-7 col-md-8 col-lg-9">
						<div class="blog-title">Why using Save’n’Pay?</div>
						<div class="blog-date">25 May, 2018</div>
						<p>Let’s be honest: most of us have a dream trip that we’ve been imagining for years and years. Going to the city of love, Paris, or eventually visiting Machu Picchu as all of your friends have those landscapes on their Facebook profile pictures. But why dreaming about it when you can start acting and getting ready for your journey? RoundBooking offers you a great way to save money for your travel - a savings program called Save’n’Pay.</p>
						<a class="detail-link" href="blog-detail.html">read more</a>
					</div>
				</div>
			</div>
			<div class="bx-bs">
				<div class="row">
					<div class="col-sm-5 col-md-4 col-lg-3">
						<div class="card"><img class="card-img" src="{{asset('img/blog/3.jpg')}}"></div>
					</div>
					<div class="col-sm-7 col-md-8 col-lg-9">
						<div class="blog-title">Why do I need a travel agent?</div>
						<div class="blog-date">21 May, 2018</div>
						<p>In the times of rapidly developing travel technologies the necessity of travel agents is put in question by many people. However, in vain do they neglect the benefits that travel agents can bring them. There are still a great number of new opportunities and experiences that tourist agencies can bring you. RoundBooking prepared a list for you to show how you can profit from travel services of personal agents.</p>
						<a class="detail-link" href="blog-detail.html">read more</a>
					</div>
				</div>
			</div>
			<div class="bx-bs">
				<div class="row">
					<div class="col-sm-5 col-md-4 col-lg-3">
						<div class="card"><img class="card-img" src="{{asset('img/blog/4.jpg')}}"></div>
					</div>
					<div class="col-sm-7 col-md-8 col-lg-9">
						<div class="blog-title">Stay safe when traveling with children.</div>
						<div class="blog-date">19, May 2018</div>
						<p>Traveling with kids is always a big fun and at the same time it carries numerous difficulties, especially if your travel mate is your toddler. In this article RoundBooking will give your several tips on how to ensure safety of your trip with kids and make it more engaging and fun for all family members.</p>
						<a class="detail-link" href="blog-detail.html">read more</a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection