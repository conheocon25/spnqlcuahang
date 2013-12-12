<?php
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/SellingDetail.html");
	echo $Viewer->html();
?>
