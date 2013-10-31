<?php
	require_once("mvc/base/ViewHelper.php");	
	$req = VH::getRequest();
		
	$Resource = $req->getObject('Resource');
	$Data = array(
		"Price"=>$Resource->getPriceExport()
	);
	
	echo json_encode($Data);
?>