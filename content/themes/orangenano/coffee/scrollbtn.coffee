if $('#scrollbtn').length > 0
	button = $('#scrollbtn')
	body = $('body')
	timeout = null
	viewport = window.innerHeight
	
	button.click ->
		body.animate
			scrollTop: '+=' + viewport;
		return
	
	$(window).scroll ->
		console.log "page scrolled"
	
	alert "page scrolled" unless $(window).scroll()