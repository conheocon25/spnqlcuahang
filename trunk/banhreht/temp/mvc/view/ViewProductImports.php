<?php	
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewProductImports.html");
		
	$PIs = $req->getObject('PIs');
	$Factory = $req->getObject('Factory');
	
		
	$tpl->PIs  = $PIs;
	$tpl->Factory = $Factory;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');
	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>