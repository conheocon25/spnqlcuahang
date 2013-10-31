<?php			
	require_once("mvc/base/ViewHelper.php");
	$req = VH::getRequest();
		
	$tpl = new PHPTAL( "mvc/templates/UpdateProduct.html");
	
	$tpl->Product = $req->getObject('Product');
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = "?cmd=ViewProducts";
	
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->isLogin = true;
	
	echo $tpl->execute();
	
?>
