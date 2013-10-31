<?php	
	require_once("mvc/base/ViewHelper.php");
	
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/UpdateEmployee.html");
	
	$Factory = $req->getObject('Factory');
	$Employee = $req->getObject('Employee');
	$tpl->Factory = $Factory;
	$tpl->Employee = $Employee;
		
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = "?cmd=ViewFactories";

	$ses = \MVC\Base\SessionRegistry::instance();	

	$tpl->User = $ses->getCurrentUser();
	$tpl->isLogin = true;
	
	echo $tpl->execute();
?>