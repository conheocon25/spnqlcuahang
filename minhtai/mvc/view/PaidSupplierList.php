<?php
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/PaidSupplierList.html");
	echo $Viewer->html();
?>
