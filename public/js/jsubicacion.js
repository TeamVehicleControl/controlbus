function generarUbicaciones() {
	$.ajax({
		url   : 'C_ubicacion/generarUbicaciones',
		type  : 'POST'
//		data  : {empresa : empresa}
	}).done(function(data){
		try{
			data = JSON.parse(data);
			if(data.error == 0){
				drawMap(data.ubicacion);
			}else {
				return;
			}
		} catch (err){
			msj('error',err.message);
		}
	});
}

function drawMap (ubicacion) {
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Address');
  data.addColumn('string', 'Location');

  data.addRows([
    [ubicacion, 'Plaza norte']
  ]);

  var options = {
    mapType: 'styledMap',
    zoomLevel: 12,
    showTooltip: true,
    showInfoWindow: true,
    useMapTypeControl: true,
    maps: {
      // Your custom mapTypeId holding custom map styles.
      styledMap: {
        name: 'Styled Map', // This name will be displayed in the map type control.
        styles: [
          {featureType: 'poi.attraction',
           stylers: [{color: '#fce8b2'}]
          },
          {featureType: 'road.highway',
           stylers: [{hue: '#0277bd'}, {saturation: -50}]
          },
          {featureType: 'road.highway',
           elementType: 'labels.icon',
           stylers: [{hue: '#000'}, {saturation: 100}, {lightness: 50}]
          },
          {featureType: 'landscape',
           stylers: [{hue: '#259b24'}, {saturation: 10}, {lightness: -22}]
          }
    ]}}
  };

  var map = new google.visualization.Map(document.getElementById('map_div'));

  map.draw(data, options);
  
  google.visualization.events.addListener(map, 'select',
    function() {
	  location.href = 'http://localhost:8080/controlbus/c_alertas';
    });
}

function logout() {
	location.href = 'http://localhost:8080/controlbus/';
}