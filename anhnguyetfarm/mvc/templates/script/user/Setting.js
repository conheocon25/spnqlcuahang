$("#setting").live( "pagecreate", function( ){
	var CurrentPage = $.session.get('fipoma_setting_current_page');
	if (CurrentPage==null)
		CurrentPage = "info";
	
	$.mobile.changePage("#"+CurrentPage);	
});

$("#info").live( "pageshow", function( ){
	$.session.set('fipoma_setting_current_page', "info");	
});

$("#pond").live( "pageshow", function( ){
	$.session.set('fipoma_setting_current_page', "pond");
});

$("#supplier").live( "pageshow", function( ){
	$.session.set('fipoma_setting_current_page', "supplier");
});

$("#employee").live( "pageshow", function( ){
	$.session.set('fipoma_setting_current_page', "employee");
});

$("#unit").live( "pageshow", function( ){
	$.session.set('fipoma_setting_current_page', "unit");
});

