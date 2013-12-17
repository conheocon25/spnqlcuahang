$("#selling").live( "pagecreate", function( ){
	var CurrentPage = $.session.get('minhtai_CurrentPage');	
	//Di chuyển đến trang đã lưu trước đó
	if (CurrentPage==null)
		CurrentPage = $(".customer").attr('id');
		
	$.mobile.changePage("#"+CurrentPage);
	
});

$(".customer").live( "pageshow", function( ){
	var CurrentPage = $.mobile.activePage.attr("id");
	$.session.set('minhtai_CurrentPage', CurrentPage);
});