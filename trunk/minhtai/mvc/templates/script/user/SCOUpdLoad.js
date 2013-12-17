$(document).ready(function(){				
				$.ajax({
						type: "POST",						
						url: "http://minhtai.123app.net/readnumberstring/" + $("#Price").val(),
						dataType: 'json',			
						success: function(data){																			
							$('.readprice').html(data.result);
						}
				});
				$("#Price").on( "input", function( ){					
					$.ajax({
						type: "POST", 
						async: false,
						url: "http://minhtai.123app.net/readnumberstring/" + $("#Price").val(),
						dataType: 'json',			
						success: function(data){																			
							$('.readprice').html(data.result);
						}
					});
				});
		});
