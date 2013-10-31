<?php
	require_once("mvc/base/ViewHelper.php");	
	$req = VH::getRequest();
	
	$tpl = new PHPTAL( "mvc/templates/ViewStores.html");
	$tpl->Title = "CÁC KHO HÀNG";	
	$tpl->ParentsText = "CỬA HÀNG";
	$tpl->ParentsLinked = "/";	
	$tpl->Stores = $req->getObject('Stores');
	
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();	
	$tpl->status = $req->getFeedBack();	
	$tpl->isLogin = true;
	
	$tpl->echoExecute();		
?>
