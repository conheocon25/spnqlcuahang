<?php	
	namespace MVC\Command;
	class InsertSupplier extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			
			$mSupplier = new \MVC\Mapper\Supplier();											
			$Name = $request->getProperty('Name');
			if (isset($Name)){								
				$Supplier	= new \MVC\Domain\Supplier(					
					null,
					$request->getProperty('Name'),					
					$request->getProperty('Phone'),
					$request->getProperty('Address'),
					$request->getProperty('Description'),
					0
				);
				$mSupplier->insert($Supplier);
				return self::statuses('CMD_OK');
			}
			$request->setProperty('Title', 'THÊM NHÀ CUNG CẤP');
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
