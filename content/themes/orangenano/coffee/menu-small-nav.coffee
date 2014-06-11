if $('.menu-small-nav').length > 0
	menu = $('.menu-small-nav')
	trigger = $('.hamburger')
	
	trigger.click ->
		menu.toggleClass 'active'