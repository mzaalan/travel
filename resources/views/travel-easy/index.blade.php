@extends('layouts.master')

@section('content')
	<section class="section travel-easy">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="section-title text-left">Travel Easy</div>
					<div class="section-sub-title text-left">Are You On Tour And Want To Travel Easy?</div>
					<form method="post" action="travel-easy-result.html">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="city">City:</label>
									<input type="text" class="form-control" placeholder="City">
								</div>
								<div class="form-group">
									<div class="custom-check">
										<input id="guide" type="checkbox"><label for="guide">Guide</label>
									</div>
								</div>
								<div class="form-group">
									<div class="custom-check">
										<input id="insurance" type="checkbox"><label for="insurance">Insurance</label>
									</div>
								</div>
								<div class="form-group">
									<div class="custom-check">
										<input id="tickets" type="checkbox"><label for="tickets">Tickets</label>
									</div>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-secondary">Submit</button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-5">
					<div class="card">
						<img class="card-img" src="{{asset('img/travel-easy.jpg')}}">
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection