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
        				    	<p class="inline">Julio Sulca</p> 
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
                    <a class="mdl-navigation__link active" href=""><i class="mdi mdi-home"></i><p>Inicio</p></a>
    				<a class="mdl-navigation__link"><div class="arrow-right"></div><i class="mdi mdi-priority_high" onclick="abirModalAlertas()"></i><p>Alertas</p></a>
    				<a class="mdl-navigation__link" href=""><div class="arrow-right"></div><i class="mdi mdi-grid_on"></i><p>Plan mantto</p></a>
    				<a class="mdl-navigation__link" href="users.html"><i class="mdi mdi-group_add"></i><p>Proveedores</p></a>
    				<a class="mdl-navigation__link" href=""><i class="mdi mdi-person"></i><p>Clientes</p></a>
    				<a class="mdl-navigation__link" href=""><i class="mdi mdi-event_seat"></i><p>Concesionaria</p></a>
    				<a class="mdl-navigation__link" href=""><i class="mdi mdi-opacity"></i><p>Lubricantes</p></a>
    				<a class="mdl-navigation__link" href=""><i class="mdi mdi-local_hospital"></i><p>Seguro</p></a>
    			</nav>
    		</div>
    		<main class="mdl-layout__content">
                <section>
                    <div class="mdl-content-cards">
                        <div class="mdl-card">
    				        <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text" id="idCantidadEvaluar1">Detalle de Alertas de falla</h2>
                            </div>
                            <div class="mdl-card__supporting-text br-b">
                                <small class="m-t-100" style="font-size: 15px; display:block;" id="subtituloEvaluacion1">
                                <div id="chart_div7" class="chart_new" style="display:block"></div>
                            </div>
                            <div class="mdl-card__menu">
                                <button class="mdl-button mdl-js-button mdl-button--icon">
                                    <i class="mdi mdi-refresh"></i>
                                </button>
                                <button class="mdl-button mdl-js-button mdl-button--icon">
                                    <i class="mdi mdi-file_download"></i>
                                </button>
                            </div>
    					</div>
                    </div>
                </section>
    		</main>
		</div>
		
        
        <script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_JS?>jquery-3.1.0.min.js?v=<?php echo time();?>"></script>
        <script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_JS?>jquery-1.12.1.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>bootstrap-3.3.6/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>mdl/js/material.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>alertify/js/alertify.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>progressbarjs/progressbar.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>toaster/toastr.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" async src="<?php echo RUTA_JS?>jsalertas.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_PLUGINS?>pace/pace.min.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_PLUGINS?>google_chart/loader.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>   
    	
    	<script type="text/javascript">

    		google.charts.load('current', {'packages':['corechart', 'line', 'bar', 'gauge', 'geochart', 'table'],
			   				   'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'});

    		
    		$(document).ready(function() {
    			google.charts.setOnLoadCallback(drawTable1);
    			function drawTable1() {
    					var data = new google.visualization.DataTable();
        			    data.addColumn('string', 'Alerta');
        			    data.addColumn('string', 'Unidad');
        			    data.addColumn('string', 'Distrito');
        			    data.addColumn('string', 'Detalle');
        			    data.addColumn('number', 'Costo');
        			    data.addColumn('boolean', 'Solucionadas');
        			    data.addRows([
        			      ['Motor', 'AMK-253', 'Comas', 'Se recalento el motor y empezo a fallar', {v: 10000, f: '$10,000'} , false],
        			      ['Gasolina', 'AFK-25A' , 'San miguel', 'No mide bien la gasolina', {v: 10000, f: '$10,000'} , false],
        			      ['Bujia', 'BWG-A31', 'San miguel', 'Se quemo y malogro el sistema electrico', {v: 10000, f: '$10,000'} ,false],
        			      ['Carburador', 'OGM-302','Comas', 'Recalienta mucho', {v: 10000, f: '$10,000'} ,false],
        			      ['Sistema electrico','AFK-25A', 'Lima','Se quemo un clable se apago el carro', {v: 10000, f: '$10,000'} ,false],
        			    ]);

        		    var table = new google.visualization.Table(document.getElementById('chart_div7'));

        		    table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
        		  }
            });

        	//init();
    	</script>
    	
    </body>
</html>
