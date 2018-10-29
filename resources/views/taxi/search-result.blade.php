<section class="section search-result has-bg-wrap">
	<div class="toggle-filter-wrap d-block d-lg-none">
		<div class="container">
			<div class="d-flex justify-content-between">
				<div>Search Result</div>
				<div><a class="toggle-filter" href="javascript:void(0)"><i class="ico ico-filter"></i> Filter</a></div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<!--Left Filter-->
			<div class="col-lg-3">
				<form method="post">
					<!--Filter Wrap for Mobile-->
					<div class="filter-wrap">
						<div class="filter-header">
							<div class="p-2 pt-3 text-primary"><b>13</b> cars available</div>
							<div class="form-group">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search car by name">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-transparent"><i class="ico ico-search"></i></button>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="filter-head d-flex justify-content-between">
								<div class="text-primary"><label class="fw-700 m-0">Car Type</label></div>
								<div class="text-right"><a class="text-secondary" href="javascript:void(0)">clear all</a></div>
							</div>
							<div class="check-wrap">
								<div class="custom-check">
									<input id="car-type-1" type="checkbox" checked><label class="d-flex" for="car-type-1"><span class="text-truncate">Sedan</span><span>5</span></label>
								</div>
								<div class="custom-check">
									<input id="car-type-2" type="checkbox"><label class="d-flex" for="car-type-2"><span class="text-truncate">Minivan</span><span>2</span></label>
								</div>
								<div class="custom-check">
									<input id="car-type-3" type="checkbox" checked><label class="d-flex" for="car-type-3"><span class="text-truncate">Pick-Up</span><span>4</span></label>
								</div>
								<div class="custom-check">
									<input id="car-type-4" type="checkbox"><label class="d-flex" for="car-type-4"><span class="text-truncate">SUV</span><span>7</span></label>
								</div>
							</div>
							<div class="mt-2"><a class="text-secondary" href="javascript:void(0)">view all</a></div>
						</div>
						<div class="form-group">
							<div class="filter-head d-flex justify-content-between">
								<div class="text-primary"><label class="fw-700 m-0">Passengers</label></div>
								<div class="text-right"><a class="text-secondary" href="javascript:void(0)">clear all</a></div>
							</div>
							<div class="check-wrap">
								<div class="custom-check">
									<input id="passenger-1" type="checkbox" checked><label class="d-flex" for="passenger-1"><span class="text-truncate">1-2</span></label>
								</div>
								<div class="custom-check">
									<input id="passenger-2" type="checkbox"><label class="d-flex" for="passenger-2"><span class="text-truncate">2-4</span></label>
								</div>
								<div class="custom-check">
									<input id="passenger-3" type="checkbox" checked><label class="d-flex" for="passenger-3"><span class="text-truncate">4+</span></label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="filter-head d-flex justify-content-between">
								<div class="text-primary"><label class="fw-700 m-0">Luggage Bags</label></div>
								<div class="text-right"><a class="text-secondary" href="javascript:void(0)">clear all</a></div>
							</div>
							<div class="check-wrap">
								<div class="custom-check">
									<input id="luggage-1" type="checkbox" checked><label class="d-flex" for="luggage-1"><span class="text-truncate">1</span></label>
								</div>
								<div class="custom-check">
									<input id="luggage-2" type="checkbox"><label class="d-flex" for="luggage-2"><span class="text-truncate">2</span></label>
								</div>
								<div class="custom-check">
									<input id="luggage-3" type="checkbox" checked><label class="d-flex" for="luggage-3"><span class="text-truncate">3+</span></label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="filter-head d-flex justify-content-between">
								<div class="text-primary"><label class="fw-700 m-0">Payment Method</label></div>
								<div class="text-right"><a class="text-secondary" href="javascript:void(0)">clear all</a></div>
							</div>
							<div class="check-wrap">
								<div class="custom-check">
									<input id="by-card" type="checkbox" checked><label class="d-flex" for="by-card"><span class="text-truncate">By Card</span></label>
								</div>
								<div class="custom-check">
									<input id="by-cash" type="checkbox"><label class="d-flex" for="by-cash"><span class="text-truncate">By Cash</span></label>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="filter-footer d-block d-lg-none"><a class="toggle-filter btn btn-primary" data-trigger="true" href="javascript:void(0)">Filter</a></div>
					</div><!--//Filter Wrap for Mobile-->
				</form>
			</div><!--//Left Filter-->

			<!--Main Result-->
			<div class="col-lg-9 has-bg-right">
				<div class="has-bg-inner mt-5">
					<!--Result Item-->
					<div class="result-item p-3">
						<div class="row">
							<div class="col-md-12 col-md-6 col-lg-4">
								<img class="bx-bs img img-contain" src="{{asset('img/taxi.gif')}}" style="background-image:url('{{asset('img/taxi/sedan.gif')}}')">
							</div>
							<div class="col-md-12 col-md-6 col-lg-8">
								<div class="d-inline-block m-0 rating rating-5"></div>
								<div class="d-inline-block small text-muted">Rating based on driver and cab quality</div>
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="fw-700 text-primary"><span class="text-upper">Sedan</span>, <span class="fw-500">Renault Logan</span></div>
										<div class="feat-box text-muted">
											<div class="feat-item"><i class="ico ico-car-seat"></i> 4 Seats</div>
											<div class="feat-item"><i class="ico ico-breifcase"></i> 2 Luggage bags</div>
											<div class="feat-item"><i class="ico ico-lang"></i> Driver speaks <b>English</b></div>
											<div class="feat-item"><i class="ico ico-card"></i> Card payment option</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 text-right">
										<div class="mt-4 pt-4">
											<div class="price">$ 25</div>
											<div class="sub-price"><span class="text-muted">Available from 12:30</span></div>
											<a class="btn btn-primary btn-book" href="javascript:void(0)">Select Cab</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--//Result Item-->

					<!--Result Item-->
					<div class="result-item p-3">
						<div class="row">
							<div class="col-md-12 col-md-6 col-lg-4">
								<img class="bx-bs img img-contain" src="{{asset('img/taxi.gif')}}" style="background-image:url('{{asset('img/taxi/suv.gif')}}')">
							</div>
							<div class="col-md-12 col-md-6 col-lg-8">
								<div class="d-inline-block m-0 rating rating-5"></div>
								<div class="d-inline-block small text-muted">Rating based on driver and cab quality</div>
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="fw-700 text-primary"><span class="text-upper">Suv</span>, <span class="fw-500">Volvo V40</span></div>
										<div class="feat-box text-muted">
											<div class="feat-item"><i class="ico ico-car-seat"></i> 6 Seats</div>
											<div class="feat-item"><i class="ico ico-breifcase"></i> 3 Luggage bags</div>
											<div class="feat-item"><i class="ico ico-lang"></i> Driver speaks <b>French</b></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 text-right">
										<div class="mt-4 pt-4">
											<div class="price">$ 31</div>
											<div class="sub-price"><span class="text-muted">Available from 13:30</span></div>
											<a class="btn btn-primary btn-book" href="javascript:void(0)">Select Cab</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--//Result Item-->

					<!--Result Item-->
					<div class="result-item p-3">
						<div class="row">
							<div class="col-md-12 col-md-6 col-lg-4">
								<img class="bx-bs img img-contain" src="{{asset('img/taxi.gif')}}" style="background-image:url('{{asset('img/taxi/sedan.gif')}}')">
							</div>
							<div class="col-md-12 col-md-6 col-lg-8">
								<div class="d-inline-block m-0 rating rating-5"></div>
								<div class="d-inline-block small text-muted">Rating based on driver and cab quality</div>
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="fw-700 text-primary"><span class="text-upper">Sedan</span>, <span class="fw-500">Renault Logan</span></div>
										<div class="feat-box text-muted">
											<div class="feat-item"><i class="ico ico-car-seat"></i> 4 Seats</div>
											<div class="feat-item"><i class="ico ico-breifcase"></i> 2 Luggage bags</div>
											<div class="feat-item"><i class="ico ico-lang"></i> Driver speaks <b>English</b></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 text-right">
										<div class="mt-4 pt-4">
											<div class="price">$ 25</div>
											<div class="sub-price"><span class="text-muted">Available from 12:30</span></div>
											<a class="btn btn-primary btn-book" href="javascript:void(0)">Select Cab</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--//Result Item-->

					<!--Result Item-->
					<div class="result-item p-3">
						<div class="row">
							<div class="col-md-12 col-md-6 col-lg-4">
								<img class="bx-bs img img-contain" src="{{asset('img/taxi.gif')}}" style="background-image:url('{{asset('img/taxi/suv.gif')}}')">
							</div>
							<div class="col-md-12 col-md-6 col-lg-8">
								<div class="d-inline-block m-0 rating rating-5"></div>
								<div class="d-inline-block small text-muted">Rating based on driver and cab quality</div>
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="fw-700 text-primary"><span class="text-upper">Suv</span>, <span class="fw-500">Volvo V40</span></div>
										<div class="feat-box text-muted">
											<div class="feat-item"><i class="ico ico-car-seat"></i> 6 Seats</div>
											<div class="feat-item"><i class="ico ico-breifcase"></i> 3 Luggage bags</div>
											<div class="feat-item"><i class="ico ico-lang"></i> Driver speaks <b>French</b></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 text-right">
										<div class="mt-4 pt-4">
											<div class="price">$ 31</div>
											<div class="sub-price"><span class="text-muted">Available from 13:30</span></div>
											<a class="btn btn-primary btn-book" href="javascript:void(0)">Select Cab</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--//Result Item-->
					
				</div>
			</div><!--//Main Result-->
		</div>
	</div>
</section>