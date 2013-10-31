<?php			
	require_once("mvc/base/ViewHelper.php");			
	$req = VH::getRequest();
		
	$tpl = new PHPTAL( "mvc/templates/InsertCompany.html");	
	$tpl->Title = "THÊM MỚI ";
	$tpl->ParentsText = "CÁC CÔNG TY";
	$tpl->ParentsLinked = "?cmd=ViewCompanies";
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->isLogin = true;
		
	$tpl->echoExecute();	
?>
