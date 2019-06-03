jQuery('.banner-wrap .owl-carousel').owlCarousel({
	loop: true,
	margin: 10,
	nav: false,
	dots: true,
	//	autoplay: true,
	//	autoplayTimeout: 3000,
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
			items: 2
		},
		991: {
			items: 2
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
/*===============Google translator==================*/
function googleTranslateElementInit() {
	new google.translate.TranslateElement({
		pageLanguage: 'en'
	}, 'google_translate_element');
}

/*========================== window Resize ============================*/
jQuery(document).ready(function () {
	heightGlobal();
});


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

/*====================Mobile Menu ==================*/
jQuery('.toggle-line').click(function () {
	jQuery(this).next('.menu-inner').slideToggle(250);
	jQuery('.menu-inner').toggleClass('mobile-open');
	//	jQuery(this).toggleClass('close-trigger');
	return false;

});