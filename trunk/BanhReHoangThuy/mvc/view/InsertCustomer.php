<?php			
	require_once("mvc/base/ViewHelper.php");	
	
	$req = VH::getRequest();
	$Customer = $req->getObject('Customer');
	$tpl = new PHPTAL( "mvc/templates/InsertCustomer.html");
	
	$tpl->Title = "THÊM MỚI KHÁCH HÀNG";	
	$tpl->ParentsLinked = "?cmd=ViewCustomers";
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->Customer = $Customer;
	$tpl->isLogin = true;
	
	echo $tpl->execute();	
?>
