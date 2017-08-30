<!DOCTYPE html>
<html lang="en">
    <head>
        <title>VehicMant</title>
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
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_CSS?>login.css?v=<?php echo time();?>">
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_CSS?>principal.css?v=<?php echo time();?>">
    </head>
    <body>
        <?php $cookie_name = 'intro';
        if(!isset($_COOKIE[$cookie_name])) { ?>
        <div id="load_screen">
    		<div id="loading"></div>
    	</div>
    	<?php } ?>
        <section>
            <div class="header-main"></div>
            <div id="main">
                <div class="mdl-card mdl-card-type" onclick="redirectConcesionaria(1);">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text"><i class="mdi mdi-group"></i>Concesionaria</h2>
                    </div>
                </div>
                <div class="mdl-card mdl-card-type" onclick="redirectUsuario(2);">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text"><i class="mdi mdi-person"></i>Usuario</h2>
                    </div>
                </div>
                <div class="mdl-card mdl-card-type" onclick="redirectAnexo(3);">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text"><i class="mdi mdi-account_box"></i>Anexo</h2>
                    </div>
                </div>
            </div>
        </section>
        
        <script>
		<?php $cookie_value = true;
	     if(!isset($_COOKIE[$cookie_name])) {
	         setcookie($cookie_name, $cookie_value, -1, '/'); ?>
	         window.addEventListener("load", function() {
	            	var load_screen = document.getElementById("load_screen");
	            	//$("#load_screen").addClass('position-center');
	                setTimeout(function() {
	                document.body.removeChild(load_screen);}, 1500);
	            });
	     <?php } ?>
                              
		</script>
        <script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_JS?>jquery-3.1.0.min.js?v=<?php echo time();?>"></script>
        <script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_JS?>jquery-1.12.1.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>bootstrap-3.3.6/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>mdl/js/material.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>toaster/toastr.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" async src="<?php echo RUTA_JS?>jslogin.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_PLUGINS?>pace/pace.min.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>   
    	
    	<script type="text/javascript">
    	   var video = document.getElementById('video');
            video.addEventListener('click',function(){
              video.play();
            },false);
    	</script>
    	
    </body>
</html>

