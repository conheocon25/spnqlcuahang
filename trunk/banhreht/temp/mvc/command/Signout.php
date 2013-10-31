<?php	
	namespace MVC\Command;
	class Signout extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			$ses = \MVC\Base\SessionRegistry::instance();
			$IdUser = $ses->setCurrentUser("");						
			return self::statuses('CMD_OK');
		}
	}
?>
