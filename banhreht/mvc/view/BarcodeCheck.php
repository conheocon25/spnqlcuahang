<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();
	$Resource = $request->getObject('Resource');
	if (!isset($Resource)){
		$Data = array(
			"Result" => "true",
			"Name"=> "chưa xác định"
		);
	}else{
		$Data = array(
			"Result" => "false",
			"Name"=>$Resource->getName()
		);
	}
	echo json_encode($Data);
?>