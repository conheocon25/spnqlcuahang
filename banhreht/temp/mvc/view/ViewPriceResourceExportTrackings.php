<?php	
	require_once("mvc/base/ViewHelper.php");		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewPriceResourceExportTrackings.html");
	$PRETrackings = $req->getObject('PRETrackings');
	$tpl->PRETrackings  = $PRETrackings;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();	
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');
	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>