if $('.menu').length > 0
	link = $('.menu-item-has-children > a')
	submenu = $('.sub-menu')
	
	link.mouseenter ->
		submenu.css "display", 'block'
	
	link.mouseleave ->
		submenu.css "display", 'none'