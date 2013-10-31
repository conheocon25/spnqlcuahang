	$(document).ready(function()
	{
		$('#phone').bind('focus keyup',validate);
		function validate()
		{
			var cur = $(this);
			cur.next().remove();
			if(cur.hasClass('phone'))
				{
						var sdt=$.trim(cur.val().length);
						if( sdt < 10 || sdt > 11)
						{
							cur.after('<span class="error">Số điện thoại không hợp lệ</span>');
							cur.data('valid',false);
						}
						else
						{
						cur.after('<span class="error"><img src="mvc/templates/theme/image/check.png"/></span>');
							cur.data('valid',true);
						}
				}
		}
		$('.submit').click(function()
			{
				var dataValid=true;				
				$('.number').each(function()
				{
					var current=$(this);
					current.next().remove();
					if(current.data('valid')!=true)
					{	
						current.after('<span class="error"><img src="mvc/templates/theme/image/daux.png"/></span>');
						dataValid=false;
					}
				});
				if(dataValid)
					$('#info').html('Sucessful');
				else
					$('#info').html('thông tin chưa đầy đủ.');
			});
	});
	
