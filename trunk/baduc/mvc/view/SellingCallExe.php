<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();
	$OD = $request->getObject('OD');
	$Data = array(
		"Result" => "OK",
		"Name"=>$OD->getResource()->getName(),
		"Unit"=>$OD->getResource()->getUnit(),
		"Count"=>$OD->getCount()
	);
	echo json_encode($Data);
?>