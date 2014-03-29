$("#paid").live( "pagecreate", function( ){
	var CurrentPage = $.session.get('fipoma_paid_employee_current_page');
	
	//Di chuyển đến trang đã lưu trước đó
	$.mobile.changePage("#"+CurrentPage);	
});

$(".Employee").live( "pageshow", function( ){
	var CurrentPage = $.mobile.activePage.attr("id");
	$.session.set('fipoma_paid_employee_current_page', CurrentPage);
});