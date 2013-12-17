<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();
	$OED = $request->getObject('OED');
	$Data = array(
		"Result" => "OK",
		"Name"=>$OED->getResource()->getName(),
		"Unit"=>$OED->getResource()->getUnit()->getName(),
		"Count"=>$OED->getCount()
	);
	echo json_encode($Data);
?>