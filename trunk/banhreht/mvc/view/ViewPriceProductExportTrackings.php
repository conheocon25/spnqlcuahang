<?php	
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewPriceProductExportTrackings.html");
	
	$Factory = $req->getObject('Factory');
	$PPETrackings = $req->getObject('PPETrackings');
	
	
	$tpl->PPETrackings  = $PPETrackings;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');
	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>