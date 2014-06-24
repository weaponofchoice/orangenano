var image = new google.maps.MarkerImage(
    'http://orangenano.com/content/themes/orangenano/img/marker.png',
    new google.maps.Size(66,66),    // size of the image
    new google.maps.Point(0,0), // origin, in this case top-left corner
    new google.maps.Point(33, 33)    // anchor, i.e. the point half-way along the bottom of the image
	);
	
	var map;
	    $(document).ready(function(){
			
			//Gmaps options
			map = new GMaps({
				scrollwheel: false,
				zoom: 15,
				el: '#map',
				lat: 52.588056,
				lng: 4.700614,
				mapTypeControlOptions: {
				          mapTypeIds : ["hybrid", "roadmap", "satellite", "terrain", "osm", "cloudmade"]
				        }
			});
			
			//Marker setup
			map.addMarker({
				lat: 52.588056,
				lng: 4.700614,
				title: 'Orange Nano',
				icon: image
			});
		
			//Map styling(in this case: gray)
			var styles = [
		    {
		        "stylers": [
		            {
		                "saturation": -100
		            }
		        ]
		    }
			];

			map.setOptions({styles: styles});
	})