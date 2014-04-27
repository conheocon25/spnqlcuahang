/*<![CDATA[*/
var mapGoogle;
function changemapGoogle(){
	var toado = $('#Position option[selected]="selected"').attr('title');
	var arrayToado = toado.split(',');				
	var center = new GLatLng(parseFloat(arrayToado[0]),parseFloat(arrayToado[1]));
	mapGoogle.setCenter(center, 17);
}

function SetNewMapGoogle(){	
	var latitude = 10.241484; //$("#lat").val();
	var longitude = 105.980255; //$("#lng").val();				
	var center = new GLatLng(parseFloat(latitude),parseFloat(longitude));
	var marker = new GMarker(center, {draggable: false}); 
	mapGoogle.setCenter(center, 17);
	mapGoogle.addOverlay(marker);		
	marker.openInfoWindowHtml('<img src="/mvc/templates/front/img/logo_guest.png" height="60px" width="60px"/><span style="font:bold 24px/30px arial;color:red;padding-left:5%">Trung Tâm Điện Máy Minh Hoàng</span><h5>Địa chỉ: 33 Phạm Thái Bường, 4, Vĩnh Long</h5>');	
	
}

function showMaker(lat, lng) {					
	var center = new GLatLng(parseFloat(lat),parseFloat(lng));		
	var marker = new GMarker(center, {draggable: false}); 
	mapGoogle.setCenter(center, 17);
	mapGoogle.addOverlay(marker);		
	marker.openInfoWindowHtml('<img src="/mvc/templates/front/img/logo_guest.png" height="60px" width="60px"/><span style="font:bold 24px/30px arial;color:red;padding-left:5%">Trung Tâm Điện Máy Minh Hoàng</span><h5>Địa chỉ: 33 Phạm Thái Bường, 4, Vĩnh Long</h5>');	
	
}
	
function load(){
	if (GBrowserIsCompatible()){
		mapGoogle = new GmapGoogle2(document.getElementById("map"));
		mapGoogle.addControl (new GSmallmapGoogleControl());
		mapGoogle.addControl(new GmapGoogleTypeControl());
		var center = new GLatLng(10.241484,105.980255);
		mapGoogle.setCenter(center, 17);
		//mapGoogle.setmapGoogleType(G_SATELLITE_mapGoogle);
		//mapGoogle.setmapGoogleType(G_HYBRID_mapGoogle);
		mapGoogle.enableScrollWheelZoom();
		geocoder = new GClientGeocoder();

		var marker = new GMarker(center, {draggable: false}); 
		mapGoogle.addOverlay(marker);
		
		
		document.getElementById("lat").value = center.lat();
		document.getElementById("lng").value = center.lng ();
		
		//geocoder = new GClientGeocoder();

		GEvent.addListener(marker, "dragend", function() {
			var point = marker.getPoint();
			mapGoogle.panTo(point);
			document.getElementById("lat").value = point.lat();
			document.getElementById("lng").value = point.lng();
		});

		GEvent.addListener(mapGoogle, "moveend", function(){
			mapGoogle.clearOverlays();
			var center = mapGoogle.getCenter();
			var marker = new GMarker(center, {draggable: true});
			mapGoogle.addOverlay(marker);
			document.getElementById ("lat").value = center.lat();
			document.getElementById("lng").value = center.lng();

			GEvent.addListener(marker, "dragend", function() {
				var point =marker.getPoint();
				mapGoogle.panTo(point);
				document.getElementById("lat").value = point.lat();
				document.getElementById("lng").value = point.lng();
			});
		});
		
	}
}

function showAddress(address) {
	mapGoogle = new GmapGoogle2(document.getElementById("mapGoogle"));
	mapGoogle.addControl(new GSmallmapGoogleControl());
	mapGoogle.addControl(new GmapGoogleTypeControl());
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
					mapGoogle.clearOverlays()
					mapGoogle.setCenter(point, 14);
					var marker = new GMarker(point, {draggable: true}); 
					mapGoogle.addOverlay(marker);

					GEvent.addListener(marker, "dragend", function() {
						var pt =marker.getPoint();
						mapGoogle.panTo(pt);
						document.getElementById("lat").value = pt.lat();
						document.getElementById("lng").value = pt.lng();
					});

				GEvent.addListener(mapGoogle, "moveend", function() {
				mapGoogle.clearOverlays();
				var center = mapGoogle.getCenter();
				var marker = new GMarker(center, {draggable: true});
				mapGoogle.addOverlay(marker);
				document.getElementById ("lat").value = center.lat();
				document.getElementById("lng").value = center.lng();

				GEvent.addListener(marker, "dragend", function() {
				var pt =marker.getPoint();
				mapGoogle.panTo(pt);
				document.getElementById("lat").value = pt.lat();
				document.getElementById("lng").value = pt.lng();
				});
				});
			}}
		);
	}
}

/*]]>*/