<?php	
	namespace MVC\Command;
	class DeleteEmployee extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
														
			$mEmployee = new \MVC\Mapper\Employee();
			$mEmployee->delete( array($request->getProperty('IdEmployee')));
			
			return self::statuses('CMD_OK');
		}
	}
?>