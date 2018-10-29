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
				<form method="post" action="hotels-no-data.html">
					<!--Filter Wrap for Mobile-->
					<div class="filter-wrap">
						<div class="filter-header">
							<div class="p-2 pt-3 text-primary"><b>132</b> options are shown</div>
							<div class="form-group">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search package">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-transparent"><i class="ico ico-search"></i></button>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="filter-head d-flex justify-content-between">
								<div class="text-primary"><label class="fw-700 m-0">Packages Categories</label></div>
								<div class="text-right"><a class="text-secondary" href="javascript:void(0)">clear all</a></div>
							</div>
							<div class="check-wrap">
								<div class="custom-check">
									<input id="cat-1" type="checkbox" checked><label class="d-flex" for="cat-1"><span class="text-truncate">Honeymoon</span></label>
								</div>
								<div class="custom-check">
									<input id="cat-2" type="checkbox"><label class="d-flex" for="cat-2"><span class="text-truncate">Healthcare</span></label>
								</div>
								<div class="custom-check">
									<input id="cat-3" type="checkbox" checked><label class="d-flex" for="cat-3"><span class="text-truncate">Adventure Trips</span></label>
								</div>
								<div class="custom-check">
									<input id="cat-4" type="checkbox"><label class="d-flex" for="cat-4"><span class="text-truncate">Inspiration Trips</span></label>
								</div>
								<div class="custom-check">
									<input id="cat-5" type="checkbox"><label class="d-flex" for="cat-5"><span class="text-truncate">Youth Camps</span></label>
								</div>
							</div>
							<div class="mt-2"><a class="text-secondary" href="javascript:void(0)">view all</a></div>
						</div>
						<div class="form-group">
							<label class="fw-700 m-0">Price Range</label>
							<div class="range-wrap" data-format="$ {val}" data-min="0" data-max="80000" data-step="10" data-def-min="500" data-def-max="20000">
								<div class="input-range"><input type="hidden"></div>
								<div class="d-flex justify-content-between range-value">
									<div class="min-value text-muted"></div>
									<div class="max-value text-muted"></div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="filter-head d-flex justify-content-between">
								<div class="text-primary"><label class="fw-700 m-0">People</label></div>
								<div class="text-right"><a class="text-secondary" href="javascript:void(0)">clear all</a></div>
							</div>
							<div class="check-wrap">
								<div class="custom-check">
									<input id="user-1" type="checkbox" checked><label class="d-flex" for="user-1"><span class="text-truncate">For 1 person</span></label>
								</div>
								<div class="custom-check">
									<input id="user-2" type="checkbox"><label class="d-flex" for="user-2"><span class="text-truncate">For 2 person</span></label>
								</div>
								<div class="custom-check">
									<input id="user-3" type="checkbox" checked><label class="d-flex" for="user-3"><span class="text-truncate">for couple with kids</span></label>
								</div>
								<div class="custom-check">
									<input id="user-4" type="checkbox"><label class="d-flex" for="user-4"><span class="text-truncate">for more then 2 adults</span></label>
								</div>
							</div>
							<div class="mt-2"><a class="text-secondary" href="javascript:void(0)">view all</a></div>
						</div>
						<div class="clearfix"></div>
						<div class="filter-footer d-block d-lg-none"><a class="toggle-filter btn btn-primary" data-trigger="true" href="javascript:void(0)">Filter</a></div>
					</div><!--//Filter Wrap for Mobile-->
				</form>
			</div><!--//Left Filter-->

			<!--Main Result-->
			<div class="col-lg-9 has-bg-right">
				<div class="has-bg-inner tab-content mt-5">
					<div class="text-right">
						<!--Trigger Close All Tabs [See Inline JavaScript Below] -->
						<span class="tab-close" data-toggle="tab-close">&times;</span>
					</div>
					<!--Result Item-->
					<div class="result-item p-3">
						<div class="row">
							<div class="col-md-12 col-md-6 col-lg-4">
								<img class="img" src="{{asset('img/hotel.gif')}}" style="background-image:url('{{asset('img/hotel/1.jpg')}}')">
							</div>
							<div class="col-sm-6 col-md-6 col-lg-4">
								<div class="m-0 rating rating-5"></div>
								<div class="fw-700 text-primary">Pullman Paris Centre Bercy</div>
								<div class="small text-muted"><i class="ico ico-map-marker"></i> London, UK</div>
								<div class="price-list trip-pack">
									<div class="bx-bs">
										<div class="p-2 text-primary text-left">Hotel: <span class="fw-400">London Luxury Hotel Name</span></div>
									</div>
									<div class="bx-bs">
										<div class="p-2 text-primary text-left">
											<div>Flight: <span class="fw-400">Air France Airline</span></div>
											<div class="text-muted">20/05/18, <span class="fw-700">06:10</span> <span class="fw-700 text-primary">ACDG</span></div>
											<div class="text-muted">20/05/18, <span class="fw-700">09:50</span> <span class="fw-700 text-primary">LHR</span></div>
										</div>
									</div>
									<div class="bx-bs">
										<div class="p-2 text-primary text-left">
											<div>Taxi: <span class="fw-400">SEDAN, Renault Logan</span></div>
											<div class="text-muted">Pick-Up Time: <span class="fw-700">06:10</span></div>
											<div class="text-muted">at <span class="fw-700 text-primary">LHR <span class="fw-400">(Terminal 5)</span></span></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-4 text-right">
								<div class="guest fw-500 text-primary">
									<span class="small">Guest Rating:</span>
									<span class="fw-700">9.6</span>
									<div><a class="small text-muted" href="javascript:void(0)">(234 Reviews)</a></div>
								</div>
								<div class="mt-5 pt-5">
									<div class="price">$ 999.00</div>
									<div class="text-secondary">Flight+Hotel+Taxi</div>
									<a class="btn btn-primary btn-book" href="javascript:void(0)">Book</a>
								</div>
							</div>
						</div>
						<!--Sub Tabs-->
						<ul class="nav nav-tabs">
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#details">Details</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#reviews">Reviews</a>
							</li>
						</ul><!--//Sub Tabs-->
						<!--Sub Tabs Content-->
						<div class="tab-content">
							<div class="text-right">
								<!--Trigger Close All Tabs [See Inline JavaScript Below] -->
								<span class="tab-close" data-toggle="tab-close">&times;</span>
							</div>
							<!--Tabs - Details-->
							<div class="tab-pane" id="details">

								<!--Flight Info-->
								<div class="h5 text-uppercase fw-700 text-secondary">FLIGHT INFO</div>
								<div class="bx-bs airline-item item-detail p-3">
									<div class="text-muted">Flight 1 <div class="d-inline-block text-secondary ml-3">3 hr 25 min</div></div>
									<div class="sub-item-wrap">
										<!--Flight Detail-->
										<div class="sub-item">
											<div class="d-flex sub-item-head">
												<div class="text-muted">
													<img class="img-airline" style="background-image:url('{{asset('img/airline/af.gif')}}')" src="{{asset('img/airline.gif')}}">
													Air France
												</div>
												<div class="text-primary">AF221</div>
												<div class="text-right text-secondary">1 hr 40 min</div>
											</div>
											<div class="d-flex">
												<div class="p-2 text-right">
													<div class="fw-700 text-primary">08:10</div>
													<div class="text-muted">20/05/18</div>
												</div>
												<div class="p-2">
													<div class="fw-500 text-primary"><span class="text-secondary">Departure</span> from Boryspil International Airport (KBP)</div>
													<div class="text-muted">Kiev, Ukraine</div>
												</div>
											</div>
											<div class="d-flex">
												<div class="p-2 text-right">
													<div class="fw-700 text-primary">08:35</div>
													<div class="text-muted">20/05/18</div>
												</div>
												<div class="p-2">
													<div class="fw-500 text-primary"><span class="text-secondary">Arrival</span> to Minsk National Airport (MSQ)</div>
													<div class="text-muted">Minsk, Belarus</div>
												</div>
											</div>
										</div><!--//Flight Detail-->
									</div>
								</div><!--//Flight Info-->

								<!--Hotel Info-->
								<div class="h5 text-uppercase fw-700 text-secondary">Hotel Info</div>
								<div class="address-time d-flex justify-content-between text-muted">
									<div>
										<div class="sub-title">Address</div>
										<div class="p mb-0">1 rue de Libourne, 75012 Paris,<br>Ville de Paris, France</div>
									</div>
									<div>
										<div class="sub-title">Check-In Time</div>
										<div class="p mb-0">14:00</div>
									</div>
									<div>
										<div class="sub-title">Check-Out Time</div>
										<div class="p mb-0">12:00</div>
									</div>
								</div>
								<div class="p-3 text-muted">
									<div class="row">
										<div class="col-md-6">
											<div class="sub-title">General</div>
											<div class="p">Parking, Bar / Lounge, Facilities for people with special needs, Cable / Satellite TV, Luggage Storage, Air Conditioned, Non-Smoking Rooms, Room Service, Express Check-In / Check-Out, Restaurant, Sauna, Safe-Deposit Box, Terrace / Patio, and 24-Hour Front Desk</div>
											<div class="sub-title">Leisure</div>
											<div class="p">Fitness center</div>
										</div>
										<div class="col-md-6">
											<div class="sub-title">Services</div>
											<div class="p">Business center, Meeting / banquet facilities, Concierge, Babysitting / child care (surcharge), and Laundry facilities</div>
											<div class="sub-title">Internet</div>
											<div class="p">Wi-Fi (free of charge) and Internet (free of charge)</div>
											<div class="sub-title">Policy</div>
											<div class="p">Pets are allowed upon request. Additional charges may apply.</div>
										</div>
									</div>
									<div class="map-location bx-bs" data-toggle="map" data-title="Hôtel Pullman Paris Centre - Bercy" data-lat="48.831397" data-lng="2.387139"></div>
								</div><!--//Hotel Info-->

								<!--Car Info-->
								<div class="h5 text-uppercase fw-700 text-secondary">Car Info</div>
								<div class="row">
									<div class="col-md-12 col-md-6 col-lg-4">
										<img class="bx-bs img img-contain" src="{{asset('img/taxi.gif')}}" style="background-image:url('{{asset('img/taxi/sedan.gif')}}')">
									</div>
									<div class="col-md-12 col-md-6 col-lg-8">
										<div class="row">
											<div class="col-sm-7 col-md-7">
												<div class="h4 fw-700 text-primary"><span class="text-upper">Sedan</span>, <span class="fw-500">Renault Logan</span></div>
												<div class="small text-muted">Pick-Up Time: <span class="fw-700">10.00</span> at <span class="fw-700 text-primary">LHR (Terminal 5)</span></div>
												<div class="feat-box text-muted">
													<div class="feat-item"><i class="ico ico-car-seat"></i> 4 Seats</div>
													<div class="feat-item"><i class="ico ico-breifcase"></i> 2 Luggage bags</div>
													<div class="feat-item"><i class="ico ico-lang"></i> Driver speaks <b>English</b></div>
													<div class="feat-item"><i class="ico ico-card"></i> Card payment option</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--//Car Info-->
							</div><!--//Tabs - Details-->
							<!--Tabs - Reviews-->
							<div class="tab-pane" id="reviews">
								<div class="h5 text-uppercase fw-300 text-primary">Rating <span class="fw-700 text-secondary">8.0</span></div>
								<div class="p">Rating Index based on <b>223 reviews</b> from: <span class="text-primary">Trivago, Hotels.com, Booking.com, TripAdvisor.</span></div>
								<div class="row">
									<div class="col-sm-6 col-md-4">
										<div class="d-flex justify-content-between">
											<div class="sub-title text-uppercase">Location</div>
											<div class="sub-title text-right">8.3</div>
										</div>
										<div class="progress mt-2 mb-3">
											<div class="progress-bar bg-primary" style="width:75%"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-4">
										<div class="d-flex justify-content-between">
											<div class="sub-title text-uppercase">Hotel</div>
											<div class="sub-title text-right">7.9</div>
										</div>
										<div class="progress mt-2 mb-3">
											<div class="progress-bar bg-primary" style="width:75%"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-4">
										<div class="d-flex justify-content-between">
											<div class="sub-title text-uppercase">Price</div>
											<div class="sub-title text-right">7.9</div>
										</div>
										<div class="progress mt-2 mb-3">
											<div class="progress-bar bg-primary" style="width:75%"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-4">
										<div class="d-flex justify-content-between">
											<div class="sub-title text-uppercase">Flight</div>
											<div class="sub-title text-right">8.2</div>
										</div>
										<div class="progress mt-2 mb-3">
											<div class="progress-bar bg-primary" style="width:75%"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-4">
										<div class="d-flex justify-content-between">
											<div class="sub-title text-uppercase">Taxi</div>
											<div class="sub-title text-right">7.9</div>
										</div>
										<div class="progress mt-2 mb-3">
											<div class="progress-bar bg-primary" style="width:75%"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-4">
										<div class="d-flex justify-content-between">
											<div class="sub-title text-uppercase">Good Offer</div>
											<div class="sub-title text-right">7.9</div>
										</div>
										<div class="progress mt-2 mb-3">
											<div class="progress-bar bg-primary" style="width:75%"></div>
										</div>
									</div>
								</div>
							</div><!--//Tabs - Reviews-->
						</div><!--//Tabs Content-->
					</div><!--//Result Item-->
				</div>
			</div>
		</div>
	</div>
</section>
