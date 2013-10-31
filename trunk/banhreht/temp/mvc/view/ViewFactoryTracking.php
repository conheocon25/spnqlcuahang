<?php	
require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();
	$tpl = new PHPTAL( "mvc/templates/ViewFactoryTracking.html");
	
	$tpl->DateStart = $req->getProperty('DateStart');
	$tpl->DateEnd = $req->getProperty('DateEnd');
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = "?cmd=ViewFactories";
	
	$tpl->isLogin = true;
	echo $tpl->execute();		
?>