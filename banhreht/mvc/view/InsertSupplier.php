<?php			
	require_once("mvc/base/ViewHelper.php");
	
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/InsertSupplier.html");
	
	$tpl->Title = "THÊM MỚI NHÀ CUNG CẤP";	
	$tpl->ParentsLinked = "?cmd=ViewSuppliers";
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->isLogin = true;
	
	echo $tpl->execute();	
?>
