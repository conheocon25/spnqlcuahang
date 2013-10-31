<?php	
	namespace MVC\Command;
	class DeleteResourceExport extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			$IdUser = \MVC\Base\ApplicationRegistry::getUser();
			$mUser = new \MVC\Mapper\User();
			$User = $mUser->find($IdUser);
			$request->setObject('User', $User);
			
			$mResourceExport = new \MVC\Mapper\ResourceExport();						
			$ResourceExport = $mResourceExport->delete(array($request->getProperty('IdResourceExport')));						
			return self::statuses('CMD_OK');
		}
	}
?>
