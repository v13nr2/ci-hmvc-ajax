(function($) {
	"use strict";
	//inview
	var windowWidth = $(window).width(); 

	if (windowWidth < 400){
		
		$('.fade-left, .fade-up, .fade-down, .fade-right, .bounce-in, .rotate-In-Down-Left, .rotate-In-Down-Right').css('opacity','1');
			
	}else{
		
		$('.fade-up').bind('inview', function(event, visible) { if (visible == true) { $(this).addClass('animated fadeInUp'); } });
		$('.fade-down').bind('inview', function(event, visible) { if (visible == true) { $(this).addClass('animated fadeInDown'); } });
		$('.fade-left').bind('inview', function(event, visible) { if (visible == true) { $(this).addClass('animated fadeInLeft'); } });
		$('.fade-right').bind('inview', function(event, visible) { if (visible == true) { $(this).addClass('animated fadeInRight'); } });
		$('.bounce-in').bind('inview', function(event, visible) { if (visible == true) { $(this).addClass('animated bounceIn'); } });
		$('.rotate-In-Down-Left').bind('inview', function(event, visible) { if (visible == true) { $(this).addClass('animated rotateInDownLeft'); } });
		$('.rotate-In-Down-Right').bind('inview', function(event, visible) { if (visible == true) { $(this).addClass('animated rotateInDownRight'); } });	

	}
	///////////
		

	//menu	
	$('.gt_menu').superfish({});	
	//megamenu
	$('.gt_megamenu ul a').removeClass('sf-with-ul');
	$($('.gt_megamenu ul li').find('ul').get().reverse()).each(function(){
	  $(this).replaceWith($('<ol>'+$(this).html()+'</ol>'))
	})
	//responsive
	$('.gt_menu').tinyNav({
		active: 'selected',
		header: 'MENU'
	});
	///////////


	//fixed menu
	jQuery(window).scroll(function(){
		add_class_scroll();
	});
	add_class_scroll();
	function add_class_scroll() {
		if(jQuery(window).scrollTop() > 100) {
			jQuery('.gt_navigation').addClass('slowup');
			jQuery('.gt_navigation').removeClass('slowdown');
		} else {
			jQuery('.gt_navigation').addClass('slowdown');
			jQuery('.gt_navigation').removeClass('slowup');
		}
	}
	//right sidebar OPEN		
	$('.gt_right_sidebar_btn_open').click(function(event){
		$('.gt_right_sidebar').css({
			'right': '0px',
		});
		$('.gt_site, .gt_navigation').css({
			'margin-left': '-300px',
		});
		$('.gt_overlay').addClass('gt_overlay_on');
	});
	//right sidebar CLOSE	
	$('.gt_right_sidebar_btn_close, .gt_overlay').click(function(event){
		$('.gt_right_sidebar').css({
			'right': '-300px'
		});
		$('.gt_site, .gt_navigation').css({
			'margin-left': '0px'
		});
		$('.gt_overlay').removeClass('gt_overlay_on');
	});
	///////////

	//nicescrool
	$(".gt_nicescrool").niceScroll({
		touchbehavior:true,
		cursoropacitymax:1,
		cursorwidth:0,
		autohidemode:false,
		cursorborder:0
	});
	///////////

})(jQuery);