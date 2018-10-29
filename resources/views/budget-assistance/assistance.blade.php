<section class="section budget-assistance">
	<div class="container">
		<div class="section-title">Budget Assistance</div>
		<p>RoundBooking offers you a special and efficient way to plan your trips perfectly in your budget frame. We will help you to get the most out of your money and avoid any hidden financial dangers.</p>
		<div class="row">
				
				@include('budget-assistance.calculator')

			<div class="col-md-8 col-lg-9">
				<p class="fw-700">RoundBooking Save'n'Pay system is easily available for all of our clients. You should go through three simple steps:</p>
				<div class="step-info-wrap">
					<div class="row step-wrap">
						<div class="col-md-12 col-lg-4">
							<div class="step step-1">
								<div class="title"><span>1.</span> Fill in the budget assistance form on our website</div>
								<i class="ico ico-server"></i>
							</div>
						</div>
						<div class="col-md-12 col-lg-4">
							<div class="step step-2">
								<div class="title"><span>2.</span> Choose a suitable plan</div>
								<i class="ico ico-task"></i>
							</div>
						</div>
						<div class="col-md-12 col-lg-4">
							<div class="step step-3">
								<div class="title"><span>3. </span> Contact our travel agent shortly after</div>
								<i class="ico ico-support"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="page-sub-title">Save’n’Pay</div>
				<p>Dreaming the whole year about summer holidays, trying to save up, but when it comes to buying the tickets having no money left in the wallet? We know how it usually happens and we would like to help you get out of this vicious circle. Our Save’n’Pay program is designed to help you save up for your trip within 3-12 months of your departure.</p>
				<div class="page-sub-title">BTA (Basic Travel Allowance) / Exchange Plan</div>
				<p>At RoundBooking travel agency, BTA and Exchange Plan programs were created for both our new travelers and regular clients. These systems enables you to receive your BTA in cash (Euro, USA Dollar) immediately after arriving to a new destination country. The BTA and Exchange Plan programs are designed to reduce the risk of currency exchange depreciations or simply loss of cash you had with you during your journey. Apart from that, we provide our customers with relevant exchange rates in order to carefully plan your travel budget in advance.</p>
				<p>To check eligibility <a class="text-secondary" href="javascript:void(0)">click here</a> and fill in a special form below.</p>
				<form method="post">
					<div class="row">
						<div class="col-md-6 col-lg-4">
							<div class="form-group">
								<label for="name">Your Name:</label>
								<input id="name" type="text" class="form-control" placeholder="Name">
							</div>
							<div class="form-group">
								<label for="country">Your Country:</label>
								<input id="country" type="text" class="form-control" placeholder="Country">
							</div>
							<div class="form-group">
								<label for="city">Your City:</label>
								<input id="city" type="text" class="form-control" placeholder="City">
							</div>
							<div class="form-group">
								<div class="custom-check mr-4">
									<input id="save-n-pay" type="checkbox"><label for="save-n-pay">Save'n'Pay</label>
								</div>
								<div class="custom-check">
									<input id="bta" type="checkbox"><label for="bta">BTA</label>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-8">
							<div class="form-group">
								<label for="purpose">Purpose:</label>
								<textarea id="purpose" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
							</div>
							<div class="text-right">
								<button class="btn btn-secondary" type="submit">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>