<?php
	namespace MVC\Command;
	class Main extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");		
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
