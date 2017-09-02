<!DOCTYPE html>
<html lang="en">
    <head>
        <title>VehikMant</title>
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
		<link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>alertify/css/alertify.min.css?v=<?php echo time();?>"> 
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
                min-height:280px;
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
                <div class="logo-sistema">
                    <img class="inline" src="<?php echo RUTA_IMG?>header/logo_vehikmant.jpg" alt="vehikmant">
                </div>
    			<div class="mdl-layout__header-row">
    			    <div class="mdl-layout-spacer"></div>
    			    <nav class="mdl-navigation">
                        <a class="mdl-button mdl-js-button mdl-button--icon" href=""><i class="mdi mdi-notifications"></i></a>
                        <div class="btn-group">
        					<button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect login dropdown-toggle" data-toggle="dropdown" 	aria-haspopup="true" aria-expanded="false">
        						<img class="inline" src="<?php echo RUTA_IMG?>header/nouser.jpg" alt="vehikmant">
        				    	<p class="inline"><?php echo $nombre_completo?></p> 
        				    	<i class="mdi mdi-arrow_drop_down inline"></i>
        					</button>
        					<ul class="dropdown-menu">
        						<li><a href="#">Perfil</a></li>
        						<li><a onclick="logout()">cerrar</a></li>
        					</ul>
        				</div>
                    </nav>
    			</div>
    		</header>
    		<div class="mdl-layout__drawer">
    			<span class="mdl-layout-title"><i class="mdi mdi-menu"></i></span>
    			<nav class="mdl-navigation p-t-0">
    				<?php if($rol == 'Concesionaria'){?>
        				<a class="mdl-navigation__link active" href="http://localhost:8080/controlbus/C_main"><i class="mdi mdi-home"></i><p>Inicio</p></a>
        				<a id="alertas" class="mdl-navigation__link"><div class="arrow-right"></div><i class="mdi mdi-priority_high" data-badge="1" onclick="abirModalAlertas()"></i><p>Alertas</p></a>
        				<a class="mdl-navigation__link" href=""><i class="mdi mdi-grid_on"></i><p>Plan mantto</p></a>
        				<a class="mdl-navigation__link" href="users.html"><i class="mdi mdi-group_add"></i><p>Proveedores</p></a>
        				<a class="mdl-navigation__link" href=""><i class="mdi mdi-person"></i><p>Clientes</p></a>
        				<a class="mdl-navigation__link" href=""><i class="mdi mdi-event_seat"></i><p>Concesionaria</p></a>
        				<a class="mdl-navigation__link" href=""><i class="mdi mdi-opacity"></i><p>Lubricantes</p></a>
        				<a class="mdl-navigation__link" href=""><i class="mdi mdi-local_hospital"></i><p>Seguro</p></a>
    				<?php }else if($rol == 'Anexo'){?>
    					<a class="mdl-navigation__link active" href=""><i class="mdi mdi-home"></i><p>Inicio</p></a>
        				<a class="mdl-navigation__link" href="users.html"><i class="mdi mdi-group_add"></i><p>Proveedores</p></a>
        				<a class="mdl-navigation__link" href=""><i class="mdi mdi-person"></i><p>Clientes</p></a>
        				<a class="mdl-navigation__link" href=""><i class="mdi mdi-event_seat"></i><p>Concesionaria</p></a>
        				<a class="mdl-navigation__link" href=""><i class="mdi mdi-opacity"></i><p>Lubricantes</p></a>
        				<a class="mdl-navigation__link" href=""><i class="mdi mdi-local_hospital"></i><p>Seguro</p></a>
        			<?php }else if($rol == 'Usuario'){?>
        				<a class="mdl-navigation__link active" href=""><i class="mdi mdi-home"></i><p>Inicio</p></a>
        				<a class="mdl-navigation__link" href="users.html"><i class="mdi mdi-group_add"></i><p>Proveedores</p></a>
        				<a class="mdl-navigation__link" href=""><i class="mdi mdi-opacity"></i><p>Lubricantes</p></a>
        				<a class="mdl-navigation__link" href=""><i class="mdi mdi-local_hospital"></i><p>Seguro</p></a>
    				<?php }?>
    			</nav>
    		</div>
    		<main class="mdl-layout__content">
                <section>
                    <div class="mdl-content-cards ">
                        <div class="mdl-card mdl-card-nivel-general">
                            <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text">Nivel de Confiabilidad</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <div id="confiabilidad-container"></div>
                            </div>
                        </div>
                        <div class="mdl-card mdl-card-niveles">
                            <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text">Plan de Mantenimiento</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <div id="mantenimiento-container"></div>
                            </div>
                        </div>
                        <div class="mdl-card mdl-card-niveles">
                            <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text">Inspecciones T&eacute;cnicas</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <div id="inspecciones-container"></div>
                            </div>
                        </div>
                        <div class="mdl-card mdl-card-niveles">
                            <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text">Limpieza Flota</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <div id="limpieza-container"></div>
                            </div>
                        </div>
                        <div class="mdl-card mdl-card-niveles">
                            <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text">Control de Residuos</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <div id="residuos-container"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-content-cards ">
                        <div class="mdl-card mdl-card-graphics">
    				        <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text" id="idCantidadEvaluar">Fallas seg&uacute;n el tiempo</h2>
                            </div>
                            <div class="mdl-card__supporting-text br-b">
                                <small class="m-t-100" style="font-size: 15px; display:block;" id="subtituloEvaluacion"><!-- Evaluados a partir del 30-10-2016. --></small>
                                <div id="chart_div" class="chart_new" style="display:block"></div>
                            </div>
                            <div class="mdl-card__menu">
                                <button class="mdl-button mdl-js-button mdl-button--icon">
                                    <i class="mdi mdi-file_download"></i>
                                </button>
                            </div>
    					</div>
    					<div class="mdl-card mdl-card-graphics">
    				        <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text" id="idCantidadEvaluar1">Alertas</h2>
                            </div>
                            <div class="mdl-card__supporting-text br-b">
                                <small class="m-t-100" style="font-size: 15px; display:block;" id="subtituloEvaluacion1"><!-- Evaluados a partir del 30-10-2016. --></small>
                                <div id="chart_div1" class="chart_new" style="display:block"></div>
                            </div>
                            <div class="mdl-card__menu">
                                <button class="mdl-button mdl-js-button mdl-button--icon">
                                    <i class="mdi mdi-file_download"></i>
                                </button>
                            </div>
    					</div>
    					<div class="mdl-card mdl-card-graphics">
    				        <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text" id="idCantidadEvaluar2">Fallas por zona</h2>
                            </div>
                            <div class="mdl-card__supporting-text br-b">
                                <small class="m-t-100" style="font-size: 15px; display:block;" id="subtituloEvaluacion2"><!-- Evaluados a partir del 30-10-2016. --></small>
                                <div id="regions_div" class="chart_new" style="display:block"></div>
                            </div>
                            <div class="mdl-card__menu">
                                <button class="mdl-button mdl-js-button mdl-button--icon" id="aDownload2" download="filename.jpg">
                                    <i class="mdi mdi-file_download"></i>
                                </button>
                            </div>
    					</div>
    					<div class="mdl-card mdl-card-graphics">
    				        <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text" id="idCantidadEvaluar5">Calidad por a&ntilde;o</h2>
                            </div>
                            <div class="mdl-card__supporting-text br-b">
                                <small class="m-t-100" style="font-size: 15px; display:block;" id="subtituloEvaluacion5"><!-- Evaluados a partir del 30-10-2016. --></small>
                                <div id="chart_div5" class="chart_new" style="display:block"></div>
                            </div>
                            <div class="mdl-card__menu">
                                <button class="mdl-button mdl-js-button mdl-button--icon" id="aDownload1" download="filename.jpg" >
                                    <i class="mdi mdi-file_download"></i>
                                </button>
                            </div>
    					</div>
                    </div>
                </section>
    		</main>
		</div>
		
		<div class="modal fade" id="modalAlertas" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">                
                    <div class="mdl-card">
					    <div class="mdl-card__title">Alerta de fallas</div>
    					<div class="mdl-card__supporting-text">
                            <div id="chart_div7" class="chart_new" style="display:block"></div>
    					</div>
    					<div class="mdl-card__actions p-t-20">
                            <button class="mdl-button mdl-js-button mdl-js-ripple-effect" data-dismiss="modal" onclick="cerrarAlertas()">Cerrar</button>
                            <button class="mdl-button mdl-js-button mdl-js-ripple-effect" data-dismiss="modal" onclick="gotoAlertas()">ir</button>
                        </div>
                        <div class="mdl-card__menu">
                            <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" onclick="refreshTable();" data-refresh="true">
                                <i class="mdi mdi-refresh"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>     
        </div>
        
        <div class="modal fade" id="modalDetalleAlertas" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">                
                    <div class="mdl-card">
					    <div class="mdl-card__title">Detalle de fallas</div>
    					<div class="mdl-card__supporting-text">
                            <div id="chart_divDeta" class="chart_new" style="display:block"></div>
    					</div>
    					<div class="mdl-card__actions p-t-20">
                            <button class="mdl-button mdl-js-button mdl-js-ripple-effect" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>     
        </div>
        
        <div class="modal fade" id="modalDetalleMapa" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">                
                    <div class="mdl-card">
					    <div class="mdl-card__title">Detalle de fallas por zona</div>
    					<div class="mdl-card__supporting-text">
                            <div id="chart_divDetaMap" class="chart_new" style="display:block"></div>
    					</div>
    					<div class="mdl-card__actions">
                            <button class="mdl-button mdl-js-button mdl-js-ripple-effect" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>     
        </div>
		
        
        <script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_JS?>jquery-3.1.0.min.js?v=<?php echo time();?>"></script>
        <script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_JS?>jquery-1.12.1.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>bootstrap-3.3.6/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>mdl/js/material.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>alertify/js/alertify.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>progressbarjs/progressbar.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>toaster/toastr.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" async src="<?php echo RUTA_JS?>jsmain.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_PLUGINS?>pace/pace.min.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_PLUGINS?>google_chart/loader.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>   
    	
    	<script type="text/javascript">

    		google.charts.load('current', {'packages':['corechart', 'line', 'bar', 'gauge', 'geochart', 'table'],
			   				   'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'});
		
			$(document).ready(function() {
            google.charts.setOnLoadCallback(drawChart);
            google.charts.setOnLoadCallback(drawTrendlines);
            google.charts.setOnLoadCallback(drawRegionsMap);
            google.charts.setOnLoadCallback(drawChartZone);


            function drawTrendlines() {
                var data = new google.visualization.DataTable();
                data.addColumn('number', 'X');
                data.addColumn('number', 'Motor');
                data.addColumn('number', 'El\u00E9ctricas');

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
                    title: 'Tiempo(d\u00EDas)'
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
                google.visualization.events.addListener(chart, 'select', selectHandler);
                chart.draw(data, options);

                function selectHandler() {
            		var selectedItem = chart.getSelection()[0];
            	    if (selectedItem) {
                	    abrirModalDetalle();
            	    }
            	}
              }

            function abrirModalDetalle() {
        			var data = new google.visualization.DataTable();
        		    data.addColumn('string', 'Alerta');
        		    data.addColumn('string', 'Detalle');
        		    data.addRows([
        		      ['Motor',  'Se recalento el motor y empezo a fallar'],
        		      ['Gasolina',   'No mide bien la gasolina'],
        		      ['Bujia', 'Se quemo y malogro el sistema electrico'],
        		      ['Carburador',   'Recalienta mucho'],
        		      ['Sistema electrico',   'Se quemo un clable se apago el carro'],
        		    ]);
        	    var table = new google.visualization.Table(document.getElementById('chart_divDeta'));

        	    table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
                modal('modalDetalleAlertas');
            }

            function drawChartZone() {
                var data = google.visualization.arrayToDataTable([
                  ['Year', 'Repuestos', 'Mantenimiento'],
                  ['2013',  1000      ,  400],
                  ['2014',  1170      ,  460],
                  ['2015',  660       ,  1120],
                  ['2016',  1030      ,  540]
                ]);

                var options = {
                  title: 'Calidad',
                  hAxis: {title: 'A\u00F1o',  titleTextStyle: {color: '#333'}},
                  vAxis: {minValue: 0}
                };

                var chart = new google.visualization.AreaChart(document.getElementById('chart_div5'));
                google.visualization.events.addListener(chart, 'ready', function () {
                    $('#aDownload1').attr("href", chart.getImageURI());
                });
                            
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
              google.visualization.events.addListener(chart, 'select', selectHandler);
              google.visualization.events.addListener(chart, 'ready', function () {
                  $('#aDownload2').attr("href", chart.getImageURI());
              });
              chart.draw(data, options);

              function selectHandler() {
            		var selectedItem = chart.getSelection()[0];
            	    if (selectedItem) {
                	    abrirModalDetalleMapa();
            	    }
            	}
            }

            function abrirModalDetalleMapa() {
            	var data = new google.visualization.DataTable();
    		    data.addColumn('string', 'Alerta');
    		    data.addColumn('string', 'Detalle');
    		    data.addColumn('number', 'Costo');
    		    data.addRows([
    		      ['Motor',  'Se recalento el motor y empezo a fallar', {v: 350, f: '$350'}],
    		      ['Gasolina',   'No mide bien la gasolina', {v: 20, f: '$20'}],
    		      ['Bujia', 'Se quemo y malogro el sistema electrico', {v: 200, f: '$200'}],
    		      ['Carburador',   'Recalienta mucho', {v: 80, f: '$80'}],
    		      ['Sistema electrico',   'Se quemo un clable se apago el carro', {v: 20, f: '$20'}],
    		    ]);
    	    var table = new google.visualization.Table(document.getElementById('chart_divDetaMap'));

    	    table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
            modal('modalDetalleMapa');
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
