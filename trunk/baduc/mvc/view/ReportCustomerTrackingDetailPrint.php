<?php	
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/ReportCustomerTrackingDetailPrint.html");
	echo $Viewer->pdfA4("L");
?>