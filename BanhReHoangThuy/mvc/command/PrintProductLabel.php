<?php	
	namespace MVC\Command;
	class PrintProductLabel extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			
			$FullName = $request->getProperty('FullName');
			$Quantity = $request->getProperty('Quantity');
			
			$request->setProperty('FullName', $FullName);
			$request->setProperty('Quantity', $Quantity);
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
