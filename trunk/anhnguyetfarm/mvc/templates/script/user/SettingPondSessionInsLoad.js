$(document).bind( "pagebeforechange", function( e, data ) {		
    $("#FormSettingPondSessionInsLoad").validate();
	$("#DateStart").scroller({ 
		preset: 'date', 
		mode: 'clickpick',
		dateOrder:'yymmdd',
		dateFormat: 'yy-mm-dd',
		dayText:'Ngày',
		monthText:'Tháng',
		yearText:'Năm'		
	});
	$('#DateStart').scroller('setDate', new Date(), true);
	
	$("#DateEnd").scroller({ 
		preset: 'date', 
		mode: 'clickpick',
		dateOrder:'yymmdd',
		dateFormat: 'yy-mm-dd',
		dayText:'Ngày',
		monthText:'Tháng',
		yearText:'Năm'		
	});
	$('#DateEnd').scroller('setDate', new Date(), true);
	
});