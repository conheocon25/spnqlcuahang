<?php	
	namespace MVC\Command;
	class UpdateProduct extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			
			
			$mProduct = new \MVC\Mapper\Product();
			$Product = $mProduct->find( $request->getProperty('IdProduct'));
									
			$Name = $request->getProperty('Name');
			if (isset($Name)){
				$Product->setName($request->getProperty('Name'));				
				$Product->setWeight($request->getProperty('Weight'));
				$Product->setQuantity($request->getProperty('Quantity'));
				$Product->setFullName($request->getProperty('FullName'));
				$Product->setDescription($request->getProperty('Description'));
				
				$mProduct->update($Product);
				return self::statuses('CMD_OK');
			}
			
			$request->setObject('Product', $Product);			
			$request->setProperty('Title', 'CẬP NHẬT THÔNG TIN SẢN PHẨM ['.mb_strtoupper($Product->getFullName(), 'UTF8')."]" );
						
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
