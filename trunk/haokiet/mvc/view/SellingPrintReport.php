<?php	
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/SellingPrintReport.html");
	echo $Viewer->pdfA4("L");
?>
