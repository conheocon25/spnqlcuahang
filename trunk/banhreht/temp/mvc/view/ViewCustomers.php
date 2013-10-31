<?php
	require_once("mvc/base/ViewHelper.php");		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewCustomers.html");	
	$Customers = $req->getObject('Customers');
	$tpl->Customers = $Customers;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	
	$tpl->Title = "CÁC KHÁCH HÀNG";
	$tpl->ParentsText = "CỬA HÀNG";
	$tpl->ParentsLinked = "/";	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>