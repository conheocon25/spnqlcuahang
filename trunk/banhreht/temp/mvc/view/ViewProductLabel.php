<?php
	require_once("mvc/base/ViewHelper.php");		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewProductLabel.html");
	$Product = $req->getObject('Product');	
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->Product = $Product;
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = "?cmd=ViewSettings";		
	$tpl->isLogin = true;
	echo $tpl->execute();		
?>