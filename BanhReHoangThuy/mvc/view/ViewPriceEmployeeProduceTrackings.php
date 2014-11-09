<?php	
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();
	$Factory = $req->getObject('Factory');
	
	$Type = $Factory->getType();
	if (($Type%10) == 1){
		$tpl = new PHPTAL( "mvc/templates/ViewPriceEmployeeProduceTrackings1.html");
	}
	else{
		$tpl = new PHPTAL( "mvc/templates/ViewPriceEmployeeProduceTrackings2.html");
	}
	
		
	$PEPTrackings = $req->getObject('PEPTrackings');
	
	
	$tpl->Factory  = $Factory;
	$tpl->PEPTrackings  = $PEPTrackings;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');
	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>