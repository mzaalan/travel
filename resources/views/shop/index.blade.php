@extends('layouts.master')
@push('styles')
	<link rel="stylesheet" href="{{asset('rslide/nouislider.min.css')}}">
@endpush
@section('content')
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
					<form method="post" action="shop-no-data.html">
						<!--Filter Wrap for Mobile-->
						<div class="filter-wrap">
							<div class="filter-header">
								<div class="p-2 pt-3">&nbsp;</div>
								<div class="form-group">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search by item name">
										<span class="input-group-btn">
											<button type="submit" class="btn btn-transparent"><i class="ico ico-search"></i></button>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="filter-head d-flex justify-content-between">
									<div class="text-primary"><label class="fw-700 m-0">Product Catalog</label></div>
									<div class="text-right"><a class="text-secondary" href="javascript:void(0)">clear all</a></div>
								</div>
								<div class="check-wrap">
									<div class="custom-check">
										<input id="catalog-1" type="checkbox" checked=""><label class="d-flex" for="catalog-1"><span class="text-truncate">RB Bags</span></label>
									</div>
									<div class="custom-check">
										<input id="catalog-2" type="checkbox"><label class="d-flex" for="catalog-2"><span class="text-truncate">Weather Gears</span></label>
									</div>
									<div class="custom-check">
										<input id="catalog-3" type="checkbox"><label class="d-flex" for="catalog-3"><span class="text-truncate">Other</span></label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="fw-700 m-0">Price Range</label>
								<div class="range-wrap" data-format="$ {val}" data-min="10" data-max="2000" data-step="10" data-def-min="21" data-def-max="731">
									<div class="input-range"><input type="hidden"></div>
									<div class="d-flex justify-content-between range-value">
										<div class="min-value text-muted"></div>
										<div class="max-value text-muted"></div>
									</div>
								</div>
							</div>
							<div class="filter-footer d-block d-lg-none"><a class="toggle-filter btn btn-primary" data-trigger="true" href="javascript:void(0)">Filter</a></div>
						</div><!--//Filter Wrap for Mobile-->
					</form>
				</div><!--//Left Filter-->

				<!--Main Result-->
				<div class="col-lg-9 has-bg-right">
					<div class="has-bg-inner mt-5">
						<!--Main Tabs-->
						<ul class="nav nav-tabs nav-fill">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#for-men">For Men</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#for-women">For Women</a>
							</li>
						</ul><!--//Main Tabs-->
						<!--Main Tabs Content-->
						<div class="tab-content">
							<!--Main Tabs - For Men-->
							<div class="tab-pane active" id="for-men">
								<div class="row products">
									<div class="col-md-4">
										<div class="bx-bs">
											<div class="product-img"><img class="img" style="background-image:url('{{asset('img/product/jacket.gif')}}')" src="{{asset('img/product/product.gif')}}"></div>
											<div class="product-name text-truncate">Weather Gear Product Full Name</div>
											<div class="product-rating-review">
												<div class="d-flex justify-content-between align-items-center">
													<div class="rating rating-4"></div>
													<div class="review"><a href="javascript:void(0)"><span class="fw-600 d-block">25</span> reviews</a></div>
												</div>
											</div>
											<div class="product-info">
												<div class="d-flex justify-content-between align-items-center">
													<div class="product-price">$ 144</div>
													<div class="product-favorite"><a href="javascript:void(0)"><i class="ico ico-love"></i></a></div>
												</div>
												<div class="product-btn">
													<a class="btn btn-primary btn-block" href="{{route('shop.product.detail')}}">Buy</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="bx-bs">
											<div class="product-img"><img class="img" style="background-image:url('{{asset('img/product/bag-1.jpg')}}')" src="{{asset('img/product/product.gif')}}"></div>
											<div class="product-name text-truncate">RB Bag Product Full Name</div>
											<div class="product-rating-review">
												<div class="d-flex justify-content-between align-items-center">
													<div class="rating rating-5"></div>
													<div class="review"><a href="javascript:void(0)"><span class="fw-600 d-block">10</span> reviews</a></div>
												</div>
											</div>
											<div class="product-info">
												<div class="d-flex justify-content-between align-items-center">
													<div class="product-price">$ 60</div>
													<div class="product-favorite active"><a href="javascript:void(0)"><i class="ico ico-love"></i></a></div>
												</div>
												<div class="product-btn">
													<a class="btn btn-primary btn-block" href="{{route('shop.product.detail')}}">Buy</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="bx-bs">
											<div class="product-img"><img class="img" style="background-image:url('{{asset('img/product/bag-2.jpg')}}')" src="{{asset('img/product/product.gif')}}"></div>
											<div class="product-name text-truncate">RB Bag Product Full Name</div>
											<div class="product-rating-review">
												<div class="d-flex justify-content-between align-items-center">
													<div class="rating rating-5"></div>
													<div class="review"><a href="javascript:void(0)"><span class="fw-600 d-block">13</span> reviews</a></div>
												</div>
											</div>
											<div class="product-info">
												<div class="d-flex justify-content-between align-items-center">
													<div class="product-price">$ 80</div>
													<div class="product-favorite active"><a href="javascript:void(0)"><i class="ico ico-love"></i></a></div>
												</div>
												<div class="product-btn">
													<a class="btn btn-primary btn-block" href="{{route('shop.product.detail')}}">Buy</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<nav class="pagination-wrap">
									<ul class="pagination justify-content-center">
										<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="ico ico-chevron-left"></i></a></li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">4</a></li>
										<li class="page-item"><a class="page-link" href="#">5</a></li>
										<li class="page-item"><a class="page-link" href="#">6</a></li>
										<li class="page-item"><a class="page-link" href="#"><i class="ico ico-chevron-right"></i></a></li>
									</ul>
								</nav>
							</div><!--//Main Tabs - For Men-->

							<div class="tab-pane" id="for-women">
								<div class="result-item">
									<div class="no-data">No data to available here!</div>
								</div>
							</div>

						</div><!--//Main Tabs Content-->
					</div>
				</div><!--//Main Result-->
			</div>
		</div><!--//Container-->
		<div class="pre-loader">
			<div class="icon"><i class="ico ico-timer"></i></div>
			<div class="text">Please wait few seconds<br>until we find best option for you! <div class="dots"><i></i><i></i><i></i></div></div>
		</div>
	</section>
@endsection

@push('scripts')
	<script src="{{asset('rslide/nouislider.min.js')}}"></script>
	<script>
	$('.search-result a[data-toggle="tab"]').on('shown.bs.tab',function(e){
		$(e.target).closest('.result-item').find('.tab-content').addClass('has-tab-active');
	});

	//Toggle Close Child Tabs
	$('.search-result [data-toggle="tab-close"]').on('click',function(e){
		e.preventDefault();
		$(this).closest('.result-item').find('.tab-content').removeClass('has-tab-active');
		$(this).closest('.result-item').find('.tab-pane,.nav-link').removeClass('active show');
	});

	//Fake Loader
	$('[action="flights-no-data.html"]').on('submit',function(e){
		e.preventDefault();
		var form = $(this);
		$('.pre-loader').show();
		setTimeout(function(){
			form[0].submit();
		},1500);
	});
	</script>
@endpush