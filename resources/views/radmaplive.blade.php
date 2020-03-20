<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>@yield('title','Radiology Map')</title>


	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
		integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
		crossorigin="" />

	<!-- Scripts -->
	<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
		integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
		crossorigin=""></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-realtime/2.2.0/leaflet-realtime.min.js"></script>

	<style>
		body {
			padding: 0;
			margin: 0;
		}

		html,
		body,
		#map {
			height: 100%;
			width: 100vw;
		}

		#mapid {
			height: 580px;
		}
		.leaflet-fade-anim .leaflet-tile,.leaflet-zoom-anim .leaflet-zoom-animated { will-change:auto !important; }

	</style>
</head>


<body>

	<div id="map"></div>
	<form id="form" action="test" method="GET" style="display: none;">@csrf</form>
	<script>
		var center = [53.520742, -113.523992];

		var mymap = L.map('map').setView(center, 20);

		L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			maxZoom: 18,
			id: 'mapbox/streets-v11',
			tileSize: 512,
			zoomOffset: -1,
			accessToken: 'pk.eyJ1IjoiZGV2dGVra2VuNDgyIiwiYSI6ImNrN21nN2oxdTAwMHMzZW4xc3hwcmljdnMifQ.1bf42iYapSNIQ_PS8D9DbQ'
		}).addTo(mymap);

		var radpopup = L.popup()
    .setLatLng([53.52067209847866, -113.52413713932039])
    .setContent("Radiology Department")
    .openOn(mymap);
	

		// add a marker in the given location
		var upperCorner = [53.521833, -113.525398];
		var lowerCorner = [53.519451, -113.521535];

		//L.marker(upperCorner).addTo(mymap);
		//L.marker(lowerCorner).addTo(mymap);

		var imageUrl = 'http://almasrepair.com/images/floorplan2.png',
			imageBounds = [
				upperCorner,
				lowerCorner
			];
		L.imageOverlay(imageUrl, imageBounds).addTo(mymap).setOpacity(0.7);


		realtime = L.realtime({
			
			url: "{{secure_url('/test')}}",
			crossOrigin: true,
			type: 'json'
		}, {
			interval: 1 * 1000
		}).addTo(mymap);

		realtime.on('update', function() {
			mymap.fitBounds(realtime.getBounds(), {
				maxZoom: 18
			});
		});


		
	</script>
</body>

</html>