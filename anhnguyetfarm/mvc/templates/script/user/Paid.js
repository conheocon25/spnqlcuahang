$("#paid").live( "pagecreate", function( ){
	var CurrentPage = $.session.get('fipoma_paid_current_page');	
	if (CurrentPage==null)
		CurrentPage = "pond";		
	$.mobile.changePage("#"+CurrentPage);
});

$("#pond").live( "pageshow", function( ){
	$.session.set('fipoma_paid_current_page', "pond");	
});

$("#supplier").live( "pageshow", function( ){
	$.session.set('fipoma_paid_current_page', "supplier");
});