<?php
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();
	$IdSupplier = $req->getProperty('IdSupplier');
	
	if ($IdSupplier==1)
		$tpl = new PHPTAL( "mvc/templates/ViewResourceImports1.html");
	else if ($IdSupplier==2)
		$tpl = new PHPTAL( "mvc/templates/ViewResourceImports2.html");
	else if ($IdSupplier==3)	
		$tpl = new PHPTAL( "mvc/templates/ViewResourceImports3.html");
	else if ($IdSupplier==4)	
		$tpl = new PHPTAL( "mvc/templates/ViewResourceImports4.html");
	else if ($IdSupplier==5)
		$tpl = new PHPTAL( "mvc/templates/ViewResourceImports5.html");
	else if ($IdSupplier==6)	
		$tpl = new PHPTAL( "mvc/templates/ViewResourceImports6.html");
	else if ($IdSupplier==7)	
		$tpl = new PHPTAL( "mvc/templates/ViewResourceImports7.html");	
	else if ($IdSupplier==8)	
		$tpl = new PHPTAL( "mvc/templates/ViewResourceImports8.html");	
		
	$tpl->Supplier = $req->getObject('Supplier');
	$tpl->RITs = $req->getObject('RITs');
		
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = "?cmd=ViewSuppliers";
			
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->isLogin = true;
	
	echo $tpl->execute();		
?>
