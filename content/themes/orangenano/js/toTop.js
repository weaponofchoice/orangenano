// Animate the scroll to top
$('#toTop').click(function(event) {
	event.preventDefault();
	$('html, body').animate({scrollTop: 0}, 300);
});
