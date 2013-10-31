<?php	
	namespace MVC\Command;
	class LoadProduct extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------								
			$mProduct = new \MVC\Mapper\Product();
			$Product = $mProduct->find( $request->getProperty('IdProduct') );
			$request->setObject('Product', $Product);			
						
			return self::statuses('CMD_OK');
		}
	}
?>
