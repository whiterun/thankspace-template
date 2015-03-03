if ($('#thabkspacebali').length > 0)
{
	google.maps.event.addDomListener(window, 'load', init);
	function init()
	{
		var mapOptions = {
			center: new google.maps.LatLng(-8.661628,115.185241),
			zoom: 12,
			zoomControl: true,
			zoomControlOptions: {
				style: google.maps.ZoomControlStyle.LARGE,
			},
			disableDoubleClickZoom: true,
			mapTypeControl: true,
			mapTypeControlOptions: {
				style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
			},
			scaleControl: false,
			scrollwheel: true,
			panControl: true,
			streetViewControl: false,
			draggable : true,
			overviewMapControl: true,
			overviewMapControlOptions: {
				opened: false,
			},
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			styles: [{'featureType': 'water','stylers': [{ 'color': '#b0b3dc' }]},{'featureType': 'landscape','stylers': [{ 'color': '#393f8c' }]},{'featureType': 'poi','elementType': 'geometry','stylers': [{ 'color': '#0c4152' },{ 'lightness': 5 }]},{'featureType': 'road.highway','elementType': 'geometry.fill','stylers': [{ 'color': '#000000' }]},{'featureType': 'road.highway','elementType': 'geometry.stroke','stylers': [{ 'color': '#0b434f' },{ 'lightness': 25 }]},{'featureType': 'road.arterial','elementType': 'geometry.fill','stylers': [{ 'color': '#000000' }]},{'featureType': 'road.arterial','elementType': 'geometry.stroke','stylers': [{ 'color': '#0b3d51' },{ 'lightness': 16 }]},{'featureType': 'road.local','elementType': 'geometry','stylers': [{ 'color': '#000000' }]},{'elementType': 'labels.text.fill','stylers': [{ 'color': '#ffffff' }]},{'elementType': 'labels.text.stroke','stylers': [{ 'color': '#000000' },{ 'lightness': 13 }]},{'featureType': 'transit','stylers': [{ 'color': '#146474' }]},{'featureType': 'administrative','elementType': 'geometry.fill','stylers': [{ 'color': '#000000' }]},{'featureType': 'administrative','elementType': 'geometry.stroke','stylers': [{ 'color': '#144b53' },{ 'lightness': 14 },{ 'weight': 1.4 }]}],
		}
		
		var mapElement = document.getElementById('thabkspacebali');
		var map = new google.maps.Map(mapElement, mapOptions);
		var locations = [
		['Thankspace Denpasar', 'Thankspace memiliki storage/warehouse di kawasan pergudangan strategis di kawasan Denpasar, Bali.', 'undefined', 'info@thankspace.com', 'Thankspace.com', -8.649069534679057, 115.19543560845955, 'http://1.bp.blogspot.com/-t5YWeI8cuD4/VLJk9ch9rvI/AAAAAAAAM_I/QX9tgkI6wdM/s1600/custom_marker.png']
		];
		
		for (i = 0; i < locations.length; i++)
		{
			if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
			if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
			if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
			if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
			if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
			marker = new google.maps.Marker({
				icon: markericon,
				position: new google.maps.LatLng(locations[i][5], locations[i][6]),
				map: map,
				title: locations[i][0],
				desc: description,
				tel: telephone,
				email: email,
				web: web
			});
			if (web.substring(0, 7) != "http://") {
				link = "http://" + web;
			} else {
				link = web;
			}
			bindInfoWindow(marker, map, locations[i][0], description, telephone, email, web, link);
		}
		
		function bindInfoWindow(marker, map, title, desc, telephone, email, web, link)
		{
			var infoWindowVisible = (function () {
				var currentlyVisible = false;
				return function (visible) {
					if (visible !== undefined) {
						currentlyVisible = visible;
					}
					return currentlyVisible;
				};
			}());
			iw = new google.maps.InfoWindow();
			google.maps.event.addListener(marker, 'click', function() {
				if (infoWindowVisible()) {
					iw.close();
					infoWindowVisible(false);
				} else {
					var html= "<div style='color:#000;background-color:#fff;padding:5px;width:150px;'><h4>"+title+"</h4><p>"+desc+"<p><a href='mailto:"+email+"' >"+email+"<a><a href='"+link+"'' >"+web+"<a></div>";
					iw = new google.maps.InfoWindow({content:html});
					iw.open(map,marker);
					infoWindowVisible(true);
				}
			});
			google.maps.event.addListener(iw, 'closeclick', function () {
				infoWindowVisible(false);
			});
		}
	}
}