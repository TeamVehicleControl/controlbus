<?php $this->load->helper('url'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo NAME_SMILEDU;?></title>
        <meta charset="ISO-8859-1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="keywords" content="your,keywords">
        <meta name="description" content="Short explanation about this website">
        <meta name="mobile-web-app-capable" content="yes">
		<meta name="theme-color" content="<?php echo COLOR_BARRA_ANDROID_SIST_AVA?>">
        <link rel="shortcut icon" type="image/png" href="<?php echo FAVICON_SIST_AV;?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo RUTA_PLUGINS?>node_modules/angular-material/angular-material.min.css?v=<?php echo time();?>">
        <link type="text/css" rel="stylesheet" href="<?php echo RUTA_PLUGINS?>bootstrap-3.3.6-dist/css/bootstrap.min.css?v=<?php echo time();?>" />
		<link type="text/css" rel="stylesheet" href="<?php echo RUTA_PLUGINS;?>b_select/css/bootstrap-select.min.css?v=<?php echo time();?>">
        <link type="text/css" rel="stylesheet" href="<?php echo RUTA_PLUGINS?>mdl/css/material.indigo.min.css?v=<?php echo time();?>">
        <link type="text/css" rel="stylesheet" href="<?php echo RUTA_PLUGINS?>mdl/css/material.min.css?v=<?php echo time();?>">
        <link type="text/css" rel="stylesheet" href="<?php echo RUTA_FONTS?>roboto_new.css?v=<?php echo time();?>">       
        <link type="text/css" rel="stylesheet" href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link type="text/css" rel="stylesheet" href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
        <link type="text/css" rel="stylesheet" href="<?php echo RUTA_PLUGINS;?>toaster/toastr.css?v=<?php echo time();?>">
        <link type="text/css" rel="stylesheet" href="<?php echo RUTA_CSS?>m-p.css?v=<?php echo time();?>">
        <link type="text/css" rel="stylesheet" href="<?php echo RUTA_CSS?>login.css?v=<?php echo time();?>">      
        <style type="text/css">
            .mdl-textfield__label:after,
            .is-focused .mdl-textfield__label:after,
            .mdl-card_actions .mdl-button,
            .mdl-card_actions .mdl-button--raised:focus:not(:active),
            .header-schoowl{
            	background-color: <?php echo $schoolColor;?>;	
            }
            .mdl-textfield--floating-label.is-dirty .mdl-textfield__label{
                color: <?php echo $schoolColor;?>;
            }
        </style>
    </head>
    <body>
        <?php $cookie_name = 'intro';
        if(!isset($_COOKIE[$cookie_name])) { ?>
        <div id="load_screen">
    		<div id="loading"></div>
    	</div>
    	<?php } ?>
    	<div class="header-schoowl"></div>
    	<div class="container p-0">
    		<div class="card"></div>
    		<div class="card card-hover">
                <div class="col-sm-12 col-xs-12">
                    <div class="col-sm-10 col-xs-10 p-0">
            			<h1 class="title">
            				<a href="http://grupoavantgard.pe/" target="_blank"><img alt="Logo" class="logo" src="<?php echo $logo;?>"></a>
            			</h1>
                    </div>
                    <div class="col-sm-2 col-xs-2 menu-usuario p-0 text-right">
                        <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon">
                          <i class="mdi mdi-more_vert"></i>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
                          <li data-toggle="modal" data-target="#myModal" class="mdl-menu__item">&#191;Olvidaste tu contrase&ntilde;a?</li>
                          <li class="mdl-menu__item" disabled>&#191;Olvidaste tu usuario?</li>
                        </ul>
                    </div>
                </div>
    			<?php if(isset($_COOKIE['error_google'])) {
    			          unset($_COOKIE['error_google']);
                          setcookie('error_google', null, -1, '/');?>
                        <div class="alert alert-danger alert-dismissible m-20 m-b-0 m-t-0" role="alert" id="cont_error_google">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Espera!</strong> Tu cuenta de Google no est&aacute; vinculada con una cuenta de Avantgard. Intente ingresar con su usuario y contrase&ntilde;a.
                        </div>
    			<?php } ?>
    			
    			<div class="alert alert-danger alert-dismissible m-r-20 m-l-20" role="alert" id="cont_error" style="display:none">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <p id="msj_error"><strong>Espera!</strong> Tu correo de Google no lo tenemos, intenta con tu usuario de Smiledu.</p>
                </div>
    			<form id="loginForm" class="m-r-30 m-l-30 ">    			     
    				<div class="input-container" id="user">
    				    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="cont_usuario">
                            <input class="mdl-textfield__input" type="text" id="usuario" autofocus="autofocus" value="<?php echo isset($usuarioLogin) ? $usuarioLogin : null;?>" onkeyup="changeLoginAdmin()"/>
                            <label class="mdl-textfield__label" for="Username">Usuario o correo</label>
                            <span class="mdl-textfield__error">Tu usuario y/o contrase&ntilde;a son incorrectas.</span>
                        </div>
    				</div>
    				<div class="input-container" id="passw">
    				    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label " id="cont_clave" >
                            <input class="mdl-textfield__input" type="password" id="password"  value="<?php echo isset($passwordLogin) ? $passwordLogin : null;?>" onkeyup="changeLoginAdmin()"/>                            	                                                      
                            <label class="mdl-textfield__label" for="Password">Contrase&ntilde;a  </label>
                            <span class="mdl-textfield__error">Tu usuario y/o contrase&ntilde;a son incorrectas.</span>
                            <a id="showpas"  class="mdl-button mdl-js-button mdl-js-button-ripple-effect see-pass toogle-password"><i  class="mdi mdi-visibility_off text-rigth "></i></a>
                        </div>                        
    				</div>
    				<div class="mdl-card_actions" >
        				<button onclick="logear()" name="ingresar" value="Ingresar" disabled id="btnLoginAdminPass"
        					class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised button-login" type="button">Ingresar
        				</button>
        			</div>
        			<div class="p-0">
            			<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="check" style="width: auto;">
                            <input type="checkbox" id="check" class="mdl-checkbox__input" <?php echo isset($checkLogin) ? $checkLogin : null;?>>
                            <span class="mdl-checkbox__label" id="spanRecordarme">Recordarme</span>
                        </label>
                    </div>
    			</form>
    			<span class="conectar">O conectar con</span>
    			<div class="mdl-card__actions redes">        			                     
                    <?php echo isset($html_google) ? $html_google : null;?>                      
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect br facebook m-l-5"><i class="fa fa-facebook m-r-20 "></i>Facebook</button>
                </div>
    		</div>
    		<!-- div class="card alt">
    			<div class="toggle"></div>
    			<h1 class="title">
    				Recuperar<br>contrase&ntilde;a
    				<div class="close"></div>
    			</h1>
    			<div class="alert alert-danger alert-dismissible m-20 m-b-0 m-t-0" role="alert" id="cont_error_google" style="position: relative; display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Espera!</strong> Error clave! 
                </div>
				<div class="input-container p-l-15 p-r-15">
				    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="correo" id="correo" autofocus="autofocus"/>
                        <label class="mdl-textfield__label" for="Password">Escribe tu correo aqu&iacute;</label>
                    </div>
				</div>
				<div class="mdl-card_actions again p-l-15 p-r-15 p-t-30">
    				<button onclick="enviarCorreo()" name="reestablecer" value="Reestablecer"
    					class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised">Reestablecer
    				</button>
    			</div>
    		</div-->
    		<p class="m-0 m-t-10 m-b-10 text-center" id="hjk"><a class="link-smiledu" href="http://www.smiledu.pe" target="_blank"><strong>Smiledu</strong>&reg;</a> Created by <a class="link-smiledu" href="http://www.softhy.pe/" target="_blank" style="text-decoration:none">Softhy</a></strong>.</p>
    	</div>
    	<div class="modal fade backModal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content ">
                    <div class="mdl-card mdl-card-fab">
                        <div class="mdl-card__title p-b-0">
    						<h2 class="mdl-card__title-text">Recuperar Contrase&ntilde;a</h2>
    					</div>
    					<div class="mdl-card__supporting-text">
    						<p>Te enviaremos un enlace para que cambies tu contrase&ntilde;a.</p>
                            <div class="col-sm-12 mdl-input-group mdl-input-group__only p-0">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" name="correo" id="correo" autofocus="autofocus"/>
                                    <label class="mdl-textfield__label" for="Password">Escribe tu correo</label>                            
                                </div>
                            </div>
                        </div>
    					<div class="mdl-card__actions">
                            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised" onclick="enviarCorreo()">Enviar</button>
                        </div>
                        <div class="mdl-card__menu">
                            <button  class="mdl-button mdl-js-button mdl-button--icon" data-dismiss="modal">
                                <i class="mdi mdi-close"></i>
                            </button>
                        </div>
                    </div>
    			</div>
    		</div>
    	</div>
    	<script>
    	     <?php $cookie_value = true;
    	     if(!isset($_COOKIE[$cookie_name])) {
    	         setcookie($cookie_name, $cookie_value, -1, '/'); ?>
        	     window.addEventListener("load", function() {
                  	setTimeout(function() {
                  	var load_screen = document.getElementById("load_screen");
                  	document.body.removeChild(load_screen);}, 2600);
                  });
    	     <?php } ?>

		</script>
        <script src="<?php echo RUTA_JS?>libs/jquery/jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>libs/jquery-ui/jquery-ui.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>libs/jquery/jquery-migrate-1.2.1.min.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_PLUGINS?>mdl/js/material.min.js?v=<?php echo time();?>" defer></script>
    	<script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"/></script>
    	<script src="<?php echo RUTA_PLUGINS?>b_select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>	
    	<script src="<?php echo RUTA_JS?>libs/spin.js/spin.min.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_PLUGINS;?>toaster/toastr.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_JS?>libs/autosize/jquery.autosize.min.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_JS?>core/cache/63d0445130d69b2868a8d28c93309746.js?v=<?php echo time();?>"></script>   
        <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>           
        <script src="<?php echo RUTA_JS?>jslogic/jslogin.js?v=<?php echo time();?>"></script>
    	<script type="text/javascript">
            init();
    		$('.toggle').on('click', function() {
                $('.container').stop().addClass('active');
            });
            $('.close').on('click', function() {
                $('.container').stop().removeClass('active');
            });
            $(document).ready(function() {
                $("#input").click(function () {
                    $("#showpas").fadeIn();
                });
            });
            
  		</script>
    </body>
</html>
