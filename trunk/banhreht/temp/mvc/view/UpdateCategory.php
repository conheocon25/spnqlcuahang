<?php			
	require_once("mvc/base/ViewHelper.php");			
	$req = VH::getRequest();
	$Category = $req->getObject('Category');
		
	$tpl = new PHPTAL( "mvc/templates/UpdateCategory.html");
	$tpl->Title = "CẬP NHẬT ".$Category->getName();
	$tpl->Category = $Category;		
	$tpl->ParentsLinked = "?cmd=ViewCategories";
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->isLogin = true;
	
	$tpl->echoExecute();
	
?>
