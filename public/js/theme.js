/*“use strict” mode on* "use strict"; */

/* Fix the position of an element when it is about to be scrolled off-screen */
function smartPosition(obj) {
	jQuery(window).scroll(function() {
		// Detect if content is being scroll offscreen.
		if ( (document.documentElement.scrollTop || document.body.scrollTop) >= jQuery(obj).offset().top - (0)) {
			jQuery('body').addClass('smartposition');
		} else {
			jQuery('body').removeClass('smartposition');
		}
	});
};


jQuery(document).ready(function($){
	
	/*=======================================
		Preloader fade out 
	=========================================*/

    $('#preloader').fadeOut();
	var windowWidth = $(window).width();

	/*=======================================
		Main slider height
	=========================================*/

	//var slider_1_height = 1280;
	if(windowWidth > 768){
		$('#slider').sliderPro({
			width: '100%',
			height: 550,
			fade: true,
			arrows: false,
			buttons: true,
			waitForLayers: true,
			autoplay: true,
			autoplayDelay: 4000,
			autoplayOnHover: 'pause',
			autoScaleLayers: false,
		});
	}else{
		$('#slider').sliderPro({
			/*
			width: '100%',
			height: 550,
			responsive: true,
			fade: true,
			arrows: false,
			buttons: true,
			waitForLayers: true,
			autoplay: true,
			autoplayDelay: 4000,
			autoplayOnHover: 'pause',
			autoScaleLayers: true,
			smallSize: 480
			*/
			width: 960,
			height: 500,
			fade: true,
			arrows: false,
			buttons: true,
			fullScreen: true,
			autoplay: true,
			autoplayDelay: 4000,
			autoplayOnHover: 'pause',
		});
	}
	
	/*=======================================
		Isotope portfolio init
	=========================================*/

	var $grid = $('#isotope-items').isotope({
		itemSelector: '.isotope-item',
		layoutMode: 'fitRows'
	});

	/*======================================= 
		Bind isotope filter button click 
	=========================================*/

	$('#isotope-filter').on( 'click', 'li>a', function() {
		var filterValue = $( this ).attr('data-filter');
		$grid.isotope({ filter: filterValue });
		$('#isotope-filter>li>a').removeClass('active');
		$( this ).addClass('active');
		return false;
	});

	/*=======================================
		Tabs carousel
	=========================================*/

    function tabscarousel(){
		if($('*').is('.tabs-carousel')) {
			var containerWidth = $('.tips-tabs').width() - 60;
			if($(window).width() > 992){
				var itemWidth = containerWidth/3;
			}else{
				var itemWidth = containerWidth/2;
			}
			$('.tabs-carousel li').width(itemWidth + 'px');
			var tabsNumber = 0;
			$('.tabs-carousel li').each(function() {
				tabsNumber += 1;
			});
			if(tabsNumber <= 3){
				$('.tabs-carousel').width($('.tips-tabs').width() + 'px');
				$('.tabs-carousel').css('left', '0');
				$('#next-tips, #prev-tips, .right-fade, .left-fade').css('display', 'none');
			}else{
				$('.tabs-carousel').width(itemWidth*tabsNumber + 'px');
			}
			var left = $('.tabs-carousel').position().left;
			var difference = $('.tabs-carousel').width() - $('.tips-tabs').width();
			$('#next-tips').on('click', function(){
				left = $('.tabs-carousel').position().left - itemWidth;
				if(left > -difference){
					$('.tabs-carousel').css('left', left + 'px');
				}else{
					$('.tabs-carousel').css('left', -difference - 30 + 'px');
				}
			});
			$('#prev-tips').on('click', function(){
				left = $('.tabs-carousel').position().left + itemWidth;
				if(left < 30){
					$('.tabs-carousel').css('left', left + 'px');
				}else{
					$('.tabs-carousel').css('left', 30 + 'px');
				}
			});
		}
	}

	tabscarousel();
	var f3Width = $('#footer-item-3').outerWidth();
	var f4Width = windowWidth/2 - f3Width;
	$('#footer-item-4').outerWidth(f4Width + 'px');
	$(window).on('resize', function () {
		f3Width = $('#footer-item-3').outerWidth();
		f4Width = windowWidth/2 - f3Width;
		$('#footer-item-4').outerWidth(f4Width + 'px');
		tabscarousel();
	});
});


(function ($) {
	
	/*=======================================
		Contact Form
	=========================================*/
	
	if($('#contactForm').length !== 0){
		var options = {
			target: '.message .alert',
			beforeSubmit: showRequest,
			success: showResponse
		};
		$('#contactForm').ajaxForm(options);
		function showRequest(formData, jqForm, options) {
			var queryString = $.param(formData);
				return true;
			}
		function showResponse(responseText, statusText) {
			}
	}

	/*=======================================
		Fancybox init
	=========================================*/
	
	$(".fancybox").fancybox({
		tpl:  {
			closeBtn : '<a title="Close" class="fancybox-close-btn" href="javascript:;"><i class="fa fa-close"></i></a>',
		},
	});
	var windowWidth = $(window).width();
		if(windowWidth > 768){
			$(".fancybox-1").fancybox({
			tpl:  {
				closeBtn : '<a title="Close" class="fancybox-close-btn" href="javascript:;"><i class="fa fa-close"></i></a>',
			},
			minHeight: 725
		});

        $(".fancybox-2").fancybox({
			tpl:  {
				closeBtn : '<a title="Close" class="fancybox-close-btn" href="javascript:;"><i class="fa fa-close"></i></a>',
			},
			minHeight: 690
		});

	}else{
		$(".fancybox-1").fancybox({
			tpl:  {
				closeBtn : '<a title="Close" class="fancybox-close-btn" href="javascript:;"><i class="fa fa-close"></i></a>',
			},
			minHeight: 670
		});

        $(".fancybox-2").fancybox({
			tpl:  {
				closeBtn : '<a title="Close" class="fancybox-close-btn" href="javascript:;"><i class="fa fa-close"></i></a>',
			},
			minHeight: 770
		});
	}

	var patternColor = 'fff';
	$('.bg-pattern').each(function (i) {
		patternColor = $(this).data('bgcolor');
		$(this).attr('style', 'background-color: #' + patternColor + ' !important');
	});

	/*=======================================
		Select style
	=========================================*/
	
	$('.form-doctor').selectBox({
		mobile: true
	});

	/*=======================================
		Form validate 
	=========================================*/

    $.validate();
	$('.booking-form-item .help').mouseover(function(){
		$(this).parent().children('.help-block').fadeIn(250);
	}).mouseout(function(){
		$(this).parent().children('.help-block').fadeOut(250);
	});

	/*=======================================
		Owl carousels 
	=========================================*/

	var owl = $("#owl-certs");
		owl.owlCarousel({
		items: 5, //1 items above 1000px browser width
		itemsDesktop: [1000, 4], //1 items between 1000px and 901px
		itemsDesktopSmall: [900, 3], // betweem 900px and 601px
		itemsTablet: [600, 1], //1 items between 600 and 0
		pagination: false,
	});

	var owl1 = $("#owl-doctors");
		owl1.owlCarousel({
		items: 3, //1 items above 1000px browser width
		itemsDesktop: [1000, 3], //1 items between 1000px and 901px
		itemsDesktopSmall: [900, 2], // betweem 900px and 601px
		itemsTablet: [600, 1], //1 items between 600 and 0
		pagination: false,
	});

	var owl2 = $("#owl-stories");
		owl2.owlCarousel({
		items: 1, //1 items above 1000px browser width
		itemsDesktop: [1000, 1], //1 items between 1000px and 901px
		itemsDesktopSmall: [900, 1], // betweem 900px and 601px
		itemsTablet: [600, 1], //1 items between 600 and 0
		pagination: false,
		autoPlay : 4000,
		transitionStyle : "backSlide"
	});

	var owl3 = $("#owl-review");
		owl3.owlCarousel({
		items: 2, //1 items above 1000px browser width
		itemsDesktop: [1000, 2], //1 items between 1000px and 901px
		itemsDesktopSmall: [900, 2], // betweem 900px and 601px
		itemsTablet: [600, 1], //1 items between 600 and 0
		pagination: false,
	});

	var owl4 = $("#owl-blog");
		owl4.owlCarousel({
		items: 3, //1 items above 1000px browser width
		itemsDesktop: [1000, 3], //1 items between 1000px and 901px
		itemsDesktopSmall: [900, 2], // betweem 900px and 601px
		itemsTablet: [600, 1], //1 items between 600 and 0
		pagination: false,
	});

	var owl5 = $("#owl-clients");
		owl5.owlCarousel({
		items: 5, //1 items above 1000px browser width
		itemsDesktop: [1000, 4], //1 items between 1000px and 901px
		itemsDesktopSmall: [900, 3], // betweem 900px and 601px
		itemsTablet: [600, 1], //1 items between 600 and 0
		pagination: false,
	});

	var owl6 = $("#owl-review2");
		owl6.owlCarousel({
		items: 1, //1 items above 1000px browser width
		itemsDesktop: [1000, 1], //1 items between 1000px and 901px
		itemsDesktopSmall: [900, 1], // betweem 900px and 601px
		itemsTablet: [600, 1], //1 items between 600 and 0
		pagination: true,

	});

	var owl7 = $("#owl-image-carousel");
		owl7.owlCarousel({
		items: 1, //1 items above 1000px browser width
		itemsDesktop: [1000, 1], //1 items between 1000px and 901px
		itemsDesktopSmall: [900, 1], // betweem 900px and 601px
		itemsTablet: [600, 1], //1 items between 600 and 0
		pagination: false,
	});

	// Custom Navigation Events

	$('.carousel-next').on('click', function(){
		$(this).parent().find('.owl-carousel').trigger('owl.next');
		return false;
	});

	$('.carousel-prev').on('click', function(){
		$(this).parent().find('.owl-carousel').trigger('owl.prev');
		return false;
	});

	/*=================================================
		Number animation in we did section on scroll 
	===================================================*/

	$('#numbers').on('scrollSpy:enter', function() {
		$('#num1').animate({ num: 5 - 1 }, {
			duration: 4000,
			step: function (num){
				this.innerHTML = (num + 1).toFixed(0)
			}
		});
		$('#num2').animate({ num: 2405 - 3 }, {
			duration: 4300,
			step: function (num){
				this.innerHTML = (num + 3).toFixed(0)
			}
		});

		$('#num3').animate({ num: 50 - 1 }, {
			duration: 4600,
			step: function (num){
				this.innerHTML = (num + 1).toFixed(0)
			}
		});

		$('#num4').animate({ num: 67 - 1 }, {
			duration: 4900,
			step: function (num){
				this.innerHTML = (num + 1).toFixed(0)
			}
		});
	});

	$('#numbers').scrollSpy();

	/*=======================================
		Star rating 
	=========================================*/

	$('#stories-rating-1').barrating({
		theme: 'fontawesome-stars-o',
		showSelectedRating: false,
		initialRating: 5,
		readonly: true
	});

    $('#stories-rating-2').barrating({
		theme: 'fontawesome-stars-o',
		showSelectedRating: false,
		initialRating: 4.8,
		readonly: true
	});

	/*=======================================
		Datepicker init
	=========================================*/

	$('.datepicker-f').datetimepicker({
		format: "DD/MM/YYYY",
		minDate: new Date(),
		icons: {
			up: 'fa fa-angle-up',
			down: 'fa fa-angle-down',
			previous: 'fa fa-angle-left',
			next: 'fa fa-angle-right',
		}
	});

	/*=======================================
		Timepicker init 
	=========================================*/

    $('.timepicker-f').datetimepicker({
		format: "HH:mm A",
		icons: {
			up: 'fa fa-angle-up',
			down: 'fa fa-angle-down',
			previous: 'fa fa-angle-left',
			next: 'fa fa-angle-right',
		}
	});

	/*=======================================
		Show responsive menu 
	=========================================*/

    $('#show-menu').on('click', function(){
		if($('#top-menu .navbar-nav').css('display') == 'none'){
			$('#top-menu .navbar-nav').slideDown();
			$(this).html('<i class="fa fa-close"></i>');
		}else{
			$('#top-menu .navbar-nav').slideUp();
			$(this).html('<i class="fa fa-bars"></i>');
		}
	});

	/*=======================================
		Sticky top menu
	=========================================*/
	
	/*
	$(window).on('scroll', function(){
		if($(window).width() > 768){
			if($(this).scrollTop() > 133){
				$('#top-menu').css('position', 'fixed').css('top', '0');
				$('.top-menu .navbar-nav').css('float', 'right');
				$('.top-menu-logo').fadeIn();
				$('#totop').fadeIn(400);
			}else{
				$('#top-menu').css('position', 'absolute').css('top', '133px');
				$('.top-menu .navbar-nav').css('float', 'left');
				$('.top-menu-logo').css('display', 'none');
				$('#totop').fadeOut(400);
			}
		}else{
			if($(this).scrollTop() > 253){
				$('#top-menu').css('position', 'fixed').css('top', '0');
				$('.top-menu-logo').fadeIn();
				$('.mobile-bar').css('float', 'right').css('margin', '0');
				$('#totop').fadeIn(400);
			}else{
				$('#top-menu').css('position', 'absolute').css('top', '253px');
				$('.top-menu-logo').css('display', 'none');
				$('.mobile-bar').css('float', 'none').css('margin', '0 auto');
				$('#totop').fadeOut(400);
			}
		}
	});
	*/
	
	$('<div id="smartposition"></div>').insertBefore('#top-menu');
	smartPosition('#smartposition');	
	

	$('#totop').on('click', function () { 
		$('body, html').animate({
			scrollTop: 0
		}, 1000);
	});

	var windowWidth = $(window).width();
	var containerW = $('.container').width();
	var mapInfoL = (windowWidth - containerW)/2;

	$('#map-info').css('left', mapInfoL + 'px');

	function get_cookie ( cookie_name ){
		var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );
		if ( results )
			return ( unescape ( results[2] ) );
		else
		return null;
	}
	
	/*=== Color swicher ====*/		
    
	
    $('.color-sw-open, .color-sw-open-1').on('click', function(){
		if(!$(this).hasClass('opn')){
			$(this).addClass('opn');
			$('#color-sw').css('left', '10px');
		}
		else{
			$(this).removeClass('opn');
			$('#color-sw').css('left', '-190px');
		}
	});
    $('#color-sw-close').on('click', function(){
		$('.color-sw-open').removeClass('opn');
		$('.color-sw-open-1').removeClass('opn');
        $('#color-sw').css('left', '-190px');
	});
	
	
    
    $('#blue').on('click', function(){
		$("head link[rel='stylesheet']").last().after("<link rel='stylesheet' href='css/theme.css' type='text/css' media='screen'>");
        $('.color-sw-item').removeClass('active');
        $(this).addClass('active');
        document.cookie = "color=blue";
	})
    $('#violet').on('click', function(){
		$("head link[rel='stylesheet']").last().after("<link rel='stylesheet' href='css/theme_violet.css' type='text/css' media='screen'>");
        $('.color-sw-item').removeClass('active');
        $(this).addClass('active');
        document.cookie = "color=violet";
	})
    $('#red').on('click', function(){
		$("head link[rel='stylesheet']").last().after("<link rel='stylesheet' href='css/theme_red.css' type='text/css' media='screen'>");
        $('.color-sw-item').removeClass('active');
        $(this).addClass('active');
        document.cookie = "color=red";
	})
    $('#green').on('click', function(){
		$("head link[rel='stylesheet']").last().after("<link rel='stylesheet' href='css/theme_green.css' type='text/css' media='screen'>");
        $('.color-sw-item').removeClass('active');
        $(this).addClass('active');
        document.cookie = "color=green";
	})
    
    if(get_cookie ('color') == 'violet'){
        $("head link[rel='stylesheet']").last().after("<link rel='stylesheet' href='css/theme_violet.css' type='text/css' media='screen'>");
        $('.color-sw-item').removeClass('active');
        $('#violet').addClass('active');
    }
    if(get_cookie ('color') == 'red'){
        $("head link[rel='stylesheet']").last().after("<link rel='stylesheet' href='css/theme_red.css' type='text/css' media='screen'>");
        $('.color-sw-item').removeClass('active');
        $('#red').addClass('active');
    }
    if(get_cookie ('color') == 'green'){
        $("head link[rel='stylesheet']").last().after("<link rel='stylesheet' href='css/theme_green.css' type='text/css' media='screen'>");
        $('.color-sw-item').removeClass('active');
        $('#green').addClass('active');
    }
    
    if(windowWidth < 768){
        $('.help').on('click', function(){
            if($(this).children('.t-tooltip-text').css('opacity') == 1){
                $(this).children('.t-tooltip-text').css('opacity', '0').css('visibility', 'hidden');
            }else{
                $(this).children('.t-tooltip-text').css('opacity', '1').css('visibility', 'visible');
            }
        })
        $(document).click(function(event) {
            if ($(event.target).closest('.help').length) return;
            $('.t-tooltip-text').css('opacity', '0').css('visibility', 'hidden');
            event.stopPropagation();
        });
    }
	

})(jQuery);


function initialize() {

	/* ==== CENTER AND MARKER COORDINATES ====*/
	var myLatlng = new google.maps.LatLng(27.92936524,-82.5084883);

	/* ==== MAP OPTIONS ====*/
	var mapOptions = {
		center: myLatlng,
		zoom: 17,
		scrollwheel: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	
	/* ==== MAP INITIALIZE ====*/
	var map = new google.maps.Map(document.getElementById("footer-item-4"), mapOptions);

	if($('*').is('#map')) {
		var map1 = new google.maps.Map(document.getElementById("map"), mapOptions);
	}

	/* ==== MARKER IMAGE ====*/
	var image = 'images/marker.png';
	
	/* ==== SET MARKER ====*/
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		icon: image
	});

	if($('*').is('#map')) {
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map1,
			icon: image
		});
	}

}
window.onload = function(){
	initialize();
}

