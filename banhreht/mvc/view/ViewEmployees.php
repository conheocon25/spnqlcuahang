<?php
	require_once("mvc/base/ViewHelper.php");
	$ses = \MVC\Base\SessionRegistry::instance();	
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewEmployees.html");
	
	$Factory = $req->getObject('Factory');
	$Employees = $req->getObject('Employees');
	

	$tpl->Factory  = $Factory;
	$tpl->Employees  = $Employees;
	$tpl->User = $ses->getCurrentUser();
	
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsText = "CỬA HÀNG";
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');
	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>