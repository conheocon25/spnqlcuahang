$(document).ready(function(){
	$.mobile.loadingMessageTextVisible = true;
	$('.Plus').live('click', function(){
		
		var URL = $(".supplier").attr('alt');
		var IdResource = $(this).attr('alt');
		var Count = $(this).find('.ui-li-aside').html();
		
		URL = URL+"/"+IdResource+"/plus";
		
		$.mobile.showPageLoadingMsg();
		$.ajax({
			type: "POST", 
			async: false,
			url: URL,
			dataType: 'json',			
			success: function(data){
				Count = data.Count;
				$.mobile.hidePageLoadingMsg();
			}
		});
		$(this).find('.ui-li-aside').html( Count);
	});	
	
	$('.Minus').live('click', function(){
		var URL = $(".supplier").attr('alt');
		var IdResource = $(this).attr('alt');
		var Count = $(this).find('.ui-li-aside').html();
		
		URL = URL+"/"+IdResource+"/minus";
		
		$.mobile.showPageLoadingMsg();
		$.ajax({
			type: "POST", 
			async: false,
			url: URL,
			dataType: 'json',
			success: function(data){
				Count = data.Count;
				$.mobile.hidePageLoadingMsg();
			}
		});
		$(this).prev().find('.ui-li-aside').html( Count);
	});	
	
});
