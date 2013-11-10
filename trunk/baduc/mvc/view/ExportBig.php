<?php
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/ExportBig.html");
	echo $Viewer->html();
?>
