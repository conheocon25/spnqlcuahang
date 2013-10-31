<?php	
	namespace MVC\Command;
	class UpdateSupplier extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			
			
			$mSupplier = new \MVC\Mapper\Supplier();
			$Supplier = $mSupplier->find( $request->getProperty('IdSupplier') );
			$request->setObject('Supplier', $Supplier);
			
			$request->setProperty('Title', 'CẬP NHẬT THÔNG TIN CỦA '.mb_strtoupper($Supplier->getName(), 'UTF8'));
			
			$name = $request->getProperty('Name');
			if ( isset($name) ){								
				
				$Supplier->setName($request->getProperty('Name'));
				$Supplier->setPhone($request->getProperty('Phone'));
				$Supplier->setAddress($request->getProperty('Address'));
				$Supplier->setDescription($request->getProperty('Description'));
				$Supplier->setBalance($request->getProperty('Balance'));
				
				$mSupplier->update($Supplier);
				return self::statuses('CMD_OK');
			}
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
