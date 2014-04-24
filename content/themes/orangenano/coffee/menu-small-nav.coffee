if $('#menu-small-nav').length > 0
	menu = $('#menu-small-nav')
	trigger = $('#icon-menu')
	
	trigger.click ->
		menu.toggleClass 'active'