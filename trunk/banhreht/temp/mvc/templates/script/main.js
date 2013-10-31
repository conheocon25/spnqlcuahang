var IDInterval = 0;
var ncount = 0;
function loadClock()
{		
	IDInterval = setInterval ( "updateTime()", 1000 );			
}
function updateTime()
{		
	if((ncount % 2) == 0)
	{
		$('.time').text(getClockTimeFree());
	}
	$('.time').text(getClockTime());			
	ncount = ncount + 1;
}
function getCurrentDateTime()
{
	var ct = new Date();
	var year = ct.getFullYear();
	var month = ct.getMonth()+1;
	var day = ct.getDate();	
	var s = year+"/"+month+"/"+day;
	return s;
}
function getCurrentDateTimeVN()
{
	var ct = new Date();
	var year = ct.getFullYear();
	var month = ct.getMonth()+1;
	var day = ct.getDate();	
	var s = day+"/"+month+"/"+year;
	return s;
}
function getCurrentDateTimeUS()
{
	var ct = new Date();
	var year = ct.getFullYear();
	var month = ct.getMonth()+1;
	var day = ct.getDate();
	var hour = ct.getHours();
	var minute = ct.getMinutes();
	var s = year+"/"+month+"/"+day + " " + hour + ":" + minute;
	return s;
}
function getCurrentTime()
{
	var ct = new Date();	
	var hour = ct.getHours();
	var minute = ct.getMinutes();
	var s = hour + ":" + minute;
	return s;
}
function formatnumber(number){	
	if(number < 10)
	{
		return '0'+number;
	}
	else
	{
		return number;
	}
}
function getClockTime()
{
	var ct = new Date();	
	var hour = formatnumber(ct.getHours());
	var minute = formatnumber(ct.getMinutes());
	var second = formatnumber(ct.getSeconds());	
	var s = hour + ":" + minute + ":" + second;
	return s;
}
function getClockTimeFree()
{
	var ct = new Date();	
	var hour = formatnumber(ct.getHours());
	var minute = formatnumber(ct.getMinutes());
	var second = formatnumber(ct.getSeconds());	
	var s = hour + " " + minute + " " + second;
	return s;
}
function getClockDate()
{
	var ct = new Date();
	var year = ct.getFullYear();
	var month = formatnumber(ct.getMonth()+1);
	var day = formatnumber(ct.getDate());	
	var s = 'Đồng Tháp, '+day+ '/' + month + '/' + year;
	return s;
}
function checkNumber($txt,$error,$message)
{
	var data = $txt.val(); 
	var len = data.length;
	if(len < 1) 
	{ 
	    $error.show(); 
		$error.text('Chuỗi rỗng!');
		event.preventDefault();				
	} 
	else 
	{
		var c; 
		for(var i=0;i < len;i++) 
		{ 
			c=data.charAt(i).charCodeAt(0); 
			if(c < 48 || c > 57) 
			{ 
				$error.show(); 
				$error.text($message);														
				event.preventDefault();
				return false;
			} 
			else 
			{ 
				$error.hide();						
			} 
		}			
		return true;					
	} 
}
function checkEmail($txt,$error,$message)
{
			var data = $txt.val(); 
			var len = data.length;				
			var age = 0;
			if(len < 1) 
			{ 
			    $error.show(); 
				$error.text('Chuổi rỗng!');
				event.preventDefault();				
			} 
			else 
			{				
				if(valid_email(data)) 
				{ 
					$error.hide(); 
				} 
				else 
				{ 
					$error.show(); 
					$error.text($message);
					event.preventDefault(); 
				} 
			} 		   
}
function valid_email(email) 
{ 
		var pattern= new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/); 
		return pattern.test(email); 
} 
function checkPhoneNumber($txt,$error,$message)
{
			var data = $txt.val(); 
			var len = data.length;				
			var age = 0;
			if(len < 1) 
			{ 
			    $error.show(); 
				$error.text('Chuổi rỗng!');
				event.preventDefault();				
			} 
			else 
			{				
				if(validate_phoneno(data)) 
				{ 
					$error.hide(); 
				} 
				else 
				{ 
					$error.show(); 
					$error.text($message);
					event.preventDefault(); 
				} 
			} 		   
}
function validate_phoneno(strphone) 
{ 
	  var pattern=new RegExp(/^[0-9-+]+$/); 
	  return pattern.test(strphone); 
}
function formatNumber($text)
{
			var c=''; 
			var data=$text; 
			var len=data.length;			
			var j =0;				
				for(var i=len;i > 0;i--) 
					{ 
					  c = data.charAt(i) + c;
					  if(j%3 == 0 && j > 2) 
					  { 
						c = ',' + c;						
					  } 					  
					  j++;
					}						
			c = data.charAt(0) + c;			
			return c;
}