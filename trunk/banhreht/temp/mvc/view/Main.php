<?php
	require_once("mvc/base/ViewHelper.php");
	$ses = \MVC\Base\SessionRegistry::instance();
	$req = VH::getRequest();	
	$template = new PHPTAL( "mvc/templates/main.html");
	if (isset($User))
		$template->isLogin = true;
	else
		$template->isLogin = false;		
	$template->User = $ses->getCurrentUser();
	echo $template->execute();
?>
