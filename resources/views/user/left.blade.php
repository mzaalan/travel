<div class="col-md-3 has-bg-left">
	<div class="has-bg-inner package-summary pt-5 pb-5 text-primary">
		<div class="section-title text-black">My Account</div>
		<ul class="nav flex-column">
			<li class="nav-item">
				<a class="nav-link {{ setActive('user/profile') }}" href="{{route('user.profile')}}">Personal Information</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ setActive('user/payment') }}" href="{{route('user.payment.method')}}">Payment Methods</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ setActive('user/products') }}" href="{{route('user.products')}}">My Products</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ setActive('user/bookings') }}" href="{{route('user.bookings')}}">My Bookings</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#!">Others</a>
			</li>
		</ul>
	</div>
</div>