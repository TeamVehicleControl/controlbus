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
	$("#loginForm input, select, textarea").keypress(function(event) {
		if (event.which == 13) {
			event.preventDefault();
			logear();
		}
	});
	$("[data-hide]").on("click", function(){
        $(this).closest("." + $(this).attr("data-hide")).hide();
    });
	resizeContent();
}

var errorLogin = 0;
$(".toogle-password").click(function() {
	$(this).find('i').toggleClass("mdi-remove_red_eye mdi-visibility_off");
    var input = $(this).parent().find('.mdl-textfield__input');
    if (input.attr("type") == "password") {
       input.attr("type", "text");
    }else {
      input.attr("type", "password");
  }
});

function logear() {
	$('#btnLoginAdminPass').addClass('btn-load');
	var user  = $("#usuario").val();
	var pass = $("#password").val();
	check = '0';
	if ($('#check').is(":checked")) {
		check = '1';
	}
	if(user.length == 0) {
		$("#incUser").text("Tu usuario y/o contrase&ntilde;a son incorrectas");
		console.log('entra');
		return;
	}
	if(pass.length == 0) {
		$("#incPass").text("Tu usuario y/o contrase&ntilde;a son incorrectas");
		console.log('entra2');
		return;
	}
	if(usuario.length != 0 && password != 0) {
		$.ajax({
			data  : { user  : user,
					  pass  : pass,
					  check : check},
			url   : 'C_login/logear',
			type  : 'POST'
		}).done(function(data){
			try{
				data = JSON.parse(data);
				if(data.error == 0){
				}
				//msj('error',data.msj);
			} catch (err){
				msj('error',err.message);
			}
		});
	}
}
