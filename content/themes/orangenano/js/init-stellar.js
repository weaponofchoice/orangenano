$( document ).ready(function() {
	$(function(){
		$('.parallax').css("background-size", "cover");
		$.stellar({
			horizontalScrolling: false,
			verticalOffset: 210
		});
	});
});