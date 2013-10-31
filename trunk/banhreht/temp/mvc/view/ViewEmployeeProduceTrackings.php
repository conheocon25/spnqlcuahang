<?php	
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();	
	$Factory = $req->getObject('Factory');
	$Type = $Factory->getType();
	if ($Type%10 ==1)
		$tpl = new PHPTAL( "mvc/templates/ViewEmployeeProduceTrackings1.html");
	else
		$tpl = new PHPTAL( "mvc/templates/ViewEmployeeProduceTrackings2.html");
					
	$EmployeeProduceTrackings = $req->getObject('EmployeeProduceTrackings');
	
	
	$tpl->DateStart  = $req->getProperty('DateStart');
	$tpl->DateEnd  = $req->getProperty('DateEnd');
	$tpl->Factory  = $Factory;
	$tpl->EmployeeProduceTrackings  = $EmployeeProduceTrackings;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');
	$tpl->PrintLinked = $req->getProperty('PrintLinked');
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>