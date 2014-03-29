$("#main").live( "pagecreate", function( ){
	var CurrentPage = $.session.get('fipoma_log_current_page');
	//Di chuyển đến trang đã lưu trước đó
	if (CurrentPage==null)
		CurrentPage = $(".log").attr("id");
		
	$.mobile.changePage("#"+CurrentPage);	
});

$(".log").live( "pageshow", function( ){
	var CurrentPage = $.mobile.activePage.attr("id");
	$.session.set('fipoma_log_current_page', CurrentPage);
});