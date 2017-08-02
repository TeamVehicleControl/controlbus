function init() {
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ){
		$('<i>').attr({
		    'class'	    :  'mdi mdi-arrow_drop_down arrow-login',
		     style		:   'color: #757575 !important'
		}).appendTo('.mdl-select');
	//	$('select').removeAttr();
	}else{
		$('select').selectpicker();
	}
}

//
$(".toogle-password").click(function() {
	$(this).find('i').toggleClass("mdi-remove_red_eye mdi-visibility_off");
    var input = $(this).parent().find('.mdl-textfield__input');
    if (input.attr("type") == "password") {
       input.attr("type", "text");
    }else {
      input.attr("type", "password");
  }
});

function logear(btn) {
	var usuario  = $("#usuario").val();
	var password = $("#password").val();
	if(usuario == null || password == null) {
		msj('error','Su usuario o clave es incorrecto');
		return;
	}
	if(usuario != null && password != null) {
		$.ajax({
			data  : { usuario  : usuario,
					  password : password},
			url   : 'C_login/redirectMenu',
			type  : 'POST'
		}).done(function(data){
			try{
				data = JSON.parse(data);
				if(data.error == 0){
				}
				msj('error',data.msj);
			} catch (err){
				msj('error',err.message);
			}
		});
	}
}