<?php
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/SellingStoreOrder.html");
	echo $Viewer->html();
?>
