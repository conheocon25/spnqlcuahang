<?php	
	namespace MVC\Command;
	class LoadResource extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------								
			$mResource = new \MVC\Mapper\Resource();
			$Resource = $mResource->find( $request->getProperty('IdResource') );			
			$request->setObject('Resource', $Resource);			
						
			return self::statuses('CMD_OK');
		}
	}
?>
