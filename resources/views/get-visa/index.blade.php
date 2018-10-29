@extends('layouts.master')

@section('content')
	<section class="section get-visa">
		<div class="container">
			<div class="section-title">Get Visa</div>
			<div class="page-sub-title">Info Sessions</div>
			<p>We organize regular info sessions where you are provided with necessary information concerning important documents as well as visa application and approval processes.</p>
			<div class="d-flex align-items-center">
				<div class="mr-4">
					<a class="btn btn-secondary d-inline-block" href="get-visa-schedule-login.html">Schedule a Session</a>
				</div>
				<div class="need-visa">Need Visa Information?<br><b>Talk To Us!</b></div>
			</div>
			<div class="page-sub-title">Visa processing</div>
			<p>With RoundBooking there is no more need to waste hours of your precious time to collect all of the required documents and apply for your visa in person. Our managers will help you get your visa as quickly as possible so that you could feel no stress or time pressure.</p>
			<div class="row">
				<div class="col-md-8">
					<form method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="name">Your Name:</label>
									<input id="name" type="text" class="form-control" placeholder="Name">
								</div>
								<div class="form-group">
									<label for="country">Your Country:</label>
									<select id="country" class="form-control">
										<option>France</option>
										<option>Thailand</option>
										<option>Finland</option>
									</select>
								</div>
								<div class="form-group">
									<label for="city">Your City:</label>
									<select id="city" class="form-control">
										<option>France</option>
										<option>Thailand</option>
										<option>Finland</option>
									</select>
								</div>
								<div class="form-group">
									<label for="phone">Your Phone Number:</label>
									<input id="phone" type="number" class="form-control" placeholder="Phone Number">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="purpose">Purpose of Visa:</label>
									<select id="purpose" class="form-control">
										<option>Business</option>
										<option>Tourism</option>
										<option>Student</option>
										<option>Working</option>
									</select>
								</div>
								<div class="form-group">
									<label>Visa Duration</label>
									<div class="row">
										<div class="col-md-6">
											<select id="from" class="form-control">
												<option>From</option>
												<option>Jan 23, 2018</option>
												<option>Feb 23, 2018</option>
												<option>Mar 23, 2018</option>
												<option>Apr 23, 2018</option>
											</select>
										</div>
										<div class="col-md-6">
											<select id="to" class="form-control">
												<option>To</option>
												<option>Jan 23, 2019</option>
												<option>Feb 23, 2019</option>
												<option>Mar 23, 2019</option>
												<option>Apr 23, 2019</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="pay-method">Select Payment Method:</label>
									<select id="pay-method" class="form-control">
										<option>Payment Method</option>
										<option>MasterCard</option>
										<option>PayPal</option>
										<option>Bank Transfer</option>
									</select>
								</div>
								<div class="form-group text-right">
									<label class="d-block">&nbsp;</label>
									<button type="submit" class="btn btn-secondary">Send Request</button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img" src="{{asset('img/get-visa.jpg')}}">
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection