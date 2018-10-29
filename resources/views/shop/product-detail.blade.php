@extends('layouts.master')

@section('content')
	<section class="section search-result pb-0">
		<div class="container">
			<div class="d-flex justify-content-between align-items-center">
				<div class="back-button">
					<a href="shop.html"><i class="ico ico-chevron-left"></i> Back to Catalog</a>
				</div>
				<div>
					<div class="form-group">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search by item name">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-transparent"><i class="ico ico-search"></i></button>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row products products-detail">
				<div class="col-md-4">
					<div class="gallery">
						<div class="main-img bx-bs">
							<img class="img" src="{{asset('img/gallery.gif')}}">
						</div>
						<div class="frame">
							<div class="slide">
								<div class="item" data-img="{{asset('img/product/jacket.gif')}}">
									<img style="background-image:url('{{asset('img/product/jacket.gif')}}')" src="{{asset('img/gallery-thumb.gif')}}">
								</div>
								<div class="item" data-img="{{asset('img/product/bag-1.jpg')}}">
									<img style="background-image:url('{{asset('img/product/bag-1.jpg')}}')" src="{{asset('img/gallery-thumb.gif')}}">
								</div>
								<div class="item" data-img="{{asset('img/product/bag-2.jpg')}}">
									<img style="background-image:url('{{asset('img/product/bag-2.jpg')}}')" src="{{asset('img/gallery-thumb.gif')}}">
								</div>
							</div>
						</div>
						<!--<div class="controls">
							<button class="button prev"><i class="ico ico-chevron-left"></i></button>
							<button class="button next"><i class="ico ico-chevron-right"></i></button>
						</div>-->
					</div>
				</div>
				<div class="col-md-8">
					<div class="product-name pb-0">RB Bag Product Full Name</div>
					<div class="pl-3">
						<div class="rating rating-4"></div>
						<a class="text-muted" href="javascript:void(0)"><span class="fw-600">25</span> reviews</a>
						<div class="mt-2 text-primary">
							<p><span class="fw-700">Dimensions:</span> 30cm x 50cm x  20cm<br><span class="fw-700">Material:</span> Lorem Ipsum<br><span class="fw-700">Size:</span> Middle</p>
							<div class="d-flex align-items-center mb-2">
								<a class="btn btn-primary" href="javascript:void(0)">Buy</a>
								<div class="product-price pl-3 pr-3">$ 58</div>
								<div class="product-favorite">Items in <a class="fw-700 text-favorite text-underline" href="javascript:void(0)">Favorites</a></div>
							</div>
							<p class="text-muted">Great bag for trips with your friends.<br>You can handle everything you need in this bag while you on adventure. This bag mage of best materials and will last for years, we can guarantee you highest quality on the market. RoundBooking provide you with best items you need while traveling.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="section-sub-title text-left products-title">Other Items</div>
			<div class="row products">
				<div class="col-sm-6 col-md-4 col-lg-3">
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
				<div class="col-sm-6 col-md-4 col-lg-3">
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
				<div class="col-sm-6 col-md-4 col-lg-3">
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
				<div class="col-sm-6 col-md-4 col-lg-3">
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
			</div>
		</div><!--//Container-->
		<div class="pre-loader">
			<div class="icon"><i class="ico ico-timer"></i></div>
			<div class="text">Please wait few seconds<br>until we find best option for you! <div class="dots"><i></i><i></i><i></i></div></div>
		</div>
	</section>

	<section class="section search-result product-tabs">
		<div class="container">
			<!--Main Tabs-->
			<ul class="nav nav-tabs nav-fill">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#reviews">Reviews</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#description">Description</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#specification">Specification</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#return-policy">Return Policy</a>
				</li>
			</ul><!--//Main Tabs-->
			<!--Main Tabs Content-->
			<div class="tab-content">
				<!--Main Tabs - Reviews-->
				<div class="tab-pane active" id="reviews">
					<div class="result-item">
						<div class="d-flex align-items-center">
							<div class="title text-uppercase">John Doe</div>
							<div class="ml-2 mt-1 rating rating-4"></div>
						</div>
						<div class="p-3 d-flex review-message">
							<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec diam nec dui dignissim sodales. Donec nunc massa, eleifend ac lorem nec, posuere congue leo. <span class="text-muted d-block mt-2">20 May, 2018</span></div>
						</div>
					</div>
					<div class="result-item">
						<div class="d-flex align-items-center">
							<div class="title text-uppercase">John Doe</div>
							<div class="ml-2 mt-1 rating rating-4"></div>
						</div>
						<div class="p-3 d-flex review-message">
							<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec diam nec dui dignissim sodales. Donec nunc massa, eleifend ac lorem nec, posuere congue leo. <span class="text-muted d-block mt-2">20 May, 2018</span></div>
						</div>
					</div>
					<div class="section-sub-title text-left">Leave a Review</div>
					<form method="post">
						<textarea class="form-control" placeholder="Your Message goes here" rows="5"></textarea>
						<div class="text-right mt-3"><button class="btn btn-secondary" type="submit">Submit</button></div>
					</form>
				</div><!--//Main Tabs - Reviews-->
				<!--Main Tabs - Description-->
				<div class="tab-pane" id="description">
					<p class="text-muted">Great bag for trips with your friends.<br>You can handle everything you need in this bag while you on adventure. This bag mage of best materials and will last for years, we can guarantee you highest quality on the market. RoundBooking provide you with best items you need while traveling.</p>
				</div><!--//Main Tabs - Description-->
				<!--Main Tabs - Specification-->
				<div class="tab-pane" id="specification">
					
				</div><!--//Main Tabs - Return Policy-->
				<div class="tab-pane" id="return-policy">
					
				</div><!--//Main Tabs - Return Policy-->
			</div><!--//Main Tabs Content-->
		</div>
	</section>
@endsection

@push('scripts')
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

	<!--Gallery-->
	<script src="{{asset('sly/sly.min.js')}}"></script>
	<script>
	$('.gallery').each(function(){
		var wrap = $(this);
		var frame = wrap.find('.frame');
		frame.sly({
			horizontal:1,
			itemNav:'basic',
			smart:1,
			activateOn:'click',
			mouseDragging:1,
			touchDragging:1,
			releaseSwing:1,
			startAt:0,
			scrollBy:1,
			//scrollBar:wrap.find('.scrollbar'),
			//pagesBar:wrap.find('.pages'),
			activatePageOn:'click',
			speed:300,
			elasticBounds: 1,
			dragHandle:1,
			dynamicHandle:1,
			clickBar:1,
			// Buttons
			//prev:wrap.find('.prev'),
			//next:wrap.find('.next'),
		},{
			load:function(e,i){
				var url = frame.find('.item:nth-child('+(this.pos.start+1)+')').data('img');
				wrap.find('.main-img img').css('background-image','url(\''+url+'\')');
			}
		});
		frame.sly('on','active',function(e,i){
			var url = frame.find('.item:nth-child('+(i+1)+')').data('img');
			wrap.find('.main-img img').css('background-image','url(\''+url+'\')');
		});
	});
	$(window).bind('resize',function(){ $('.frame').sly('reload'); });
	</script>
@endpush