<?php	
	require_once("mvc/base/ViewHelper.php");
				
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewProductImportTrackings.html");
		
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	
	$tpl->Title = $req->getProperty('Title');
	$tpl->DateStart = $req->getProperty('DateStart');
	$tpl->DateEnd = $req->getProperty('DateEnd');
	$tpl->ParentsLinked = "?cmd=ViewFactories";
	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>