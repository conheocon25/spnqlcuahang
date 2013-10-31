<?php	
	namespace MVC\Command;
	class DeleteFactoryLog extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------									
			$IdLog = $request->getProperty('IdLog');
			$mFL = new \MVC\Mapper\FactoryLog();
			$FL = $mFL->find($IdLog);
			$mFL->delete(array($IdLog));
			$request->setProperty('IdFactory', $FL->getIdFactory());
			return self::statuses('CMD_OK');
		}
	}
?>
