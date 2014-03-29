$("#main").live( "pagecreate", function( ){
	var CurrentPage = $.session.get('fipoma_export_pond_order_current_page');
	if (CurrentPage == null)
		CurrentPage = $(".order").attr('id');
		
	$.mobile.changePage("#"+CurrentPage);
});

$(".order").live( "pageshow", function( ){
	var CurrentPage = $.mobile.activePage.attr("id");
	$.session.set('fipoma_export_pond_order_current_page', CurrentPage);	
});