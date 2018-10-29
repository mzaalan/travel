@extends('layouts.master')

@push('styles')
	<link rel="stylesheet" href="{{asset('rslide/nouislider.min.css')}}">
@endpush

@section('content')
	@include('hotel.search')
	@include('hotel.search-result')

	<section class="section has-bg-img has-dark" style="background-image:url('{{asset('img/hotel/hotel.jpg')}}')">
		<div class="bg-img-inner">
			<div class="container">
				<div class="text">Sitting hours and hours in front of the screen scrolling visitors’ reviews about the hotels in your destination area, being lost in a wide diversity of similar-looking hotels... At RoundBooking, we know how it feels. Let us take care about picking up a comfortable accommodation that will become your second home during your trip.</div>
			</div>
		</div>
	</section>
@endsection

@push('scripts')
	<script src="{{asset('rslide/nouislider.min.js')}}"></script>

	<script src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap" async defer></script>
	
	<script>
	function initMap(){
		$('[data-toggle="map"]').each(function(){
			var elm = $(this);
			var color='#ff0';
			var lat = elm.data('lat');
			var lng = elm.data('lng');
			var title = elm.data('title');
			var mapOpt = {
				zoom:11,
				//draggable:false,
				scrollwheel:false,
				//zoomControl:false,
				//mapTypeControl:false,
				//streetViewControl:false,
				//navigationControl:false,
				disableDefaultUI:true,
				center:new google.maps.LatLng(lat,lng),
				mapTypeId: google.maps.MapTypeId.ROADMAP,
			};
			var map = new google.maps.Map(elm[0],mapOpt);
			var mark = [
			'<\?xml version="1.0" encoding="utf-8"\?>',
			'<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 27 36" style="enable-background:new 0 0 27 36;" xml:space="preserve">',
			'<path fill="#23308d" d="M12.1,35.3c0.3,0.5,0.8,0.7,1.4,0.7c0.6,0,1.1-0.2,1.4-0.7l4.7-6.8c2.3-3.4,3.9-5.6,4.6-6.8 c1.1-1.7,1.8-3.1,2.2-4.3s0.6-2.5,0.6-4c0-2.4-0.6-4.7-1.8-6.8C24,4.7,22.3,3,20.3,1.8C18.2,0.6,15.9,0,13.5,0S8.8,0.6,6.8,1.8 C4.7,3,3,4.7,1.8,6.8C0.6,8.8,0,11.1,0,13.5c0,1.5,0.2,2.8,0.6,4s1.1,2.6,2.2,4.3c0.8,1.2,2.3,3.4,4.6,6.8 C9.3,31.3,10.9,33.5,12.1,35.3z M13.5,19.1c-1.5,0-2.9-0.6-4-1.7c-1.1-1.1-1.7-2.4-1.7-4c0-1.5,0.6-2.9,1.7-4c1.1-1.1,2.4-1.7,4-1.7 c1.5,0,2.9,0.6,4,1.7c1.1,1.1,1.7,2.4,1.7,4c0,1.5-0.6,2.9-1.7,4C16.4,18.6,15,19.1,13.5,19.1z"/>',
			'</svg>'
			].join('\n');
			mark = { url:'data:image/svg+xml;charset=UTF-8;base64,' + btoa(mark), scaledSize:new google.maps.Size(45,45), origin:new google.maps.Point(0,0) }
			var marker = new google.maps.Marker({ position: new google.maps.LatLng(lat,lng), map:map, icon:mark, title:title });
		});
	}
	</script>

	<!-- Gallery/Slider -->
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
			scrollBar:wrap.find('.scrollbar'),
			//pagesBar:wrap.find('.pages'),
			activatePageOn:'click',
			speed:300,
			elasticBounds: 1,
			dragHandle:1,
			dynamicHandle:1,
			clickBar:1,
			// Buttons
			//forward:wrap.find('.forward'),
			//backward:wrap.find('.backward'),
			prev:wrap.find('.prev'),
			next:wrap.find('.next'),
			//prevPage:wrap.find('.prevPage'),
			//nextPage:wrap.find('.nextPage')
		},{
			load:function(e,i){
				var url = frame.find('.item:nth-child('+(this.pos.start+1)+')').data('img');
				wrap.find('.main-img img').css('background-image','url(\''+url+'\')');
				wrap.find('.sub-title').html(frame.find('.item').length+1+' Photos');
			}
		});
		frame.sly('on','active',function(e,i){
			var url = frame.find('.item:nth-child('+(i+1)+')').data('img');
			wrap.find('.main-img img').css('background-image','url(\''+url+'\')');
		});
	});

	//Make Gallery Responsive
	$(window).bind('resize',function(){ $('.frame').sly('reload'); });

	//Fix Gallery on Tab Show
	$('.search-result a[data-toggle="tab"]').on('shown.bs.tab',function(e){
		$(e.target).closest('.result-item').find('.tab-content').addClass('has-tab-active');
		$('.frame').sly('reload');
	});

	//Toggle Close Child Tabs
	$('.search-result [data-toggle="tab-close"]').on('click',function(e){
		e.preventDefault();
		$(this).closest('.result-item').find('.tab-content').removeClass('has-tab-active');
		$(this).closest('.result-item').find('.tab-pane,.nav-link').removeClass('active show');
	});

	//Fake Loader
	$('[action="hotels-no-data.html"]').on('submit',function(e){
		e.preventDefault();
		var form = $(this);
		$('.pre-loader').show();
		setTimeout(function(){
			form[0].submit();
		},1500);
	});
	</script>
@endpush