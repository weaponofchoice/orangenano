if $('.block').length > 0
	block = $('.block')
	text = $('.row article p')
	
	if(block.css("background-color") == "rgb(51,51,51)")
		text.css("color", "#ffffff")
	else
		text.css("color", "#333333")