<?php	
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/ExportBigCustomerTrackingOrderPrint.html");
	echo $Viewer->pdfA5();
?>
