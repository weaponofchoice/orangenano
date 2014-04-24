if $('.menu').length > 0
	link = $('.menu-item-has-children a')
	submenu = $('.sub-menu')
	
	link.mouseenter ->
		submenu.css "visibility", 'visible'
	
	link.mouseleave ->
		submenu.css "visibility", 'hidden'