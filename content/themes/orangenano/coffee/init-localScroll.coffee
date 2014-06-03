if $('#container').length > 0
	header = $('#top')
	window = $(window)
	
	header.localScroll()
		target: window,
		axis: 'xy'