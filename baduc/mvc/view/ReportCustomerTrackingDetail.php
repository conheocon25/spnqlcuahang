<?php
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/ReportCustomerTrackingDetail.html");
	echo $Viewer->html();
?>
