<?php			
	require_once("mvc/base/ViewHelper.php");
	$req = VH::getRequest();
	$Customer = $req->getObject('Customer');
	
	$tpl = new PHPTAL( "mvc/templates/UpdateCustomer.html");
	$tpl->Title = $req->getProperty('Title');;	
	$tpl->ParentsLinked = "?cmd=ViewCustomers";
	$tpl->Customer = $Customer;
	
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->isLogin = true;
	
	echo $tpl->execute();
	
?>
