<?php
	require_once("mvc/base/ViewHelper.php");
	
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewFactories.html");
	
	$Factories = $req->getObject('Factories');	

	$tpl->Factories = $Factories;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	
	$tpl->Title = "CÁC LÒ SẢN XUẤT";
		
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>