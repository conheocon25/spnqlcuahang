//////// text ký tự đặt biệt /////
$(document).ready(function() {    
  $('.errName').hide(); 
  $('#submit').click(function(event){ 
    var data=$('.Name').val(); 
    if(validate_userid(data)) 
    { 
      $('.errName').hide(); 
    } 
    else 
    { 
      $('.errName').show(); 
      event.preventDefault(); 
    } 
  }); 
}); 
 
function validate_userid(uid) 
{ 
  var pattern= new RegExp(/^[a-z0-9_]+$/); 
  return pattern.test(uid); 
}

//////// Phone //////
$(document).ready(function($){
   $("#phone").mask("(999) 999-99999");
});

$(document).ready(function() {    
  $('.errPhone').hide(); 
  $('#submit').click(function(event){ 
    var data=$('#phone').val(); 
    var phone=data.length; 
    if(phone<10) 
    { 
	  $('.errPhone').show(); 
      event.preventDefault(); 
    } 
    else 
    { 
      $('.errPhone').hide(); 
    }
   }); 
}); 
//////Address//////
$(document).ready(function() {    
  $('.errAdd').hide(); 
  $('#submit').click(function(event){ 
    var data=$('.Add').val(); 
    if(validate_userid(data)) 
    { 
      $('.errAdd').hide(); 
    } 
    else 
    { 
      $('.errAdd').show(); 
      event.preventDefault(); 
    } 
  }); 
}); 

