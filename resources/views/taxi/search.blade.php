<section class="section search">
	<div class="container">
		<ul class="nav nav-tabs mb-5">
			<li class="nav-item">
				<a class="nav-link active" href="javascript:void(0)">Taxi</a>
			</li>
		</ul>
		<form method="post" action="#">
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
</section>