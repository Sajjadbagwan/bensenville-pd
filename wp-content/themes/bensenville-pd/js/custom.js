jQuery(document).ready(function () {
	heightGlobal();


jQuery('.banner-wrap .owl-carousel').owlCarousel({
	loop: true,
	margin: 10,
	nav: false,
	dots: true,
	autoplay: false,
	autoplayTimeout: 5000,
	autoplayHoverPause: true,
	responsiveClass: true,
	responsive: {
		0: {
			items: 1
		},
		481: {
			items: 1
		},
		769: {
			items: 1
		},
		991: {
			items: 1
		},
		1000: {
			items: 1
		}
	}
});

jQuery('.upcoming-wrap .owl-carousel').owlCarousel({
	loop: true,
	margin: 0,
	nav: true,
	dots: false,
	autoplay: false,
	nav:(jQuery(".upcoming-wrap .owl-carousel .item").length > 4) ? true: false,
	loop:(jQuery(".upcoming-wrap .owl-carousel .item").length > 4) ? true: false, 
	navText: ['<span class="fa fa-chevron-left"></span>', '<span class="fa fa-chevron-right"></span>'],
	autoplayHoverPause: true,
	responsiveClass: true,
	responsive: {
		0: {
			items: 1,
			nav:true,
		},
		481: {
			items: 1,
			nav:true,
		},
		767: {
			items: 2,
			nav:true
		},
		991: {
			items: 3,
			nav:(jQuery(".upcoming-wrap .owl-carousel .item").length > 3) ? true: false,
		},
		1000: {
			items: 4
		}
	}
});



jQuery('.waterpark-slider .owl-carousel').owlCarousel({
	loop: true,
	margin: 0,
	nav: true,
	dots: false,
	navText: ['<span class="fa fa-chevron-left"></span>', '<span class="fa fa-chevron-right"></span>'],
	autoplayHoverPause: true,
	responsiveClass: true,
	responsive: {
		0: {
			items: 1
		},
		481: {
			items: 1
		},
		769: {
			items: 1
		},
		991: {
			items: 1
		},
		1000: {
			items: 1
		}
	}
});


	/*====================Mobile Menu ==================*/
	jQuery('.toggle-line').click(function () {
		jQuery(this).next('.menu-inner').slideToggle(250);
		jQuery('.menu-inner').toggleClass('mobile-open');
		//	jQuery(this).toggleClass('close-trigger');
		return false;

	});

	jQuery('.child-trigger').click(function () {
		jQuery('.sub-menu').toggleClass('menu-open');
	});


	/*---------------------- Touch ----------------------*/
	if (!("ontouchstart" in document.documentElement)) {
		document.documentElement.className += " no-touch";
	} else {
		document.documentElement.className += " touch";
	}


	if (document.documentMode === 10) {
		document.documentElement.className += ' ie10';
	} else if (document.documentMode === 11) {
		document.documentElement.className += ' ie11';
	}

	jQuery(".toggle-line").on("click touchstart", function (event) {
		event.preventDefault();
		event.stopPropagation();
		jQuery("body").toggleClass("menu-open");
	});

	jQuery(document).on('click touchstart', function () {
		jQuery('body').removeClass('menu-open');
		jQuery('body').removeClass('search-open');
		/* jQuery(".search-form-top").css('display' ,'none');*/
	});

	jQuery(".site-header .main-navigation, #serach-form, .social-search .mobile-search, .search-box").on("click touchstart", function (event) {
		event.stopPropagation();
	});


	jQuery(".touch .main-navigation ul li > a").on("click touchstart", function (event) {

		if (!jQuery(this).parent().hasClass("open") && jQuery(this).parent().has("ul").length > 0) {
			event.preventDefault();
			event.stopPropagation();
			/*jQuery(this).parent().addClass("open").siblings().removeClass("open");*/
		}
	});

	jQuery('.menu-item-has-children > a').after(' <div class="child-trigger"><i></i></div>');

	jQuery('.child-trigger').click(function () {
		jQuery(this).parent().siblings('.menu-item-has-children').find('.child-trigger').removeClass('child-open');
		jQuery(this).parent().siblings('.menu-item-has-children').find('.sub-menu').slideUp(250);
		jQuery(this).next('.sub-menu').slideToggle(250);
		jQuery(this).toggleClass('child-open');
		return false;
	});


	jQuery(".social-search .mobile-search").click(function (event) {
		jQuery('body').toggleClass('search-open');

	});


	/***SCROLLBAR***/


	jQuery(".detail-box").mCustomScrollbar();


});
/*===============Google translator==================*/
function googleTranslateElementInit() {
	new google.translate.TranslateElement({
		pageLanguage: 'en'
	}, 'google_translate_element');
}

/*========================== window Resize ============================*/



/*=================== window Load ===================================*/
jQuery(window).load(function () {
	heightGlobal();
});


/*========================== window Resize ============================*/
jQuery(window).resize(function () {
	heightGlobal();
});



/*===== global Height =======*/
function heightGlobal() {
	setTimeout(function () {
		equalheight('.equal-heigth');
	}, 1000);
}


/*===== Equal Height =======*/
equalheight = function (container) {

	var currentTallest = 0,
		currentRowStart = 0,
		rowDivs = new Array(),
		jQueryel,
		topPosition = 0;
	jQuery(container).each(function () {
		jQueryel = jQuery(this);
		jQuery(jQueryel).innerHeight('auto')
		topPostion = jQueryel.offset().top;
		if (currentRowStart != topPostion) {
			for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
				rowDivs[currentDiv].innerHeight(currentTallest);
			}
			rowDivs.length = 0; // empty the array
			currentRowStart = topPostion;
			currentTallest = jQueryel.innerHeight();
			rowDivs.push(jQueryel);
		} else {
			rowDivs.push(jQueryel);
			currentTallest = (currentTallest < jQueryel.innerHeight()) ? (jQueryel.innerHeight()) : (currentTallest);
		}
		for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
			rowDivs[currentDiv].innerHeight(currentTallest);
		}
	});

}

