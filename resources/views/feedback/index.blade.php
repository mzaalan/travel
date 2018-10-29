@extends('layouts.master')

@section('content')
	<section class="section feedback has-bg-wrap">
		<div class="container">
			<form method="post">
				<div class="row justify-content-center">
					<div class="col-md-9">
						<div class="section-title mt-4">Feedback</div>
						<div class="section-sub-title">Share Your Experience</div>
						<div class="row mt-4">
							<div class="col-md-4">
								<div class="form-group">
									<label>Page Comments:</label>
									<select class="form-control">
										<option>1</option>
										<option>2</option>
									</select>
									<textarea class="form-control mt-3" rows="3"></textarea>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Content Is Useful:</label>
									<div class="bx-bs d-flex justify-content-between">
										<div class="custom-radio">
											<input id="useful-a" type="radio" name="useful"><label for="useful-a">&nbsp;</label>
										</div>
										<div class="custom-radio">
											<input id="useful-b" type="radio" name="useful" checked><label for="useful-b">&nbsp;</label>
										</div>
										<div class="custom-radio">
											<input id="useful-c" type="radio" name="useful"><label for="useful-c">&nbsp;</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Design Is Beautiful:</label>
									<div class="bx-bs d-flex justify-content-between">
										<div class="custom-radio">
											<input id="design-a" type="radio" name="design"><label for="design-a">&nbsp;</label>
										</div>
										<div class="custom-radio">
											<input id="design-b" type="radio" name="design" checked><label for="design-b">&nbsp;</label>
										</div>
										<div class="custom-radio">
											<input id="design-c" type="radio" name="design"><label for="design-c">&nbsp;</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Usability Is Cool:</label>
									<div class="bx-bs d-flex justify-content-between">
										<div class="custom-radio">
											<input id="usability-a" type="radio" name="usability"><label for="usability-a">&nbsp;</label>
										</div>
										<div class="custom-radio">
											<input id="usability-b" type="radio" name="usability" checked><label for="usability-b">&nbsp;</label>
										</div>
										<div class="custom-radio">
											<input id="usability-c" type="radio" name="usability"><label for="usability-c">&nbsp;</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Overall Website Is Great:</label>
									<div class="bx-bs d-flex justify-content-between">
										<div class="custom-radio">
											<input id="overall-a" type="radio" name="overall"><label for="overall-a">&nbsp;</label>
										</div>
										<div class="custom-radio">
											<input id="overall-b" type="radio" name="overall" checked><label for="overall-b">&nbsp;</label>
										</div>
										<div class="custom-radio">
											<input id="overall-c" type="radio" name="overall"><label for="overall-c">&nbsp;</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 has-bg-right pt-5 pb-5">
						<div class="has-bg-inner mk-s-115">
							<div class="form-group">
								<label for="phone">Your Phone Number:</label>
								<input id="phone" type="number" class="form-control" placeholder="Phone">
							</div>
							<div class="form-group">
								<label for="email">Your Email:</label>
								<input id="email" type="email" class="form-control" placeholder="Email">
							</div>
							<div class="form-group">
								<label>Captha Code:</label>
								<input type="number" class="form-control text-secondary bg-white" placeholder="Captha Code" value="14758" disabled>
							</div>
							<div class="form-group">
								<label>Enter the Code:</label>
								<input type="text" class="form-control" placeholder="Enter the Code">
							</div>
							<div class="mt-4">
								<button class="btn btn-secondary" type="submit">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
@endsection