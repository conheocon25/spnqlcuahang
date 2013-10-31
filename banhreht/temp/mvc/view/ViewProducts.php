<?php
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/ViewProducts.html");
		
	$tpl->Products = $req->getObject('Products');
		
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = "?cmd=ViewSettings";
	
	$tpl->DialogTitle = "Cảnh Báo";
	$tpl->Message = "Bạn có thật sự muốn xóa Sản Phẩm này không!";
	
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->isLogin = true;
	
	echo $tpl->execute();
		
?>
