if $('.block').length > 0
	block = $('.block')
	text = $('.row article p')
	
	if(block.css("background-color") == "#000000")
		text.addClass 'white'