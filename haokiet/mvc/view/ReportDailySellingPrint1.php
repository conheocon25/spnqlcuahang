<?php	
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/ReportDailySellingPrint1.html");
	echo $Viewer->pdfA4("L");
?>
