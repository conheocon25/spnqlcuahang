<?php
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewSuppliers.html");	
	$Suppliers = $req->getObject('Suppliers');	

	$tpl->Suppliers = $Suppliers;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	
	$tpl->Title = "NHÀ CUNG CẤP";	
	$tpl->ParentsLinked = "/";
	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>