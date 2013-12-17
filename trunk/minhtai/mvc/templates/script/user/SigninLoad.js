$(document).on("pageshow", "#PageSignin", function() {	
	$("#FormSignin").validate();
	
	$('#FormSignin').jqcrypt({
		keyname:    'cafe123app',
		callback:   function(form){ form.submit(); }
	});
});
