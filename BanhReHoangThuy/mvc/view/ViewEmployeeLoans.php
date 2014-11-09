<?php	
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewEmployeeLoans.html");
	
	$Employee = $req->getObject('Employee');
	$EmployeeLoans = $req->getObject('EmployeeLoans');
	

	$tpl->Employee  = $Employee;
	$tpl->EmployeeLoans  = $EmployeeLoans;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');
	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>