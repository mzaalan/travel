@extends('layouts.master')

@section('content')
	<section class="section">
		<div class="container">
			<div class="section-title">Complaints</div>
			<div class="section-sub-title">Tell Us What Bothers You</div>
			<form method="post">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="form-group">
							<label for="category">Select Category:</label>
							<select id="category" class="form-control">
								<option>Category</option>
							</select>
						</div>
						<div class="form-group">
							<label for="name">Your Name:</label>
							<input id="name" type="text" class="form-control" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="email">Your Email:</label>
							<input id="email" type="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="phone">Your Phone Number:</label>
							<input id="phone" type="number" class="form-control" placeholder="Phone">
						</div>
					</div>
					<div class="col-md-6 col-lg-8">
						<div class="form-group">
							<label for="subject">Subject:</label>
							<input id="subject" type="text" class="form-control" placeholder="Subject">
						</div>
						<div class="form-group">
							<label for="complaints">Complaints:</label>
							<textarea id="complaints" class="form-control" rows="8" placeholder="What Seems To Be The Problem?"></textarea>
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