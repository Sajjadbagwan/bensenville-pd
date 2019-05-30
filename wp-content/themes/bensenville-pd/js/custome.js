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
	margin: 10,
	nav: true,
	dots: false,
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
			items: 4
		},
		991: {
			items: 4
		},
		1000: {
			items: 4
		}
	}
});