<?php	
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewCustomerPaids.html");
	
	$Customer = $req->getObject('Customer');
	$CPs = $req->getObject('CPs');


	$tpl->Customer  = $Customer;
	$tpl->CPs  = $CPs;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');
	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>