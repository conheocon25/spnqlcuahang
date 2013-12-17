$("#main").live( "pagecreate", function( ){
	var CurrentPage = $.session.get('vendaf_paid_other_current_page');
	if (CurrentPage==null)
		CurrentPage = $(".other").attr('id');
		
	$.mobile.changePage("#"+CurrentPage);
});

$(".other").live( "pageshow", function( ){
	var CurrentPage = $.mobile.activePage.attr("id");
	$.session.set('vendaf_paid_other_current_page', CurrentPage);
});