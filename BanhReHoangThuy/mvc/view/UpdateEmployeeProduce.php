<?php	
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/UpdateEmployeeProduce.html");
	
	$Factory = $req->getObject('Factory');
	$Employee = $req->getObject('Employee');
	$EmployeeProduce = $req->getObject('EmployeeProduce');
	$tpl->Factory = $Factory;
	$tpl->Employee = $Employee;
	$tpl->EmployeeProduce = $EmployeeProduce;
				
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');
			
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->isLogin = true;
	
	echo $tpl->execute();
		
?>
