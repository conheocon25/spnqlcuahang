	$(document).ready(function()
	{
		$('#text').bind('focus keyup',validate);
		function validate()
		{
			var cur = $(this);
			cur.next().remove();
			if(cur.hasClass('required'))
			{
				if($.trim(cur.val())=='')
				{
					cur.after('<span class="error">Tên không được để trống và nhỏ hơn 6 ký tự</span>');
					cur.data('valid',false);
				}
				else
				{
					cur.after('<span class="ButtonIcon ButtonIconCirceCheck"></span>');
					cur.data('valid',true);
				}
			}
			else
			{
				cur.data('valid',true);
			}
		}
		$('.submit').click(function()
			{
				var dataValid=true;
				$('.required').each(function()
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
	
