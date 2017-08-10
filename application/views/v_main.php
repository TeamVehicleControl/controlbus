<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Controlbus</title>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta http-equiv="refresh"          content="36000">
        <meta name="viewport"               content="width=device-width, initial-scale=1">
        <meta name="keywords"               content="Moviliario,modell,escritorio,sillas,muebles,carpetas">
        <meta name="robots"                 content="index,follow">
        <meta name="date"                   content="April 05, 2017">
        <meta name="author"                 content="webking.pe">
        <meta name="language"               content="es">
        <meta name="theme-color"            content="#FFFFFF">
        <meta name="description"            content="Simple, r&aacute;pido , econ&oacute;mico model tiene todo">
        
        <link type="image/x-icon"   rel="shortcut icon" href="<?php echo RUTA_IMG?>header/car.ico">
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-3.3.6/css/bootstrap.min.css?v=<?php echo time();?>">
		<link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/css/material.min.css?v=<?php echo time();?>">
		<link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
		<link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>pace/pace_css.css?v=<?php echo time();?>">  
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome-4.7.0/css/font-awesome.min.css?v=<?php echo time();?>">
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.css?v=<?php echo time();?>">
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_CSS?>menu.css?v=<?php echo time();?>">
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_CSS?>main.css?v=<?php echo time();?>">
        <style>
            .chart_new {
                width:100%;
                min-height:400px;
            	margin: auto;
            }
            
            svg:first-child > g > text[text-anchor~=middle]{
                font-size:12px;
            }
            
            #modalNuevosRatxSede .table-responsive{
            	overflow-y: hidden;
            }
    	</style>
    </head>
    <body>
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    		<header class="mdl-layout__header">
    			<div class="mdl-layout__header-row">
    			    <div class="mdl-layout-spacer"></div>
    			</div>
    		</header>
    		<div class="mdl-layout__drawer">
    			<span class="mdl-layout-title"><i class="mdi mdi-menu"></i></span>
    			<nav class="mdl-navigation p-t-0">
    				<a class="mdl-navigation__link" href="upload.html"><div class="arrow-right"></div><i class="mdi mdi-priority_high"></i><p>Alertas</p></a>
    				<a class="mdl-navigation__link active" href=""><div class="arrow-right"></div><i class="mdi mdi-grid_on"></i><p>Plan mantto</p></a>
    				<a class="mdl-navigation__link" href="users.html"><i class="mdi mdi-group_add"></i><p>Proveedores</p></a>
    				<a class="mdl-navigation__link" href=""><i class="mdi mdi-person"></i><p>Clientes</p></a>
    				<a class="mdl-navigation__link" href=""><i class="mdi mdi-event_seat"></i><p>Concesionaria</p></a>
    				<a class="mdl-navigation__link" href=""><i class="mdi mdi-opacity"></i><p>Lubricantes</p></a>
    				<a class="mdl-navigation__link" href=""><i class="mdi mdi-local_hospital"></i><p>Seguro</p></a>
    			</nav>
    		</div>
    		<main class="mdl-layout__content">
    		<div class="col-md-6">
                <div class="col-sm-12" id="graf1">	
				    <div class="mdl-card m-b-5">
				        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text" id="idCantidadEvaluar">Fallas seg&uacute;n el tiempo</h2>
                        </div>
                        <div class="mdl-card__supporting-text br-b">
                            <small class="m-t-100" style="font-size: 15px; display:block;" id="subtituloEvaluacion"><!-- Evaluados a partir del 30-10-2016. --></small>
                            <div id="chart_div" class="chart_new" style="display:block"></div>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
                <div class="col-sm-12" id="graf2">	
				    <div class="mdl-card m-b-5">
				        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text" id="idCantidadEvaluar1">Alertas</h2>
                        </div>
                        <div class="mdl-card__supporting-text br-b">
                            <small class="m-t-100" style="font-size: 15px; display:block;" id="subtituloEvaluacion1"><!-- Evaluados a partir del 30-10-2016. --></small>
                            <div id="chart_div1" class="chart_new" style="display:block"></div>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
                <div class="col-sm-12" id="graf2">	
				    <div class="mdl-card m-b-5">
				        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text" id="idCantidadEvaluar2">Fallas por zona</h2>
                        </div>
                        <div class="mdl-card__supporting-text br-b">
                            <small class="m-t-100" style="font-size: 15px; display:block;" id="subtituloEvaluacion2"><!-- Evaluados a partir del 30-10-2016. --></small>
                            <div id="regions_div" class="chart_new" style="display:block"></div>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
                <div class="col-sm-12" id="graf5">	
				    <div class="mdl-card m-b-5">
				        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text" id="idCantidadEvaluar5">Calidad por a&ntilde;o</h2>
                        </div>
                        <div class="mdl-card__supporting-text br-b">
                            <small class="m-t-100" style="font-size: 15px; display:block;" id="subtituloEvaluacion5"><!-- Evaluados a partir del 30-10-2016. --></small>
                            <div id="chart_div5" class="chart_new" style="display:block"></div>
                        </div>
					</div>
				</div>
			</div>
    		</main>
		</div>
		
        
        <script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_JS?>jquery-3.1.0.min.js?v=<?php echo time();?>"></script>
        <script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_JS?>jquery-1.12.1.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>bootstrap-3.3.6/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>mdl/js/material.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>toaster/toastr.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" async src="<?php echo RUTA_JS?>jslogin.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_PLUGINS?>pace/pace.min.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_PLUGINS?>google_chart/loader.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>   
    	
    	<script type="text/javascript">
        	$(document).ready(function() {
            google.charts.load('current', {'packages':['corechart', 'line', 'bar', 'gauge', 'geochart']});
            google.charts.setOnLoadCallback(drawChart);
            google.charts.setOnLoadCallback(drawTrendlines);
            google.charts.setOnLoadCallback(drawRegionsMap);
            google.charts.setOnLoadCallback(drawChartZone);


            function drawRegionsMap() {
              var data = google.visualization.arrayToDataTable([
                ['Country', 'Popularity'],
                ['Germany', 200],
                ['United States', 300],
                ['Brazil', 400],
                ['Canada', 500],
                ['France', 600],
                ['RU', 700]
              ]);

              var options = {};

              var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

              chart.draw(data, options);
            }
            
            function drawChart() {
           	        var data = google.visualization.arrayToDataTable([
           	          ['Label', 'Value'],
           	          ['Memory', 80],
           	          ['CPU', 55],
           	          ['Network', 68]
           	        ]);

           	        var options = {
           	          width: 400, height: 120,
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



            function drawTrendlines() {
                var data = new google.visualization.DataTable();
                data.addColumn('number', 'X');
                data.addColumn('number', 'Dogs');
                data.addColumn('number', 'Cats');

                data.addRows([
                  [0, 0, 0],    [1, 10, 5],   [2, 23, 15],  [3, 17, 9],   [4, 18, 10],  [5, 9, 5],
                  [6, 11, 3],   [7, 27, 19],  [8, 33, 25],  [9, 40, 32],  [10, 32, 24], [11, 35, 27],
                  [12, 30, 22], [13, 40, 32], [14, 42, 34], [15, 47, 39], [16, 44, 36], [17, 48, 40],
                  [18, 52, 44], [19, 54, 46], [20, 42, 34], [21, 55, 47], [22, 56, 48], [23, 57, 49],
                  [24, 60, 52], [25, 50, 42], [26, 52, 44], [27, 51, 43], [28, 49, 41], [29, 53, 45],
                  [30, 55, 47], [31, 60, 52], [32, 61, 53], [33, 59, 51], [34, 62, 54], [35, 65, 57],
                  [36, 62, 54], [37, 58, 50], [38, 55, 47], [39, 61, 53], [40, 64, 56], [41, 65, 57],
                  [42, 63, 55], [43, 66, 58], [44, 67, 59], [45, 69, 61], [46, 69, 61], [47, 70, 62],
                  [48, 72, 64], [49, 68, 60], [50, 66, 58], [51, 65, 57], [52, 67, 59], [53, 70, 62],
                  [54, 71, 63], [55, 72, 64], [56, 73, 65], [57, 75, 67], [58, 70, 62], [59, 68, 60],
                  [60, 64, 56], [61, 60, 52], [62, 65, 57], [63, 67, 59], [64, 68, 60], [65, 69, 61],
                  [66, 70, 62], [67, 72, 64], [68, 75, 67], [69, 80, 72]
                ]);

                var options = {
                  hAxis: {
                    title: 'Tiempo(dias)'
                  },
                  vAxis: {
                    title: 'Fallas'
                  },
                  colors: ['#AB0D06', '#007329'],
                  trendlines: {
                    0: {type: 'exponential', color: '#333', opacity: 1},
                    1: {type: 'linear', color: '#111', opacity: .3}
                  }
                };

                var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
                chart.draw(data, options);
              }

            function drawChartZone() {
                var data = google.visualization.arrayToDataTable([
                  ['Year', 'Sales', 'Expenses'],
                  ['2013',  1000,      400],
                  ['2014',  1170,      460],
                  ['2015',  660,       1120],
                  ['2016',  1030,      540]
                ]);

                var options = {
                  title: 'Calidad',
                  hAxis: {title: 'Anio',  titleTextStyle: {color: '#333'}},
                  vAxis: {minValue: 0}
                };

                var chart = new google.visualization.AreaChart(document.getElementById('chart_div5'));
                chart.draw(data, options);
              }
            });
    	   var video = document.getElementById('video');
            video.addEventListener('click',function(){
              video.play();
            },false);
            

        	//init();
    	</script>
    	
    </body>
</html>
