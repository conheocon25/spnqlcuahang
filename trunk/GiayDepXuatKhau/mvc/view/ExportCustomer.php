<?php
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/ExportCustomer.html");
	echo $Viewer->html();
?>
