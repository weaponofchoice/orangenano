if $('body').length > 0
	header = $('#top')
	header_height = header.height() + 25; #the 25px account for the .8em padding
	
	container = $('#container')
	container_height = container.height();
	
	header.css "height", header_height
	container.css "top", header_height
	
	$(window).on 'resize', ->
			viewport = window.innerHeight
			header_height = header.height() + 25; #the 25px account for the .8em padding
			
			header.css "height", header_height
			container.css "top", header_height
	