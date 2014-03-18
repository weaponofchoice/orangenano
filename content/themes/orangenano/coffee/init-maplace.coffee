if $('#gmap').length > 0
	map = $('#gmap')
	
	->
		new Maplace
			map_div: '#gmap',
			styles:
				'Greyscale':
					featureType: 'all',
					stylers:
							saturation: -100,
							gamma: 0.50
			locations:
				lat: 50,
				lon: 50,
				zoom: 10
		.load()