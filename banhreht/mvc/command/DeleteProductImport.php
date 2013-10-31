<?php	
	namespace MVC\Command;
	class DeleteProductImport extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
						
			$IdUser = \MVC\Base\ApplicationRegistry::getUser();
			$mUser = new \MVC\Mapper\User();
			$User = $mUser->find($IdUser);
			$request->setObject('User', $User);
			
			$mProductImport = new \MVC\Mapper\ProductImport();
			$ProductImport = $mProductImport->delete(array($request->getProperty('IdProductImport')));
			return self::statuses('CMD_OK');
		}
	}
?>
