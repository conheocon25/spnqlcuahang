<?php	
	require_once("mvc/base/ViewHelper.php");
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewFactoryLoanTrackings.html");
	
	$Factory = $req->getObject('Factory');
	$FactoryLoanTrackings = $req->getObject('FactoryLoanTrackings');
	
	
	$tpl->Factory  = $Factory;
	$tpl->FactoryLoanTrackings  = $FactoryLoanTrackings;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');
	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>