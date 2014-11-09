<?php
	require_once("mvc/base/ViewHelper.php");		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewResourceExports.html");		
	$tpl->Factory = $req->getObject('Factory');
	$tpl->REs = $req->getObject('RE');		
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = "?cmd=ViewFactories";			
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->isLogin = true;	
	echo $tpl->execute();		
?>
