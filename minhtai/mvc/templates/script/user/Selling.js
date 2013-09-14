$("#selling").live( "pagecreate", function( ){
	var CurrentPage = $.session.get('vendaf_selling_current_page');	
	//Di chuyển đến trang đã lưu trước đó
	if (CurrentPage==null)
		CurrentPage = $(".customer").attr('id');
		
	$.mobile.changePage("#"+CurrentPage);
	
});

$(".customer").live( "pageshow", function( ){
	var CurrentPage = $.mobile.activePage.attr("id");
	$.session.set('vendaf_selling_current_page', CurrentPage);
});