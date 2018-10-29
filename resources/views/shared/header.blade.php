@php
	$segments = request()->segments();
@endphp
<header class="head @if($segments){{'head-inner'}}@endif">
	<div class="navbar-top">
		<div class="container">
			<div class="d-flex justify-content-between">
				<ul class="nav order-md-2">
					@auth
					<li class="nav-item"><a class="nav-link fw-500" href="{{route('user.bookings')}}">My Bookings</a>
					<li class="nav-item"><a class="nav-link" href="{{route('user.products')}}"><i class="ico ico-cart"></i><span class="fw-500 d-sm-block d-md-block d-lg-none">My Shopping Cart</span></a>
					<li class="nav-item">
						<div class="dropdown">
							<a class="nav-item"><a class="nav-link link-btn" data-toggle="dropdown" aria-expanded="false" href="#!">{{auth()->user()->first_name." ".auth()->user()->last_name}}
							</a>
							<div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -2px, 0px);">
								<a class="dropdown-item" href="{{route('user.profile')}}">Profile</a>
								<a class="dropdown-item" href="javascript:void(0)">
									<a class="dropdown-item" href="{{ route('logout') }}"
									   onclick="event.preventDefault();
									                 document.getElementById('logout-form').submit();">
									    {{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									    @csrf
									</form>
								</a>
							</div>
						</div>		
					</li>		
					@endauth
					@guest
						<li class="nav-item"><a class="nav-link link-btn" href="{{route('login')}}">Log In</a>
					@endguest
				</ul>
				<ul class="nav order-md-1">
					<li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ico ico-call"></i> +123 4567 8900</a>
					<li class="nav-item {{ setActive('responsibility') }}"><a class="nav-link" href="{{route('responsibility')}}">Responsibility</a>
					<li class="nav-item {{ setActive('travel-easy') }}"><a class="nav-link" href="{{route('travel-easy')}}">Travel Easy</a>
					<li class="nav-item {{ setActive('get-visa') }}"><a class="nav-link" href="{{route('get-visa')}}">Get Visa</a>
				</ul>
			</div>
			<hr class="line">
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-light bg-none">
		<div class="container">
			<a class="navbar-brand" href="{{route('home')}}">
				<img src="{{asset('img/round-booking.svg')}}" alt="Round Booking">
			</a>
			<div class="navbar-toggler">
				<a data-action="menu" href="javascript:void(0)" class="btn btn-pri"><i class="ico ico-menu"></i></a>
				<a data-action="user" href="javascript:void(0)" class="btn btn-pri"><i class="ico ico-user"></i></a>
			</div>
			<div class="navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item {{ setActive('hotels') }}"><a class="nav-link" href="{{route('hotels')}}"><i class="ico ico-hotel"></i> Hotels</a></li>
					<li class="nav-item {{ setActive('flights') }}"><a class="nav-link" href="{{route('flights')}}"><i class="ico ico-plane"></i> Flights</a></li>
					<li class="nav-item {{ setActive('taxi') }}"><a class="nav-link" href="{{route('taxi')}}"><i class="ico ico-taxi"></i> Taxi</a></li>
				</ul>
				<ul class="navbar-nav">
					<li class="nav-item {{ setActive('budget-assistance') }}"><a class="nav-link" href="{{route('budget-assistance')}}">Budget Assistance</a></li>
					<li class="nav-item {{ setActive('trips') }}"><a class="nav-link" href="{{route('trips-and-packages')}}">Trips & Packages</a></li>
					<li class="nav-item {{ setActive('shop') }}"><a class="nav-link" href="{{route('shop')}}">Shop</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="nav-overlay"></div>
</header>