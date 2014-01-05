<?php	
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/ExportCustomerOrderPrint.html");
	echo $Viewer->pdf();
?>
