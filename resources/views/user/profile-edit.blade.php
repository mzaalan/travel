@extends('layouts.master')

@section('content')
	<section class="section my-account has-bg-wrap">
		<div class="container">
				<div class="row">
					@include('user.left')
					<div class="col-md-6 pt-5 pb-5">
						<div class="section-sub-title text-left">Personal Information</div>
						<form method="POST" action="{{route('user.profile.update')}}">
							@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="fname">First Name:</label>
										<input name="fname" type="text" class="form-control" placeholder="Name" value="{{auth()->user()->first_name ? auth()->user()->first_name : ''}}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="lname">Last Name:</label>
										<input name="lname" type="text" class="form-control" placeholder="Last Name" value="{{auth()->user()->last_name ? auth()->user()->last_name : ''}}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="phone">Your Phone Number:</label>
										<input name="phone" type="number" class="form-control" placeholder="Phone" value="{{auth()->user()->phone ? auth()->user()->phone : ''}}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="address">Address:</label>
										<input name="address" type="text" class="form-control" placeholder="Address" value="{{auth()->user()->address ? auth()->user()->address : ''}}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="city">City:</label>
										<input name="city" type="text" class="form-control" placeholder="City">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="state">State/Province:</label>
										<input name="state" type="text" class="form-control" placeholder="State/Province" value="{{auth()->user()->state ? auth()->user()->state : ''}}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="country">Country:</label>
										<select name="country" class="form-control" id="exampleFormControlSelect1">
											@foreach($countries as $code => $country)
										     	<option @if(auth()->user()->country === $code){{'selected'}}@endif value="{{$code}}">{{$country}}</option>
										    @endforeach
									   </select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="postal">Postal/Zip Code:</label>
										<input name="zip_postal" type="text" class="form-control" placeholder="Postal/Zip Code" value="{{auth()->user()->zip_postal ? auth()->user()->zip_postal : ''}}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="dob">Date Of Birth:</label>
										<input name="dob" type="text" class="form-control" placeholder="Date of Birth" value="{{auth()->user()->dob ? auth()->user()->dob : ''}}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="passport">Passport Number:</label>
										<input name="passport" type="text" class="form-control" placeholder="Passport" value="{{auth()->user()->passport ? auth()->user()->passport : ''}}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="phone">Join the loyalty card program:</label><br>
										<input type="checkbox" aria-label="Checkbox for following text input" name="loyalty_card" id="yes" {{auth()->user()->loyalty_card ? 'checked' : ''}}><label style="margin:5px">Yes, i want to benefit from it</label>
									</div>
								</div>
								<div class="col-md-6">

								</div>
							</div>
							<div class="form-group text-right">
								<button type="submit" class="btn btn-secondary">Submit</button>
							</div>
						</form>
					</div>
				</div>
		</div>
	</section>
@endsection