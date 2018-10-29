$(function(){
	//Header
	var fixBanner = function(){
		var $hero =  $('[data-filter="blur"]');
		var img = $hero.data('image');
		var head = $('.head').outerHeight();
		if(!$('.well-hero.type-blur').length>0){
			$('<div class="well-hero type-blur" style="background-image:url(\''+img+'\')"></div>').insertBefore($hero.find('.content'));
		}
		if(!$('.well-hero.type-org').length>0){
			$('<div class="well-hero type-org" style="background-image:url(\''+img+'\')"></div>').insertBefore($hero.find('.content'));
		}
		$('.well-hero.type-org').css({'top':head,'background-position-y':-head});
		$hero.find('.content').css('padding-top',head);
	}
	fixBanner();
	$(window).bind('resize',fixBanner);
	$('.navbar-toggler [data-action]').on('click',function(e){
		e.preventDefault();
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$('body').removeClass('has-nav-open nav-menu nav-user');
		}else{
			$(this).addClass('active');
			$('body').addClass('has-nav-open nav-'+$(this).data('action'));
		}
	});
	$('.nav-overlay').on('click',function(){
		$('.navbar-toggler [data-action]').removeClass('active');
		$('body').removeClass('has-nav-open nav-menu nav-user');
	});

	//Testimonial
	try{
		$('.testimonial .owl-carousel').owlCarousel({
			items:1,
			nav:true,
			loop:true,
			dots:false,
			navText:['<i class="ico ico-arrow-left"></i>','<i class="ico ico-arrow-right"></i>']
		});
	}catch(err){ console.error(err); }

	//Search Filter
	$('.toggle-filter').off().on('click',function(e){
		e.preventDefault();
		if($(this).hasClass('active')){
			$(this).removeClass('active').closest('body').removeClass('has-filter-active');
		}else{
			$(this).addClass('active').closest('body').addClass('has-filter-active');
		}
		if($(this).data('trigger')==true){
			$('.toggle-filter').removeClass('active').closest('body').removeClass('has-filter-active');
		}
	});

	//Range Slider
	try{		
		$('.range-wrap .input-range').each(function(){
			var input = $(this);
			var wrap = input.closest('.range-wrap');
			noUiSlider.create(input[0],{
				range:{
					'min':[wrap.data('min')],
					'max':[wrap.data('max')]
				},
				step:wrap.data('step'),
				connect:true,
				start:[wrap.data('def-min'),wrap.data('def-max')],
				behaviour:'tap-drag',
			});
			input[0].noUiSlider.on('update.one',function(e){
				var frmt = wrap.data('format');
				wrap.find('.min-value').text(frmt.replace('{val}',parseInt(e[0]).toFixed(0)));
				wrap.find('.max-value').text(frmt.replace('{val}',parseInt(e[1]).toFixed(0)));
				wrap.find('input').val(parseInt(e[0]).toFixed(0)+','+parseInt(e[1]).toFixed(0));
			});
		});
	}catch(err){ console.error(err); }
});