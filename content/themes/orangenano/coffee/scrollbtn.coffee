if $('#scrollbtn').length > 0
	button = $('#scrollbtn')
	body = $('body')
	viewport = window.innerHeight
	
	
	button.click ->
		body.animate
			scrollTop: '+=' + viewport;
		return
		
	#Fade effect
	$(window).on "scroll", ->
	  clearTimeout timer
	  timer = setTimeout scrollStop, 150

	scrollStop = ->
  
	  # do stuff
	  console.log "scrolling stopped"