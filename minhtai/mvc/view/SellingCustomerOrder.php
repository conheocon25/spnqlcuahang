<?php
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/SellingCustomerOrder.html");
	echo $Viewer->html();
?>
