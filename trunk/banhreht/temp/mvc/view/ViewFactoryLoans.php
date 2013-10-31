<?php
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewFactoryLoans.html");
	
	$Factory = $req->getObject('Factory');
	$FLs = $req->getObject('FLs');
	

	$tpl->Factory  = $Factory;
	$tpl->FLs  = $FLs;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = "?cmd=ViewFactories";
	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>