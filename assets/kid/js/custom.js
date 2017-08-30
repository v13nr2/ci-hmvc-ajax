$(document).ready(function(){
	"use strict";
	/*
	  ==============================================================
		   Main Banner Script
	  ==============================================================
	*/
	if($('#swiper-container').length){
		var swiper = new Swiper('.swiper-container', {
	        pagination: '.swiper-pagination',
	        nextButton: '.swiper-button-next',
	        prevButton: '.swiper-button-prev',
	        slidesPerView: 1,
	        paginationClickable: true,
	        loop: true,
	        autoplay: 3000,
	        autoplayDisableOnInteraction: false,
	        onInit: function(swiper){
        $('.gt_banner_text h2, .gt_banner_text h3, .gt_banner_text a,.gt_banner_text .btn-left,.gt_banner_text .btn-right').css('visibility','hidden');
			$(' .gt_banner_text h2 ').delay(800).queue(function(next) {
			  $(this).addClass('animated fadeInUp ').css('visibility','visible');
			  next();
			  });
			  $('.gt_banner_text h3').delay(800).queue(function(next) {
			  $(this).addClass('animated fadeInUp').css('visibility','visible');
			  next();
			});
			 $('.gt_banner_text .btn-left').delay(800).queue(function(next) {
			  $(this).addClass('animated fadeInLeft').css('visibility','visible');
			  next();
			});
			 $('.gt_banner_text .btn-right').delay(800).queue(function(next) {
			  $(this).addClass('animated fadeInRight').css('visibility','visible');
			  next();
			});

			       },
			       onSlideChangeStart: function(swiper){
			        $('.gt_banner_text h2, .gt_banner_text h3,.gt_banner_text .btn-left,.gt_banner_text .btn-right').css('visibility','hidden');
			$(' .gt_banner_text h2 ').delay(800).queue(function(next) {
			  $(this).addClass('animated fadeInUp').css('visibility','visible');
			  next();
			  });
			  $('.gt_banner_text h3').delay(800).queue(function(next) {
			  $(this).addClass('animated fadeInUp').css('visibility','visible');
			  next();
			});
			 $('.gt_banner_text .btn-left').delay(800).queue(function(next) {
			  $(this).addClass('animated fadeInLeft').css('visibility','visible');
			  next();
			});
			 $('.gt_banner_text .btn-right').delay(800).queue(function(next) {
			  $(this).addClass('animated fadeInRight').css('visibility','visible');
			  next();
			});
			       },

			           onSlideNextStart: function(swiper){
			 
			 $(' .gt_banner_text h2 ').removeClass('animated fadeInUp');
			 $('.gt_banner_text h3').removeClass('animated fadeInUp');
			 $('.gt_banner_text .btn-left').removeClass('animated fadeInLeft');
			 $('.gt_banner_text .btn-right').removeClass('animated fadeInRight');
			  

			       },
			         onSlidePrevStart: function(swiper){
			 
			 $(' .gt_banner_text h2 ').removeClass('animated fadeInUp');
			 $('.gt_banner_text h3').removeClass('animated fadeInUp');
			 $('.gt_banner_text .btn-left').removeClass('animated fadeInLeft');
			 $('.gt_banner_text .btn-right').removeClass('animated fadeInRight');
			  

			       },
    	});
	}
	/*
	  ==============================================================
		   PopUp Menu Script
	  ==============================================================
	*/
	$('.gt-plus').on('click' , function(){
		$('.gt_popup_wrap').addClass('active');
	});
	$('.gt_popup_remove i').on('click' , function(){
		$('.gt_popup_wrap').removeClass('active');
	});
	/*
	  ==============================================================
		   Search Bar Script
	  ==============================================================
	*/
	$(".top_search_wrap .search-fld").on('click',function(){
		if($(this).hasClass('minus')){        
			$(this).toggleClass("plus minus");
			$('.search-wrapper-area').fadeOut();
		}else{
			$('.search-wrapper-area').fadeIn();
			$(this).toggleClass("minus plus");
		}
	});
	/*
	  ==============================================================
		   Sticky Navigation Script
	  ==============================================================
	*/
	if($('.gt_top_bar_wrap').length){
		// grab the initial top offset of the navigation 
		var stickyNavTop = $('.gt_top_bar_wrap').offset().top;
		// our function that decides weather the navigation bar should have "fixed" css position or not.
		var stickyNav = function(){
			var scrollTop = $(window).scrollTop(); // our current vertical position from the top
			// if we've scrolled more than the navigation, change its position to fixed to stick to top,
			// otherwise change it back to relative
			if (scrollTop > stickyNavTop) { 
				$('.gt_top_bar_wrap').addClass('gt_sticky');
			} else {
				$('.gt_top_bar_wrap').removeClass('gt_top_bar_wrap'); 
			}
		};
		stickyNav();
		// and run it again every time you scroll
		$(window).scroll(function() {
			stickyNav();
		});
	}
	/*
	  ==============================================================
		   Gallery Script
	  ==============================================================
	*/
	if($('#gt_gallery_slider').length){
		$('#gt_gallery_slider').owlCarousel({
			autoplay: true,
			autoPlay: 4000,
			slideSpeed : 800,
			autoplayHoverPause:true,
			loop:true,
			items:5,
			nav:true,
			center:true,
			responsiveClass:true,
			navText: [
			  "<span class='fa fa-angle-left'></span>",
			  "<span class='fa fa-angle-right'></span>"
			  ],
			responsive:{
				0:{items:1},
				480:{items:2},
				600:{items:2},
				768:{items:3},
				1000:{items:5},
				1024:{items:5},
				1280:{items:5},
				1366:{items:5}
			}
		});
	}
	/*
	  ==============================================================
		   Team Detail Script
	  ==============================================================
	*/
	if($('#team_detail_slider').length){
		$('#team_detail_slider').owlCarousel({
			autoplay: true,
			autoPlay: 3000,
			slideSpeed : 800,
			autoplayHoverPause:true,
			loop:true,
			items:6,
			nav:true,
			center:true,
			responsiveClass:true,
			navText: [
			  "<span class='fa fa-angle-left'></span>",
			  "<span class='fa fa-angle-right'></span>"
			  ],
			responsive:{
				0:{items:1},
				480:{items:2},
				600:{items:2},
				768:{items:3},
				1000:{items:5},
				1024:{items:6},
				1280:{items:6},
				1366:{items:6}
			}
		});
	}
	/*
	  ==============================================================
		   Testimonial Script
	  ==============================================================
	*/
	if($('#gt_testimonial_slider').length){
		$('#gt_testimonial_slider').owlCarousel({
			autoplay: true,
			autoPlay: 3000,
			slideSpeed : 800,
			autoplayHoverPause:true,
			loop:true,
			nav:true,
			responsiveClass:true,
			navText: [
			  "<span class='fa fa-angle-left'></span>",
			  "<span class='fa fa-angle-right'></span>"
			  ],
			responsive:{
				0:{items:1},
				480:{items:1},
				600:{items:1},
				768:{items:1},
				1000:{items:2},
				1024:{items:2},
				1280:{items:2},
				1366:{items:2}
			}
		});
	}
	/*
	  ==============================================================
		   Testimonial Script
	  ==============================================================
	*/
	if($('#gt_testimonial2_slider').length){
		$('#gt_testimonial2_slider').owlCarousel({
			autoplay: true,
			autoPlay: 3000,
			slideSpeed : 800,
			autoplayHoverPause:true,
			loop:true,
			nav:true,
			responsiveClass:true,
			navText: [
			  "<span class='fa fa-angle-left'></span>",
			  "<span class='fa fa-angle-right'></span>"
			  ],
			responsive:{
				0:{items:1},
				480:{items:1},
				600:{items:1},
				768:{items:2},
				1000:{items:2},
				1024:{items:2},
				1280:{items:3},
				1366:{items:3}
			}
		});
	}
	/*
	  ==============================================================
		   News and Blog Script
	  ==============================================================
	*/
	if($('#gt_news_slider').length){
		$('#gt_news_slider').owlCarousel({
			autoplay: true,
			autoPlay: 3000,
			slideSpeed : 800,
			autoplayHoverPause:true,
			loop:true,
			items:6,
			nav:true,
			center:true,
			responsiveClass:true,
			navText: [
			  "<span class='fa fa-angle-left'></span>",
			  "<span class='fa fa-angle-right'></span>"
			  ],
			responsive:{
				0:{items:1},
				480:{items:1},
				600:{items:1},
				768:{items:2},
				1000:{items:2},
				1024:{items:3},
				1280:{items:3},
				1366:{items:3}
			}
		});
	}
	/*
	  ==============================================================
		   Our Client Carousel Script
	  ==============================================================
	*/
	if($('.gt_brand_carousel').length){
		$('.gt_brand_carousel').owlCarousel({
			autoplay: true,
			autoPlay: 3000,
			slideSpeed : 800,
			autoplayHoverPause:true,
			loop:true,
			nav:true,
			responsiveClass:true,
			navText: [
			  "<span class='fa fa-angle-left'></span>",
			  "<span class='fa fa-angle-right'></span>"
			  ],
			responsive:{
				0:{items:1},
				320:{items:1},
				600:{items:2},
				768:{items:3},
				1000:{items:3},
				1024:{items:4},
				1280:{items:5},
				1366:{items:5}
			}
		});
	}
	/*
	  ==============================================================
		   Tab View Script Start
	  ============================================================== */
	
	if($('#tabs').length){
		$('#tabs').tab();
	}
	/*
	  =======================================================================
		  		 Pretty Photo Script
	  =======================================================================
	*/
	if($("a[data-rel^='prettyPhoto']").length){
		$("a[data-rel^='prettyPhoto']").prettyPhoto();
	}
	/*
	  ==============================================================
		   Click to Scroll Top Script
	  ==============================================================
	*/
	$(window).on('scroll' , function(){
		if ($(this).scrollTop() > 100) {
			$('.back-to-top').css('opacity','1');
		} else {
			$('.back-to-top').css('opacity','0');
		}
	});
	//Click event to scroll to top
	$('.back-to-top a').on('click',function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	/* ==================================================================
					Number Count Up(WayPoints) Script
	   =================================================================	*/		
	if($('.counter').length){
		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});
	}
	/* ==================================
			Increment Box Function
		==================================	*/
		if($('#up').length){
			$("#up").on('click',function(){
				$("#incdec input").val(parseInt($("#incdec input").val(),10)+1);
			});
		}
		
		if($('#down').length){
			$("#down").on('click',function(){
				$("#incdec input").val(parseInt($("#incdec input").val(),10)-1);
			});
		}
	/*  ==================================================================
				Accordion Script
		================================================================= */
		if($('.gt_accord_hdg').length){
			//custom animation for open/close
			$.fn.slideFadeToggle = function(speed, easing, callback) {
			  return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
			};
			$('.gt_accord_hdg').accordion({
			  defaultOpen: 'service1',
			  cookieName: 'nav',
			  speed: 'slow',
			  animateOpen: function (elem, opts) { //replace the standard slideUp with custom function
				elem.next().stop(true, true).slideFadeToggle(opts.speed);
			  },
			  animateClose: function (elem, opts) { //replace the standard slideDown with custom function
				elem.next().stop(true, true).slideFadeToggle(opts.speed);
			  }
			});
		}
	/* ==================================================================
							Time Counter Script
	  	=================================================================	*/
	if($('.countdown').length){
		$('.countdown').downCount({ date: '08/08/2018 12:00:00', offset: +1 });
	}
	/* ==================================================================
			Progress Bar Script
	  	=================================================================	*/
	if($('WOW').length){
		new WOW().init();
	}
	/* ==================================
			Ajax Contact Form
		==================================	*/
	if($('#contact-form').length){
	 var contactForm = $("#contact-form");
		 var contactResult = $('#contact-result');
			contactForm.validate({
			debug: false,
			submitHandler: function(contactForm) {
			$(contactResult, contactForm).html('Please Wait...');
			$.ajax({
			type: "POST",
			url: "assets/sendmail.php",
			data: $(contactForm).serialize(),
			timeout: 20000,
			success: function(msg) { 
				$(contactResult, contactForm).html('<div class="alert alert-success" role="alert"><strong>Thank you. We will contact you shortly.</strong></div>').delay(3000).fadeOut(2000); 
				},
					error: $('.thanks').show()
				});
				return false;
				}
		});
	}
	/* ==================================
			Chosen Script
		==================================	*/
	if (jQuery('.chosen-select , .chosen-select-deselect , .chosen-select-no-results , .chosen-select-width').length != '') {
	    var config = {
	        '.chosen-select': {
	            width: "100%"
	        },
	        '.chosen-select-deselect': {
	            allow_single_deselect: true
	        },
	        '.chosen-select-no-single': {
	            disable_search_threshold: 10
	        },
	        '.chosen-select-no-results': {
	            no_results_text: 'Oops, nothing found!'
	        },
	        '.chosen-select-width': {
	            width: "95%"
	        }
	    }
	    for (var selector in config) {
	        jQuery(selector).chosen(config[selector]);
	    }
	};
	/*
	  =======================================================================
		  		Filter Able Script Script
	  =======================================================================
	*/
	jQuery(window).load(function($) {
		if(jQuery('#filterable-item-holder-1').length){
		var filter_container = jQuery('#filterable-item-holder-1');
		filter_container.children().css('position','relative');	
		filter_container.masonry({
			singleMode: true,
			itemSelector: '.filterable-item:not(.hide)',
			animate: true,
			animationOptions:{ duration: 800, queue: false }
		});	
		jQuery(window).resize(function(){
			var temp_width =  filter_container.children().filter(':first');
			filter_container.masonry({
				columnWidth: temp_width,
				singleMode: true,
				itemSelector: '.filterable-item:not(.hide)',
				animate: true,
				animationOptions:{ duration: 800, queue: false }
			});		
		});	
		jQuery('ul#filterable-item-filter-1 a').on('click',function(e){	

			jQuery(this).addClass("active");
			jQuery(this).parents("li").siblings().children("a").removeClass("active");
			e.preventDefault();
			var select_filter = jQuery(this).attr('data-value');
			if( select_filter == "All" || jQuery(this).parent().index() == 0 ){		
				filter_container.children().each(function(){
					if( jQuery(this).hasClass('hide') ){
						jQuery(this).removeClass('hide');
						jQuery(this).fadeIn();
					}
				});
			}else{
				filter_container.children().not('.' + select_filter).each(function(){
					if( !jQuery(this).hasClass('hide') ){
						jQuery(this).addClass('hide');
						jQuery(this).fadeOut();
					}
				});
				filter_container.children('.' + select_filter).each(function(){
					if( jQuery(this).hasClass('hide') ){
						jQuery(this).removeClass('hide');
						jQuery(this).fadeIn();
					}
				});
			}
			filter_container.masonry();
		});
		}
	});
	/*
	  =======================================================================
		  		Map Script Script
	  =======================================================================
	*/
	if($('#map-canvas').length){
		google.maps.event.addDomListener(window, 'load', initialize);
	}
	/* ---------------------------------------------------------------------- */
	/*	Google Map Function for Custom Style
	/* ---------------------------------------------------------------------- */
	function initialize() {
		var MY_MAPTYPE_ID = 'custom_style';
		var map;
		var brooklyn = new google.maps.LatLng(40.6743890, -73.9455);
		var featureOpts = [
			{
			  stylers: [
				{ hue: '#f9f9f9' },			
				{ visibility: 'simplified' },
				{ gamma: 0.7 },
				{ saturation: -200 },
				{ lightness: 45 },
				{ weight: 0.6 }
			  ]
			},
			{
			featureType: "road",
			  elementType: "geometry",
			  stylers: [
				{ lightness: 200 },
				{ visibility: "simplified" }
			  ]
			},
			{
			  elementType: 'labels',
			  stylers: [		  
				{ visibility: 'on' }
			  ]
			},
			{
			  featureType: 'water',
			  stylers: [
				{ color: '#ffffff' }
			  ]
			}
		];	
		var mapOptions = {
			zoom: 15,
			scrollwheel: false,
			center: brooklyn,
			mapTypeControlOptions: {
			  mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
			},
			mapTypeId: MY_MAPTYPE_ID
		};
		map = new google.maps.Map(document.getElementById('map-canvas'),
			  mapOptions);
		var styledMapOptions = {
			name: 'Custom Style'
		};
		var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);
		map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
	}
	
});