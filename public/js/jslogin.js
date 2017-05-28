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

$(".toogle-password").click(function() {
	$(this).find('i').toggleClass("mdi-remove_red_eye mdi-visibility_off");
    var input = $(this).parent().find('.mdl-textfield__input');
    if (input.attr("type") == "password") {
       input.attr("type", "text");
    }else {
      input.attr("type", "password");
  }
});