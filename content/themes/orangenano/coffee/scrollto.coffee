class ScrollTo
	
	constructor: ->
	
	vertical: (target, speed = 300) ->
		$('html, body').animate
			scrollTop: $(target).offset().top
		, parseInt speed

scrollto = new ScrollTo

# $('a', '#header').click (e) ->
#   e.preventDefault
#   scrollto.project $(this).attr 'href'