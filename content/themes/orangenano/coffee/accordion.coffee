if $('.accordion').length > 0
	target= $('.accordion')
	
	target.accordion({
		header: 'h4', 
		animate: 200, 
		collapsible: true, 
		active: false,
	});