@extends('layouts.master')

@section('content')
	<section class="section my-account has-bg-wrap">
		<div class="container">
			<form method="post">
				<div class="row">

					
					@include('user.left')

					<div class="col-md-9 pt-5 pb-5">
						@include('shared.alert')
						<div class="section-sub-title text-left">Personal Information</div>
						
						<div class="text-inf text-muted"><span class="fw-500 text-primary">First Name:</span> {{auth()->user()->first_name ? auth()->user()->first_name : ''}}</div>

						<div class="text-inf text-muted"><span class="fw-500 text-primary">Last Name:</span> {{auth()->user()->last_name ? auth()->user()->last_name : ''}}</div>
						
						<div class="text-inf text-muted"><span class="fw-500 text-primary">DOB:</span> {{auth()->user()->dob ? auth()->user()->dob : ''}}</div>
						
						<div class="text-inf text-muted"><span class="fw-500 text-primary">Phone Number:</span> {{auth()->user()->phone ? auth()->user()->phone : ''}}</div>
						
						<div class="text-inf text-muted"><span class="fw-500 text-primary">Address:</span> {{auth()->user()->address ? auth()->user()->address : ''}}</div>
						
						<div class="text-inf text-muted"><span class="fw-500 text-primary">City:</span> {{auth()->user()->city ? auth()->user()->city : ''}}</div>
						
						<div class="text-inf text-muted"><span class="fw-500 text-primary">Country:</span> 	@php
				    			if(array_key_exists(auth()->user()->country, $countries))
				    			echo $countries[auth()->user()->country];
				    		@endphp
				    	</div>
						
						<div class="text-inf text-muted"><span class="fw-500 text-primary">State/Province:</span> {{auth()->user()->state ? auth()->user()->state : ''}}</div>
						
						<div class="text-inf text-muted"><span class="fw-500 text-primary">Postal/Zip Code:</span> {{auth()->user()->zip_postal ? auth()->user()->zip_postal : ''}}</div>
						
						<div class="text-inf text-muted"><span class="fw-500 text-primary">Passport Number:</span> {{auth()->user()->passport ? auth()->user()->passport : ''}}</div>

						<div class="text-inf text-muted"><span class="fw-500 text-primary">Loyalty Card:</span> <span class=""> {{auth()->user()->loyalty_card ? 'Subscribed' : 'Not Subscribed'}}</span></div>
						
						<div class="mt-2"><a class="link text-secondary" href="{{route('user.profile.edit')}}">Edit</a></div>
					</div>
				</div>
			</form>
		</div>
	</section>
@endsection