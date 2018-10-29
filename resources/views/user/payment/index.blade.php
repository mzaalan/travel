@extends('layouts.master')

@section('content')
	<section class="section my-account has-bg-wrap">
		<div class="container">
			<form method="post">
				<div class="row justify-content-center">
					
					@include('user.left')
					
					<div class="col-md-9 pt-5 pb-5">

						@include('shared.alert')
						
						<div class="section-sub-title text-left">Payment Methods</div>
						<div class="bx-bs pay-card">
							<div class="pay-card-title">
								<div>Card 1</div>
								<div><a class="link text-secondary" href="my-account-payment-methods-edit.html">Edit</a></div>
							</div>
							<div class="text-inf text-muted"><span class="fw-500 text-primary">Card Type:</span> MasterCard</div>
							<div class="text-inf text-muted"><span class="fw-500 text-primary">Card Number:</span> 6786 5876 9879 8768</div>
							<div class="text-inf text-muted"><span class="fw-500 text-primary">Expiration Date:</span> 20 August 2022</div>
							<div class="text-inf text-muted"><span class="fw-500 text-primary">CVV:</span> 123</div>
							<div class="text-inf text-muted"><span class="fw-500 text-primary">Card Holder Name:</span> John Doe</div>
						</div>
						<div class="bx-bs pay-card">
							<div class="pay-card-title">
								<div>Card 2</div>
								<div><a class="link text-secondary" href="my-account-payment-methods-edit.html">Edit</a></div>
							</div>
							<div class="text-inf text-muted"><span class="fw-500 text-primary">Card Type:</span> VISA</div>
							<div class="text-inf text-muted"><span class="fw-500 text-primary">Card Number:</span> 6786 5876 9879 8768</div>
							<div class="text-inf text-muted"><span class="fw-500 text-primary">Expiration Date:</span> 20 August 2022</div>
							<div class="text-inf text-muted"><span class="fw-500 text-primary">CVV:</span> 123</div>
							<div class="text-inf text-muted"><span class="fw-500 text-primary">Card Holder Name:</span> John Doe</div>
						</div>
						<div class="mt-1"><a class="link text-secondary" href="{{route('user.add.payment.method')}}">Add New Card</a></div>
					</div>
				</div>
			</form>
		</div>
	</section>
@endsection