<?php
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/SellingCheckingOrderView.html");
	echo $Viewer->html();
?>
