$("#main").live( "pagecreate", function( ){
	var CurrentPage = $.session.get('vendaf_paid_employee_current_page');
	if (CurrentPage==null)
		CurrentPage = $(".employee").attr('id');
		
	$.mobile.changePage("#"+CurrentPage);
});

$(".employee").live( "pageshow", function( ){
	var CurrentPage = $.mobile.activePage.attr("id");
	$.session.set('vendaf_paid_employee_current_page', CurrentPage);
});