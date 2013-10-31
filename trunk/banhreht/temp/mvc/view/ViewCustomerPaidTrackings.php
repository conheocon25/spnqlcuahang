<?php	
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewCustomerPaidTrackings.html");
		
	$CPTrackings = $req->getObject('CPTrackings');
	$tpl->CPTrackings  = $CPTrackings;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();	
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>