<?php	
	namespace MVC\Command;
	class UpdateResource extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
					
			$mResource = new \MVC\Mapper\Resource();									
			$Resource = $mResource->find( $request->getProperty('IdResource'));
									
			$Name = $request->getProperty('Name');
			if (isset($Name)){
				$Resource->setName($request->getProperty('Name'));
				$Resource->setQuantity($request->getProperty('Quantity'));
				$Resource->setPriceImport($request->getProperty('PriceImport'));
				$Resource->setPriceExport($request->getProperty('PriceExport'));
				$Resource->setDescription($request->getProperty('Description'));
				
				$mResource->update($Resource);
				return self::statuses('CMD_OK');
			}
			
			$request->setObject('Resource', $Resource);			
			$request->setProperty('Title', 'CẬP NHẬT THÔNG TIN NGUYÊN LIỆU ['.mb_strtoupper($Resource->getName(), 'UTF8')."]" );
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
