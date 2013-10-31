<?php	
	require_once("mvc/base/ViewHelper.php");
	$ses = \MVC\Base\SessionRegistry::instance();		
	$req = VH::getRequest();	
	$flagInput = $req->getProperty('flagInput');
	if ($flagInput==true){
		$tpl = new PHPTAL( "mvc/templates/ViewEmployeeTrackings.html");		
	}else{
		$tpl = new PHPTAL( "mvc/templates/ViewEmployeeTrackings1.html");
		$tpl->PrintURLEmployeeTrackings = $req->getProperty('PrintURLEmployeeTrackings');
		$tpl->EmployeeTrackings = $req->getObject('EmployeeTrackings');
	}
	
	//$User = $req->getObject('User');
	$Factory = $req->getObject('Factory');
	$tpl->DateStart  = $req->getProperty('DateStart');
	$tpl->DateEnd  = $req->getProperty('DateEnd');		
	$tpl->User = $ses->getCurrentUser();
	$tpl->Factory = $Factory;
	
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $Factory->getURLViewEmployees();
	
	$tpl->isLogin = true;
	echo $tpl->execute();
	
?>