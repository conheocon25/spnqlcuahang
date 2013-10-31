<?php	
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewFactoryLogs.html");
		
	$FLs = $req->getObject('FLs');
	
	$Factory = $req->getObject('Factory');
	
	$tpl->FLs  = $FLs;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->hasEmployees = $Factory->hasEmployees();
	$tpl->InsertLogLinked = $Factory->getURLInsertLog();
		
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');
	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>