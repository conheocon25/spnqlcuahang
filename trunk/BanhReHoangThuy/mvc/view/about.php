<?php
	require_once("mvc/base/ViewHelper.php");
	$req = VH::getRequest();	
	$template = new PHPTAL( "mvc/templates/about.html");
	echo $template->execute();
?>
