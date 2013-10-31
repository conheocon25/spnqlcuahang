<?php
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewFactoryTrackings.html");
		
	$Factory = $req->getObject('Factory');
	$FTrackings = $req->getObject('FTrackings');
	

	$tpl->Factory  = $Factory;
	$tpl->FTrackings  = $FTrackings;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = "?cmd=ViewFactories";
	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>