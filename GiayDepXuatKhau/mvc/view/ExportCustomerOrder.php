<?php
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/ExportCustomerOrder.html");
	echo $Viewer->html();
?>
