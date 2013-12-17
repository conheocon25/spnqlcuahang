<?php
	require_once("mvc/base/ViewHelper.php");			
	$request = VH::getRequest();
	$ReadNumber = $request->getProperty('ReadNumber');
	$Data = array('result'=>$ReadNumber);		
	echo json_encode($Data);
?>
