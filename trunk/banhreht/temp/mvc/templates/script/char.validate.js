	$(document).ready(function()
	{
		$('input:text').bind('focus keyup',validate);
		function validate()
		{
			var cur = $(this);
			cur.next().remove();
			if(cur.hasClass('text'))
			{
				if($.trim(cur.val().length)<6)
				{
					cur.after('<span class="error">Tên không được để trống và nhỏ hơn 6 ký tự</span>');
					cur.data('valid',false);
				}
				else
				{
					cur.after('<div class="Button StateDefault ButtonIconLeft CornerAll"><span class="ButtonIcon ButtonIconCheck"/></div>');
					cur.data('valid',true);
				}
			}
		}
		$('.submit').click(function()
			{
				var dataValid=true;
				$('.text').each(function()
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
	

	
