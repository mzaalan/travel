@extends('layouts.master')

@section('content')
	<section class="section my-account has-bg-wrap">
		<div class="container">
			<form method="post">
				<div class="row">
					@include('user.left')
					<div class="col-md-6 pt-5 pb-5">
						<div class="section-sub-title text-left">Payment Methods</div>
						<div class="form-group">
							<label class="d-block">Card Type:</label>
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
								<label class="btn btn-primary active">
									<input type="radio" name="card-type" autocomplete="off" checked> VISA
								</label>
								<label class="btn btn-primary">
									<input type="radio" name="card-type" autocomplete="off"> MasterCard
								</label>
							</div>
						</div>
						<div class="form-group">
							<label for="card">Card Number:</label>
							<input id="card" type="number" class="form-control" placeholder="Card Number">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="date">Expiration Date:</label>
									<input id="date" type="text" class="form-control" placeholder="mm/dd/yyyy">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="cvv">CVV:</label>
									<input id="cvv" type="text" class="form-control" placeholder="CVV">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="name">Card Holder Name:</label>
							<input id="name" type="text" class="form-control" placeholder="Card Holder Name">
						</div>
						<div class="text-right">
							<button class="btn btn-secondary" type="submit">Submit</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
@endsection