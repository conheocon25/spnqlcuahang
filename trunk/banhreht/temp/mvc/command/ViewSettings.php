<?php	
	namespace MVC\Command;
	class ViewSettings extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//------------------------------------------------------------						
			
									
			return self::statuses('CMD_OK');
		}
	}
?>
