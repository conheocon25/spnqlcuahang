<?php
	require_once("mvc/base/ViewHelper.php");	
	$req = VH::getRequest();
	
	$tpl = new PHPTAL( "mvc/templates/ViewSettings.html");
	$tpl->Title = "THIẾT LẬP HỆ THỐNG";
	$tpl->ParentsText = "CỬA HÀNG";
	$tpl->ParentsLinked = "/";	
	
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();	
	$tpl->isLogin = true;
	
	$tpl->echoExecute();		
?>
