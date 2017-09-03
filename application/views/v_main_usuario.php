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
        				<a id="alertas" class="mdl-navigation__link"><div class="arrow-right"></div><i class="mdi mdi-priority_high" data-badge="1+" onclick="abirModalAlertas()"></i><p>Alertas</p></a>
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
                <div class="cont-welcome-bg"></div>
                <section>
                    <div class="mdl-content-cards cont-welcome">
                        <div class="photo-wel">
                            <img src="<?php echo RUTA_IMG?>profile/nouser.svg">
                        </div>
                        <div class="cont-wel-user">
                            <H4>Hola, <?php echo $nombre_completo?></H4>
                            <p>Bienvenido al sistema de control de mantenimiento 'VehikMant'.</p>
                            <p>Aqu&iacute; podr&aacute;s administrar el mantenimiento de tu veh&iacute;culo, planificar tu mantenimiento, consultar por los seguros y encontrar tus mejores proveedores de lubricantes y repuestos.</p>
                            <a  class="m-r-10" href="#" style="color: #fff">VER M&Aacute;S</a>
                            <a href="#" style="color: #fff">PUNTUAR</a>
                        </div>        
                        <div class="col-md-12 cont-module">
                            <H4>Desde 'VehikMant' puedes:</H4>                             
                            <ul class="p-0 text-left">
                                <li><i class="mdi mdi-done m-r-10"></i>Administrar tu <a>Mantenimiento.</a></li>
                                <li><i class="mdi mdi-done m-r-10"></i><a>Planificar</a> el mantenimiento de tu veh&iacute;culo.</li>
                                <li><i class="mdi mdi-done m-r-10"></i>Ver tus proveedores de <a>aceites y repuestos.</a></li>
                                <li><i class="mdi mdi-done m-r-10"></i>Consultar por seguros.</a></li>
                            </ul>
                            <div class="cont-img-model"><img src="<?php echo RUTA_IMG?>iconsSistem/icon_matricula.png"></div>
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
        
        <script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_JS?>jquery-3.1.0.min.js?v=<?php echo time();?>"></script>
        <script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_JS?>jquery-1.12.1.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>bootstrap-3.3.6/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>mdl/js/material.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>alertify/js/alertify.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>progressbarjs/progressbar.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>toaster/toastr.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" async src="<?php echo RUTA_JS?>jsubicacion.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_PLUGINS?>pace/pace.min.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_PLUGINS?>google_chart/loader.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>   
    	
    	<script type="text/javascript">
    	</script>
    	
    </body>
</html>
