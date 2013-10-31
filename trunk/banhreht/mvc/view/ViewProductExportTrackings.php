<?php	
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewProductExportTrackings.html");
		
	$PETrackings = $req->getObject('PETrackings');
	
		
	$tpl->PETrackings  = $PETrackings;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');
	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>