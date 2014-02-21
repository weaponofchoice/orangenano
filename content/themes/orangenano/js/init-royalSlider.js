jQuery(document).ready(function($) {
      $(".royalSlider").royalSlider({
          // options go here
					keyboardNavEnabled: true,
					imageScaleMode: 'fill',
					autoScaleSlider: false,
					imageAlignCenter: true,
					slidesSpacing: 0,
					loop: true,
					transitionSpeed: 200,
					controlNavigation: 'bullets',
					arrowsNavHideOnTouch: true
      });  
});