<?php	
	require_once("mvc/base/ViewHelper.php");
	$ses = \MVC\Base\SessionRegistry::instance();	
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewCustomerLoans.html");
	
	$Customer = $req->getObject('Customer');
	$CLs = $req->getObject('CLs');

	$tpl->Customer  = $Customer;
	$tpl->CLs  		= $CLs;	
	$tpl->User 		= $ses->getCurrentUser();	
	$tpl->Title 	= $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');
	$tpl->isLogin 	= true;
	echo $tpl->execute();
		
?>