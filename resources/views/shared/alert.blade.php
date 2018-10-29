@if(session('success'))
	<div class="alert alert-success">
		<center>{!!session('success')!!}</center>
	</div>
@endif

@if(session('failed'))
	<div class="alert alert-danger">
		<center>{!!session('failed')!!}</center>
	</div>
@endif