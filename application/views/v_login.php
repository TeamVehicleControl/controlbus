<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Plataforma virtual de mantto</title>
        <meta charset="utf-8">
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
        
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-3.3.6/css/bootstrap.min.css?v=<?php echo time();?>">
		<link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/css/material.min.css?v=<?php echo time();?>">
		<link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
		<link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>pace/pace_css.css?v=<?php echo time();?>">  
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome-4.7.0/css/font-awesome.min.css?v=<?php echo time();?>">
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.css?v=<?php echo time();?>">
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_CSS?>login.css?v=<?php echo time();?>">
        <link type="text/css"       rel="stylesheet"    href="<?php echo RUTA_CSS?>menu.css?v=<?php echo time();?>">
    </head>
    <body>
        <section>
            <div id="opacity"></div>
            <div id="main" class="mdl-card">
                <div class="col-sm-12 text-center">
                    <h1>CONTROL BUS</h1>
                </div>
                <div class="col-sm-12" id="loginForm">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="cont_usuario">
                        <input class="mdl-textfield__input" type="text" id="usuario">
                        <label class="mdl-textfield__label" for="Username" autofocus="autofocus">Usuario</label>
                        <span class="mdl-textfield__error">Tu usuario y/o contrase&ntilde;a son incorrectas.</span>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div id="clave-show" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" " id="cont_clave">
                        <input class="mdl-textfield__input" type="password" id="password">
                        <label class="mdl-textfield__label" for="password">Contrase&ntilde;a</label>
                        <a id="showpas"  class="mdl-button mdl-js-button mdl-js-button-ripple-effect see-pass toogle-password"><i  class="mdi mdi-visibility_off text-rigth "></i></a>
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                        <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
                        <span class="mdl-checkbox__label">Recordarme</span>
                    </label>
                </div>
                <div class="col-sm-12">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="logear()" id="btnLoginAdminPass">INGRESAR</button>
                </div>
            </div>
        </section>
        
        <script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_JS?>jquery-3.1.0.min.js?v=<?php echo time();?>"></script>
        <script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_JS?>jquery-1.12.1.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>bootstrap-3.3.6/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>mdl/js/material.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" src="<?php echo RUTA_PLUGINS?>toaster/toastr.min.js?v=<?php echo time();?>"></script>
    	<script charset="UTF-8" type="text/javascript" async src="<?php echo RUTA_JS?>jslogin.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_PLUGINS?>pace/pace.min.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>   
    	
    </body>
</html>
