<?php	
	require_once("mvc/base/ViewHelper.php");
	
	$req = VH::getRequest();		
	echo $req->getProperty('value');
?>
