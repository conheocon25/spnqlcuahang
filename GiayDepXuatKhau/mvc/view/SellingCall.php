<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();
	$OD 		= $request->getObject('OD');
	$StateNew 	= $request->getProperty('StateNew');
	
	$Data = array(
		"Result" => "OK",
		"StateNew" => $StateNew,
		"Name"=>$OD->getResource()->getName(),
		"Unit"=>$OD->getResource()->getUnit(),
		"Count"=>$OD->getCount(),
		"Value"=>$OD->getValuePrint()
	);
	echo json_encode($Data);
?>