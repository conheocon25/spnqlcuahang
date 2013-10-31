<?php	
	require_once("mvc/base/ViewHelper.php");		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewSupplierDebts.html");	
	$Supplier = $req->getObject('Supplier');
	$SDs = $req->getObject('SDs');
	$tpl->Supplier  = $Supplier;
	$tpl->SDs  = $SDs;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');
	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>