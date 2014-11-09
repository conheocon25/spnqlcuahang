<?php
	require_once("mvc/base/ViewHelper.php");
	
	$req = VH::getRequest();
	$User = $req->getObject('User');
	$template = new PHPTAL( "mvc/templates/main.html");	
	$template->User = $User;
		
	$template->Title = "ĐĂNG NHẬP";
	$template->isLogin = false;
	echo $template->execute();
?>