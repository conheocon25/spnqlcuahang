<?php
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/SellingCustomerOrderAllPrint.html");
	echo $Viewer->pdf();
?>