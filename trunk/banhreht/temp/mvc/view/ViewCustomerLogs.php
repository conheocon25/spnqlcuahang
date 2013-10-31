<?php	
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewCustomerLogs.html");
		
	$CLs = $req->getObject('CLs');
	
	$Customer = $req->getObject('Customer');
	
	$tpl->CLs  = $CLs;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->InsertLogLinked = $Customer->getURLInsertLog();
		
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');
	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>