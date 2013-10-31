<?php	
	namespace MVC\Command;
	class ViewProductLabel extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
						
			$mProduct = new \MVC\Mapper\Product();
			$Product = $mProduct->find( $request->getProperty('IdProduct'));
			$request->setObject('Product', $Product);
			$request->setProperty('Title', 'IN NHÃN SẢN PHẨM '.$Product->getFullName());
			
			$Quantity = $request->getProperty('Quantity');
			if (isset($Quantity)){
				//echo "covo day";
				return self::statuses('CMD_OK');
			}
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
