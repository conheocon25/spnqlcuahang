$("#main").live( "pagecreate", function( ){
	var CurrentPage = $.session.get('vendaf_paid_customer_current_page');
	if (CurrentPage==null)
		CurrentPage = $(".customer").attr('id');
		
	$.mobile.changePage("#"+CurrentPage);
});

$(".customer").live( "pageshow", function( ){
	var CurrentPage = $.mobile.activePage.attr("id");
	$.session.set('vendaf_paid_customer_current_page', CurrentPage);
});