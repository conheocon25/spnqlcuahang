<?php
	require_once("mvc/base/ViewHelper.php");
	$Views = array(
			1 => "mvc/templates/ViewProductExports01.html",
			2 => "mvc/templates/ViewProductExports02.html",
			3 => "mvc/templates/ViewProductExports03.html",
			4 => "mvc/templates/ViewProductExports04.html",
			5 => "mvc/templates/ViewProductExports05.html",
			6 => "mvc/templates/ViewProductExports06.html",
			7 => "mvc/templates/ViewProductExports07.html",
			8 => "mvc/templates/ViewProductExports08.html",
			9 => "mvc/templates/ViewProductExports09.html",
			10 => "mvc/templates/ViewProductExports10.html",
			11 => "mvc/templates/ViewProductExports11.html"
	);
		
	$req = VH::getRequest();	
	$PETrackings = $req->getObject('PETrackings');
	$Customer = $req->getObject('Customer');
	
	
	$Html = $Views[$Customer->getId()];
	$tpl = new PHPTAL($Html);
			
	$tpl->PETrackings  = $PETrackings;
	$tpl->Customer = $Customer;
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
		
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $req->getProperty('ParentsLinked');
	
	$tpl->isLogin = true;
	echo $tpl->execute();
		
?>