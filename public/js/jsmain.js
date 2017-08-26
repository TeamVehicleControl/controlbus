$(window).load(function() {
	$("#modalAlertas").modal('show');
	google.charts.setOnLoadCallback(drawTable1);
});

function abirModalAlertas() {
	google.charts.setOnLoadCallback(drawTable1);
	modal('modalAlertas');
	cerrarAlertas();
}

function drawTable1() {
	if(time == 1) {
		var data = new google.visualization.DataTable();
	    data.addColumn('string', 'Alerta');
	    data.addColumn('number', 'Costo');
	    data.addColumn('boolean', 'Solucionadas');
		data.addRows([
		      ['Motor',  {v: 10000, f: '$10,000'}, true],
		      ['Gasolina',   {v: 8000,  f: '$8,000'},  true],
		      ['Bujia', {v: 12500, f: '$12,500'}, true],
		      ['Carburador',   {v: 7000,  f: '$7,000'},  true],
		    ]);
	}else if(time == 2) {
		var data = new google.visualization.DataTable();
	    data.addColumn('string', 'Alerta');
	    data.addColumn('number', 'Costo');
	    data.addColumn('boolean', 'Solucionadas');
	    data.addRows([
	      ['Motor',  {v: 10000, f: '$10,000'}, true],
	      ['Gasolina',   {v: 8000,  f: '$8,000'},  true],
	      ['Bujia', {v: 12500, f: '$12,500'}, true],
	      ['Carburador',   {v: 7000,  f: '$7,000'},  true],
	      ['Sistema eléctrico',   {v: 3500,  f: '$3,500'},  false],
	    ]);
	}

    var table = new google.visualization.Table(document.getElementById('chart_div7'));

    table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
  }

function logout() {
	$.ajax({
		url   : 'C_main/logout',
		type  : 'POST'
	}).done(function(data){
		try{
			data = JSON.parse(data);
			if(data.error == 0){
				location.href = data.url;
			}else {
				return;
			}
		} catch (err){
			msj('error',err.message);
		}
	});
}

var cont = 1;
function refreshTable() {
	var tabla = null;
	$.ajax({
		url   : 'C_main/generarPalabras',
		type  : 'POST'
	}).done(function(data){
		try{
			data = JSON.parse(data);
			if(data.error == 0){
				if(time == 1) {
					return;
				}
				if(time == 2) {
					if(cont == 1) {
						var data = new google.visualization.DataTable();
					    data.addColumn('string', 'Alerta');
					    data.addColumn('number', 'Costo');
					    data.addColumn('boolean', 'Solucionadas');
					    data.addRows([
					    			  ['Motor',  {v: 10000, f: '$10,000'}, true],
							          ['Gasolina',   {v: 8000,  f: '$8,000'},  true],
							          ['Bujia', {v: 12500, f: '$12,500'}, true],
							          ['Carburador',   {v: 7000,  f: '$7,000'},  true],
								    ]);
					}else if(cont == 2) {
						var data = new google.visualization.DataTable();
					    data.addColumn('string', 'Alerta');
					    data.addColumn('number', 'Costo');
					    data.addColumn('boolean', 'Solucionadas');
					    data.addRows([
					    			  ['Motor',  {v: 10000, f: '$10,000'}, true],
							          ['Gasolina',   {v: 8000,  f: '$8,000'},  true],
							          ['Bujia', {v: 12500, f: '$12,500'}, true],
							          ['Carburador',   {v: 7000,  f: '$7,000'},  true],
							          ['Sistema eléctrico',   {v: 3500,  f: '$3,500'},  false],
								    ]);
					}else if(cont == 3) {
						var data = new google.visualization.DataTable();
					    data.addColumn('string', 'Alerta');
					    data.addColumn('number', 'Costo');
					    data.addColumn('boolean', 'Solucionadas');
					    data.addRows([
					    	 ['Motor',  {v: 10000, f: '$10,000'}, true],
					         ['Gasolina',   {v: 8000,  f: '$8,000'},  true],
					         ['Bujia', {v: 12500, f: '$12,500'}, true],
					         ['Carburador',   {v: 7000,  f: '$7,000'},  true],
					         ['Sistema eléctrico',   {v: 3500,  f: '$3,500'},  false],
					         ['Ruedas',   {v: 600,  f: '$600'},  false],
						    ]);
					}else if(cont == 4) {
						var data = new google.visualization.DataTable();
					    data.addColumn('string', 'Alerta');
					    data.addColumn('number', 'Costo');
					    data.addColumn('boolean', 'Solucionadas');
					    data.addRows([
					    	 ['Motor',  {v: 10000, f: '$10,000'}, true],
					         ['Gasolina',   {v: 8000,  f: '$8,000'},  true],
					         ['Bujia', {v: 12500, f: '$12,500'}, true],
					         ['Carburador',   {v: 7000,  f: '$7,000'},  true],
					         ['Sistema eléctrico',   {v: 3500,  f: '$3,500'},  false],
					         ['Ruedas',   {v: 600,  f: '$600'},  false],
					         ['Dirección',   {v: 950,  f: '$950'},  false],
						    ]);
					    setTimeout(function(){
							ok();
						}, 10000);
					}else if(cont == 5) {
						var data = new google.visualization.DataTable();
					    data.addColumn('string', 'Alerta');
					    data.addColumn('number', 'Costo');
					    data.addColumn('boolean', 'Solucionadas');
					    data.addRows([
					    	 ['Motor',  {v: 10000, f: '$10,000'}, true],
					         ['Gasolina',   {v: 8000,  f: '$8,000'},  true],
					         ['Bujia', {v: 12500, f: '$12,500'}, true],
					         ['Carburador',   {v: 7000,  f: '$7,000'},  true],
					         ['Sistema eléctrico',   {v: 3500,  f: '$3,500'},  true],
					         ['Ruedas',   {v: 600,  f: '$600'},  false],
					         ['Dirección',   {v: 950,  f: '$950'},  false],
						    ]);
					}
				}
			    var table = new google.visualization.Table(document.getElementById('chart_div7'));
			    table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
			    if(cont <= 4) {
			    	cerrarAlertas();
			    }
			}else {
				return;
			}
		} catch (err){
			msj('error',err.message);
		}
	});
}

var time = 1
function cerrarAlertas() {
	if(cont <= 5) {
		setTimeout(function(){
			error();
			time = 2;
			cont = cont+1;
		}, 8000);
	}
}

function error(){
    //una notificación de error
	if(cont == 1) {
		alertify.error("Nueva Falla en: El sistema eléctrico");
		return false;
	}else if(cont == 2) {
		alertify.error("Nueva Falla en: las ruedas");
		return false; 
	}else if(cont == 3) {
		alertify.error("Nueva Falla en: La dirección"); 
		return false; 
	}else if(cont == 4) {
		alertify.error("Nueva Falla en: La dirección"); 
		return false; 
	}
}

function ok(){
	alertify.success("Se resolvió la falla del: El sistema eléctrico"); 
	return false;
}

function drawRegionsMap() {
	var data = google.visualization.arrayToDataTable([
        ['City',   'Cant. Fallas', 'costo'],
        ['Lima',       847,    5.672],
        ['Arequipa',   784,     2.923],
        ['Cusco',      348,     3.851],
        ['Trujillo',   682,     2.217],
        ['Piura',      377,     1.892]
      ]);

      var options = {
        region: 'PE',
        displayMode: 'markers',
        colorAxis: {colors: ['#8BC34A', '#FFEB3B']}
      };

  var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

  chart.draw(data, options);
}

function drawChart() {
       var data = google.visualization.arrayToDataTable([
         ['Label', 'Value'],
         ['Plan Mantto', 80],
         ['Inspec. T\u00E9c.', 55],
         ['Limpieza', 68],
	      ['Residuos', 20]
       ]);

       var options = {
         width: 500, height: 200,
         redFrom: 90, redTo: 100,
         yellowFrom:75, yellowTo: 90,
         minorTicks: 5
       };

       var chart = new google.visualization.Gauge(document.getElementById('chart_div1'));

       chart.draw(data, options);

       setInterval(function() {
         data.setValue(0, 1, 40 + Math.round(60 * Math.random()));
         chart.draw(data, options);
       }, 13000);
       setInterval(function() {
         data.setValue(1, 1, 40 + Math.round(60 * Math.random()));
         chart.draw(data, options);
       }, 5000);
       setInterval(function() {
         data.setValue(2, 1, 60 + Math.round(20 * Math.random()));
         chart.draw(data, options);
       }, 26000);
}

var bar = new ProgressBar.Circle('#confiabilidad-container', {
	color: '#aaa',
	strokeWidth: 4,
	trailWidth: 1,
	easing: 'easeInOut',
	duration: 1400,
	text: {
		autoStyleContainer: false
	},
    from: { color: '#aaa', width: 1 },
    to: { color: '#003B63', width: 4 },
    step: function(state, circle) {
	    circle.path.setAttribute('stroke', state.color);
	    circle.path.setAttribute('stroke-width', state.width);
	    var value = Math.round(circle.value() * 100);
	    if (value === 0) {
	      circle.setText('');
	    }else{
	    	circle.setText(value+'%');
	    }
    }
});
bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar.text.style.fontSize = '2rem';
bar.animate(0.7);

var bar = new ProgressBar.Line('#mantenimiento-container', {
	strokeWidth: 4,
	easing: 'easeInOut',
	duration: 1400,
	color: '#003B63',
	trailColor: '#eee',
	trailWidth: 1,
	svgStyle: {width: '100%', height: '100%'},
	text: {
	style: {
		color: '#999',
	    position: 'absolute',
	    right: '0',
	    top: '30px',
	    padding: 0,
	    margin: 0,
	    transform: null
	  },
	  autoStyleContainer: false
	},
	from: {color: '#FFEA82'},
	to: {color: '#003B63'},
	step: (state, bar) => {
		bar.setText(Math.round(bar.value() * 100) + ' %');
	}
});
bar.animate(0.3);

var bar = new ProgressBar.Line('#inspecciones-container', {
	strokeWidth: 4,
	easing: 'easeInOut',
	duration: 1400,
	color: '#003B63',
	trailColor: '#eee',
	trailWidth: 1,
	svgStyle: {width: '100%', height: '100%'},
	text: {
	style: {
		color: '#999',
	    position: 'absolute',
	    right: '0',
	    top: '30px',
	    padding: 0,
	    margin: 0,
	    transform: null
	  },
	  autoStyleContainer: false
	},
	from: {color: '#FFEA82'},
	to: {color: '#003B63'},
	step: (state, bar) => {
		bar.setText(Math.round(bar.value() * 100) + ' %');
	}
});
bar.animate(0.5);

var bar = new ProgressBar.Line('#limpieza-container', {
	strokeWidth: 4,
	easing: 'easeInOut',
	duration: 1400,
	color: '#003B63',
	trailColor: '#eee',
	trailWidth: 1,
	svgStyle: {width: '100%', height: '100%'},
	text: {
	style: {
		color: '#999',
	    position: 'absolute',
	    right: '0',
	    top: '30px',
	    padding: 0,
	    margin: 0,
	    transform: null
	  },
	  autoStyleContainer: false
	},
	from: {color: '#FFEA82'},
	to: {color: '#003B63'},
	step: (state, bar) => {
		bar.setText(Math.round(bar.value() * 100) + ' %');
	}
});
bar.animate(0.4);

var bar = new ProgressBar.Line('#residuos-container', {
	strokeWidth: 4,
	easing: 'easeInOut',
	duration: 1400,
	color: '#003B63',
	trailColor: '#eee',
	trailWidth: 1,
	svgStyle: {width: '100%', height: '100%'},
	text: {
	style: {
		color: '#999',
	    position: 'absolute',
	    right: '0',
	    top: '30px',
	    padding: 0,
	    margin: 0,
	    transform: null
	  },
	  autoStyleContainer: false
	},
	from: {color: '#FFEA82'},
	to: {color: '#003B63'},
	step: (state, bar) => {
		bar.setText(Math.round(bar.value() * 100) + ' %');
	}
});
bar.animate(0.6);

function gotoAlertas() {
	
}