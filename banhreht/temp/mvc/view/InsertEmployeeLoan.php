<?php
	require_once("mvc/base/ViewHelper.php");
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/InsertEmployeeLoan.html");
	
	$Employee = $req->getObject('Employee');
	$tpl->Employee = $Employee;
				
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');
			
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->isLogin = true;
	
	echo $tpl->execute();
		
?>
