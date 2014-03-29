<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();
	$OID = $request->getObject('OID');
	$Data = array(
		"Result" => "OK",
		"Name"=>$OID->getResource()->getName(),
		"Unit"=>$OID->getResource()->getUnit()->getName(),
		"Count"=>$OID->getCount()
	);
	echo json_encode($Data);
?>