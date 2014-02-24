if $('#gallery').length > 0
	slider = $('.royalSlider')
	
	slider.royalSlider
		# options go here
		keyboardNavEnabled: true,
		imageScaleMode: 'fill',
		autoScaleSlider: false,
		imageAlignCenter: true,
		slidesSpacing: 0,
		loop: true,
		transitionSpeed: 200,
		controlNavigation: 'bullets',
		arrowsNavHideOnTouch: true
	
	