$("#main").live( "pagecreate", function( ){
	var CurrentPage = $.session.get('fipoma_pond_session_current_page');
	if (CurrentPage == null)
		CurrentPage = $(".session").attr('id');
		
	$.mobile.changePage("#"+CurrentPage);
});

$(".session").live( "pageshow", function( ){
	var CurrentPage = $.mobile.activePage.attr("id");
	$.session.set('fipoma_pond_session_current_page', CurrentPage);
});