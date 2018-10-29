<section class="section search">
	<div class="container">
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#hotels">Hotels</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#flights">Flights</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#taxi">Taxi</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="hotels">
				<form method="post" action="hotels.html">
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-4">
							<div class="form-group">
								<label for="location">Location:</label>
								<input id="location" type="text" class="form-control">
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="row">
								<div class="col-6">
									<label for="check-in">Check In:</label>
								</div>
								<div class="col-6">
									<label for="check-out">Check Out:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<input id="check-in" type="text" class="form-control">
									<input id="check-out" type="text" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-2">
							<div class="form-group">
								<label for="rooms">Rooms:</label>
								<input id="rooms" type="number" class="form-control">
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-2">
							<div class="form-group">
								<label for="guests">Guests:</label>
								<input id="guests" type="number" class="form-control">
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-1">
							<div class="form-group">
								<label class="d-block">&nbsp;</label>
								<button type="submit" class="btn btn-primary"><i class="ico ico-search"></i> <span class="search-label">Search</span></button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="tab-pane" id="flights">
				<form method="post" action="flights.html">
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="form-group">
								<label for="fly-from">Flying From:</label>
								<input id="fly-from" type="text" class="form-control">
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="form-group">
								<label for="fly-to">Flying To:</label>
								<input id="fly-to" type="text" class="form-control">
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-2">
							<div class="form-group">
								<label for="fly-depart">Departing:</label>
								<input id="fly-depart" type="text" class="form-control">
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="form-group">
								<label for="rooms">Passengers, Ticket Class:</label>
								<input id="rooms" type="number" class="form-control">
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-1">
							<div class="form-group">
								<label class="d-block">&nbsp;</label>
								<button type="submit" class="btn btn-primary"><i class="ico ico-search"></i> <span class="search-label">Search</span></button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="tab-pane" id="taxi">
				<form method="post" action="taxi.html">
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="form-group">
								<label for="location-up">Pick Up Location:</label>
								<input id="location-up" type="text" class="form-control">
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="form-group">
								<label for="location-off">Pick Off Location:</label>
								<input id="location-off" type="text" class="form-control">
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="row">
								<div class="col-6">
									<label for="taxi-depart">Depart:</label>
								</div>
								<div class="col-6">
									<label for="taxi-round">Round:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<input id="taxi-depart" type="text" class="form-control">
									<input id="taxi-round" type="text" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-2">
							<div class="form-group">
								<label for="tax-time">Pick Up Time:</label>
								<input id="tax-time" type="time" class="form-control">
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-1">
							<div class="form-group">
								<label class="d-block">&nbsp;</label>
								<button type="submit" class="btn btn-primary"><i class="ico ico-search"></i> <span class="search-label">Search</span></button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
