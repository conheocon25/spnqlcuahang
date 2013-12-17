$("#storeinit").live( "pagecreate", function( ){
	var CurrentPage = $.session.get('fipoma_setting_store_init_current_page');	
	//Di chuyển đến trang đã lưu trước đó
	if (CurrentPage==null)
		CurrentPage = $(".supplier").attr("id");
	$.mobile.changePage("#"+CurrentPage);
	
});

$(".supplier").live( "pageshow", function( ){
	var CurrentPage = $.mobile.activePage.attr("id");
	$.session.set('fipoma_setting_store_init_current_page', CurrentPage);
});