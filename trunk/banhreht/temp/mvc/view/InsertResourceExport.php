<?php
	require_once("mvc/base/ViewHelper.php");
		
	$req = VH::getRequest();	
	$tpl = new PHPTAL( "mvc/templates/InsertResourceExport.html");
	
	$Factory = $req->getObject('Factory');
	$Resources = $req->getObject('Resources');
	$tpl->Factory = $Factory;
	$tpl->Resources = $Resources;
			
	$tpl->Title = $req->getProperty('Title');
	$tpl->ParentsLinked = $Factory->getURLViewResourceExports();
			
	$ses = \MVC\Base\SessionRegistry::instance();	
	$tpl->User = $ses->getCurrentUser();
	$tpl->isLogin = true;
	
	echo $tpl->execute();
		
?>
