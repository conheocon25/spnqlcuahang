<?php
	require_once("mvc/base/ViewHelper.php");	
	$req = VH::getRequest();
		
	$Product = $req->getObject('Product');
	$Data = array(
		"Price"=>$Product->getPrice()
	);
	
	echo json_encode($Data);
?>