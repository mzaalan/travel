@extends('layouts.master')

@section('content')
	<section class="section my-account has-bg-wrap">
		<div class="container">
			<form method="post">
				<div class="row justify-content-center">
					@include('user.left')
					<div class="col-md-9 pt-5 pb-5">
						<div class="section-sub-title text-left">Current Bookings</div>
						<div class="table-responsive">
							<table class="table fw-700">
								<thead>
									<tr class="text-muted">
										<th>Bookings</th>
										<th>Date</th>
										<th>Price</th>
										<th></th>
									</tr>
								</thead>
								<tbody class="text-primary">
									<tr>
										<td>
											<div class="book-item book-flight">
												<div class="fw-500 text-primary"><span class="fw-700">Flight:</span> Kiev (KBP) - Paris (CDG)</div>
												<div class="fw-300 text-muted">Air France <span class="text-primary">|</span> 3 hrs 20 min</div>
											</div>
										</td>
										<td>12 August 2018</td>
										<td class="text-secondary">$ 600</td>
										<td class="text-right"><a class="book-delete" href="javascript:void(0)"><span class="text-danger">&times;</span></a></td>
									</tr>
									<tr>
										<td>
											<div class="book-item book-hotel">
												<div class="fw-500 text-primary"><span class="fw-700">Hotel:</span> Paris Hotel Name</div>
												<div class="fw-300 text-muted">Paris, France <span class="text-primary">|</span> Check In at <span class="fw-700">14.00</span></div>
											</div>
										</td>
										<td>13 August 2018</td>
										<td class="text-secondary">$ 450</td>
										<td class="text-right"><a class="book-delete" href="javascript:void(0)"><span class="text-danger">&times;</span></a></td>
									</tr>
									<tr>
										<td>
											<div class="book-item book-taxi">
												<div class="fw-500 text-primary"><span class="fw-700">Taxi:</span> CDG Airport, Terminal 5</div>
												<div class="fw-300 text-muted">Renault LOGAN (Red) <span class="fw-700">GB2349</span> | Pick Up at <span class="fw-700">14.00</span></div>
											</div>
										</td>
										<td>13 August 2018</td>
										<td class="text-secondary">$ 40</td>
										<td class="text-right"><a class="book-delete" href="javascript:void(0)"><span class="text-danger">&times;</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="section-sub-title text-left">Past Bookings</div>
						<div class="table-responsive">
							<table class="table fw-700">
								<thead>
									<tr class="text-muted">
										<th>Bookings</th>
										<th>Date</th>
										<th>Price</th>
										<th></th>
									</tr>
								</thead>
								<tbody class="text-primary">
									<tr>
										<td>
											<div class="book-item book-flight">
												<div class="fw-500 text-primary"><span class="fw-700">Flight:</span> Kiev (KBP) - Paris (CDG)</div>
												<div class="fw-300 text-muted">Air France <span class="text-primary">|</span> 3 hrs 20 min</div>
											</div>
										</td>
										<td>12 August 2018</td>
										<td class="text-secondary">$ 600</td>
										<td class="text-right"></td>
									</tr>
									<tr>
										<td>
											<div class="book-item book-hotel">
												<div class="fw-500 text-primary"><span class="fw-700">Hotel:</span> Paris Hotel Name</div>
												<div class="fw-300 text-muted">Paris, France <span class="text-primary">|</span> Check In at <span class="fw-700">14.00</span></div>
											</div>
										</td>
										<td>13 August 2018</td>
										<td class="text-secondary">$ 450</td>
										<td class="text-right"></td>
									</tr>
									<tr>
										<td>
											<div class="book-item book-taxi">
												<div class="fw-500 text-primary"><span class="fw-700">Taxi:</span> CDG Airport, Terminal 5</div>
												<div class="fw-300 text-muted">Renault LOGAN (Red) <span class="fw-700">GB2349</span> | Pick Up at <span class="fw-700">14.00</span></div>
											</div>
										</td>
										<td>13 August 2018</td>
										<td class="text-secondary">$ 40</td>
										<td class="text-right"></td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</div>
			</form>
		</div>
	</section>
@endsection