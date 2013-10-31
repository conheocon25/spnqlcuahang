<?php			
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();
	$Supplier = $req->getObject('Supplier');
	
	$tpl = new PHPTAL( "mvc/templates/UpdateSupplier.html");
	$tpl->Title = $req->getProperty('Title');;	
	$tpl->ParentsLinked = "?cmd=ViewSuppliers";
	$tpl->Supplier = $Supplier;
	
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->isLogin = true;
	
	echo $tpl->execute();
	
?>
