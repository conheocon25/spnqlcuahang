﻿/*<![CDATA[*/
var map;
function changeMap(){
	var toado = $('#Position option[selected]="selected"').attr('title');
	var arrayToado = toado.split(',');				
	var center = new GLatLng(parseFloat(arrayToado[0]),parseFloat(arrayToado[1]));
	map.setCenter(center, 17);
}

function SetNewMap(){	
	var latitude = 10.241484; //$("#lat").val();
	var longitude = 105.980255; //$("#lng").val();				
	var center = new GLatLng(parseFloat(latitude),parseFloat(longitude));
	map.setCenter(center, 17);
}
	
function load(){
	if (GBrowserIsCompatible()){
		map = new GMap2(document.getElementById("map"));
		map.addControl (new GSmallMapControl());
		map.addControl(new GMapTypeControl());
		var center = new GLatLng(10.241484,105.980255);
		map.setCenter(center, 17);
		//map.setMapType(G_SATELLITE_MAP);
		//map.setMapType(G_HYBRID_MAP);
		map.enableScrollWheelZoom();
		geocoder = new GClientGeocoder();

		var marker = new GMarker(center, {draggable: true}); 
		map.addOverlay(marker);
		document.getElementById("lat").value = center.lat();
		document.getElementById("lng").value = center.lng ();

		geocoder = new GClientGeocoder();

		GEvent.addListener(marker, "dragend", function() {
			var point = marker.getPoint();
			map.panTo(point);
			document.getElementById("lat").value = point.lat();
			document.getElementById("lng").value = point.lng();
		});

		GEvent.addListener(map, "moveend", function(){
			map.clearOverlays();
			var center = map.getCenter();
			var marker = new GMarker(center, {draggable: true});
			map.addOverlay(marker);
			document.getElementById ("lat").value = center.lat();
			document.getElementById("lng").value = center.lng();

			GEvent.addListener(marker, "dragend", function() {
				var point =marker.getPoint();
				map.panTo(point);
				document.getElementById("lat").value = point.lat();
				document.getElementById("lng").value = point.lng();
			});
		});
	}
}

function showAddress(address) {
	map = new GMap2(document.getElementById("map"));
	map.addControl(new GSmallMapControl());
	map.addControl(new GMapTypeControl());
	if (geocoder) {
		geocoder.getLatLng (
			address,
			function(point) {
				if (!point) {
					alert(address + " city not found !");
				}
				else {
					document.getElementById("lat").value = point.lat();
					document.getElementById("lng").value = point.lng();
					map.clearOverlays()
					map.setCenter(point, 14);
					var marker = new GMarker(point, {draggable: true}); 
					map.addOverlay(marker);

					GEvent.addListener(marker, "dragend", function() {
						var pt =marker.getPoint();
						map.panTo(pt);
						document.getElementById("lat").value = pt.lat();
						document.getElementById("lng").value = pt.lng();
					});

				GEvent.addListener(map, "moveend", function() {
				map.clearOverlays();
				var center = map.getCenter();
				var marker = new GMarker(center, {draggable: true});
				map.addOverlay(marker);
				document.getElementById ("lat").value = center.lat();
				document.getElementById("lng").value = center.lng();

				GEvent.addListener(marker, "dragend", function() {
				var pt =marker.getPoint();
				map.panTo(pt);
				document.getElementById("lat").value = pt.lat();
				document.getElementById("lng").value = pt.lng();
				});
				});
			}}
		);
	}
}

/*]]>*/