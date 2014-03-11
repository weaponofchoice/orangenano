var body, button, scrollStop, viewport;

if ($('.scrollbtn').length > 0) {
  button = $('#scrolldown');
  body = $('body');
  viewport = window.innerHeight;
  button.click(function() {
    body.animate({
      scrollTop: '+=' + viewport
    });
  });
	var timer;
		$(window).on('scroll',function () {
		    button.fadeOut();
		    clearTimeout(timer);
		    timer = setTimeout( scrollStop , 750 );
		});
		var scrollStop = function () { 
		    // do stuff
		    button.fadeIn();
		};
}