<?php
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/Product.html");
	echo $Viewer->html();
?>
