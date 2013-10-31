<?php	
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewEmployeeLoanTrackings.html");
	
	$Factory = $req->getObject('Factory');
	$EmployeeLoanTrackings = $req->getObject('EmployeeLoanTrackings');
	
	
	$tpl->Factory  = $Factory;
	$tpl->EmployeeLoanTrackings  = $EmployeeLoanTrackings;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');
	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>