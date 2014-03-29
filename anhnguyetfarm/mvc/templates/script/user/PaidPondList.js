$("#main").live( "pagecreate", function( ){
	//var CurrentPage = $.session.get('fipoma_paid_pond_current_page');
	
	//if (CurrentPage == null){
	//	CurrentPage = $(".pond").attr('id');
	//}
	
	//$.mobile.changePage("#"+CurrentPage);	
});

$(".pond").live( "pageshow", function( ){
	//var CurrentPage = $.mobile.activePage.attr("id");
	//$.session.set('fipoma_paid_pond_current_page', CurrentPage);
});