$("#setting").live( "pagecreate", function( ){
	var CurrentPage = $.session.get('vendaf_setting_current_page');
	if (CurrentPage==null)
		CurrentPage = "info";
			
	$.mobile.changePage("#"+CurrentPage);
});

$("#info").live( "pageshow", function( ){
	$.session.set('vendaf_setting_current_page', "info");
});

$("#category").live( "pageshow", function( ){
	$.session.set('vendaf_setting_current_page', "category");
});

$("#customer").live( "pageshow", function( ){
	$.session.set('vendaf_setting_current_page', "customer");
});

$("#store").live( "pageshow", function( ){
	$.session.set('vendaf_setting_current_page', "store");
});

$("#supplier").live( "pageshow", function( ){
	$.session.set('vendaf_setting_current_page', "supplier");
});

$("#term").live( "pageshow", function( ){
	$.session.set('vendaf_setting_current_page', "term");
});

$("#employee").live( "pageshow", function( ){
	$.session.set('vendaf_setting_current_page', "employee");
});

$("#unit").live( "pageshow", function( ){
	$.session.set('vendaf_setting_current_page', "unit");
});

