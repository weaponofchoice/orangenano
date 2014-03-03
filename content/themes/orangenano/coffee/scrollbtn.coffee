if $('#scrollbtn').length > 0
	button = $('#scrollbtn')
	body = $('body')
	timeout = null
	viewport = window.innerHeight
	
	button.click ->
		body.animate
			scrollTop: '+=' + viewport;
		return
	
	$(window).bind "scroll", ->
		clearTimeout timeout
		timeout = setTimeout(->
			button.fadeIn();
		,50)