<?php
	require_once("mvc/base/ViewHelper.php");	
		
	$req = VH::getRequest();
	$Company = $req->getObject('Company');
		
	$tpl = new PHPTAL( "mvc/templates/InsertProduct.html");
	$tpl->Title = "THÊM MỚI SẢN PHẨM CỦA [".mb_strtoupper($Company->getName(),'UTF8')."]";
	
	$tpl->ParentsLinked = $Company->getViewProductsLinked();
	$tpl->Company = $Company;
	$tpl->Categories = $req->getObject('Categories');
	$tpl->Units = $req->getObject('Units');
		
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->isLogin = true;
	
	echo $tpl->execute();
	
?>
