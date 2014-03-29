$("#main").live( "pagecreate", function( ){
	var CurrentPage = $.session.get('fipoma_export_current_page');
	var CurrentPond = $("#main").attr('alt');
	var LastPond = $.session.get('fipoma_current_pond');
	
	//alert(CurrentPond);
	
	//Di chuyển đến trang đã lưu trước đó
	if (CurrentPage==null)
		CurrentPage = $(".pond").attr("id");
	else{		
		if ( LastPond != CurrentPond ){
			$.session.set('fipoma_current_pond', CurrentPond);
			CurrentPage = $(".pond").attr("id");		
		}
	}
	$.mobile.changePage("#"+CurrentPage);
});

$(".pond").live( "pageshow", function( ){
	var CurrentPage = $.mobile.activePage.attr("id");
	$.session.set('fipoma_export_current_page', CurrentPage);
});