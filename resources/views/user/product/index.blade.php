@extends('layouts.master')

@section('content')
	<section class="section my-account has-bg-wrap">
		<div class="container">
			<form method="post">
				<div class="row justify-content-center">
					@include('user.left')
					<div class="col-md-9 pt-5 pb-5">
						<div class="section-sub-title text-left">On Way Products</div>
						<div class="table-responsive">
							<table class="table fw-700">
								<thead>
									<tr class="text-muted">
										<th>Product</th>
										<th>Price</th>
										<th>Quantity</th>
										<th>Total</th>
									</tr>
								</thead>
								<tbody class="text-primary">
									<tr>
										<td class="fw-500">Bag for tourist (red) Product Name</td>
										<td>$ 60</td>
										<td>2</td>
										<td class="text-secondary">$ 120</td>
									</tr>
									<tr>
										<td class="fw-500">Product Name Title</td>
										<td>$ 70</td>
										<td>1</td>
										<td class="text-secondary">$ 70</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="section-sub-title text-left">Products Delivered</div>
						<div class="table-responsive">
							<table class="table fw-700">
								<thead>
									<tr class="text-muted">
										<th>Product</th>
										<th>Price</th>
										<th>Quantity</th>
										<th>Total</th>
									</tr>
								</thead>
								<tbody class="text-primary">
									<tr>
										<td class="fw-500">Bag for tourist (red) Product Name</td>
										<td>$ 60</td>
										<td>2</td>
										<td class="text-secondary">$ 120</td>
									</tr>
									<tr>
										<td class="fw-500">Product Name Title</td>
										<td>$ 70</td>
										<td>1</td>
										<td class="text-secondary">$ 70</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="section-sub-title text-left">Favorite Products</div>
						<div class="row favorite-products">
							<div class="col-md-4">
								<div class="bx-bs">
									<div class="product-img"><img class="img" style="background-image:url('{{asset('img/product/jacket.gif')}}')" src="{{asset('img/product/product.gif')}}"></div>
									<div class="product-name text-truncate">Weather Gear Product Full Name</div>
									<div class="product-info">
										<div class="product-price">$ 144</div>
										<div class="product-btn">
											<a class="btn btn-primary btn-block" href="javascript:void(0)">Buy</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="bx-bs">
									<div class="product-img"><img class="img" style="background-image:url('{{asset('img/product/bag-1.jpg')}}')" src="{{asset('img/product/product.gif')}}"></div>
									<div class="product-name text-truncate">RB Bag Product Full Name</div>
									<div class="product-info">
										<div class="product-price">$ 60</div>
										<div class="product-btn">
											<a class="btn btn-primary btn-block" href="javascript:void(0)">Buy</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="bx-bs">
									<div class="product-img"><img class="img" style="background-image:url('{{asset('img/product/bag-2.jpg')}}')" src="{{asset('img/product/product.gif')}}"></div>
									<div class="product-name text-truncate">RB Bag Product Full Name</div>
									<div class="product-info">
										<div class="product-price">$ 80</div>
										<div class="product-btn">
											<a class="btn btn-primary btn-block" href="javascript:void(0)">Buy</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
@endsection