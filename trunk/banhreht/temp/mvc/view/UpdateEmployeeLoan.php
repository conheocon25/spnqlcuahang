<?php	
	require_once("mvc/base/ViewHelper.php");
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/UpdateEmployeeLoan.html");
	
	$Employee = $req->getObject('Employee');
	$EmployeeLoan = $req->getObject('EmployeeLoan');
	$tpl->Employee = $Employee;
	$tpl->EmployeeLoan = $EmployeeLoan;
				
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');
			
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->isLogin = true;
	
	echo $tpl->execute();
		
?>
