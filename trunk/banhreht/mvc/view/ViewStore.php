<?php
	require_once("mvc/base/ViewHelper.php");	
	$req = VH::getRequest();
	$Store = $req->getObject('Store');	
	$tpl = new PHPTAL( "mvc/templates/ViewStore.html");
	$tpl->Title = "KHO ".$Store->getName();	
	$tpl->ParentsText = "CÁC KHO HÀNG";
	$tpl->ParentsLinked = $Store->getViewStoresLinked();	
	$tpl->Store = $req->getObject('Store');
	$tpl->StoreDetails = $req->getObject('StoreDetails');	
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->isLogin = true;	
	$tpl->echoExecute();		
?>
