<?php	
	require_once("mvc/base/ViewHelper.php");
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewPriceResourceImportTrackings.html");		
	$PRITrackings = $req->getObject('PRITrackings');		
	$tpl->PRITrackings  = $PRITrackings;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();	
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>