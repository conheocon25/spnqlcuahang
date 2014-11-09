<?php		
	require_once("mvc/base/Viewer.php");
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();
	$Order= $request->getObject("Order");
	if ($Order->getState()==0){
		$Viewer = new Viewer("mvc/templates/SellingStoreOrder.html");
	}else{
		$Viewer = new Viewer("mvc/templates/SellingNoneOrder.html");
	}	
	echo $Viewer->html();
?>
