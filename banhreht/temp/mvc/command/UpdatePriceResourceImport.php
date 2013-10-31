<?php	
	namespace MVC\Command;
	class UpdatePriceResourceImport extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			
			$IdSupplier = $request->getProperty('IdSupplier');
			$mSupplier = new \MVC\Mapper\Supplier();
			$Supplier = $mSupplier->find( $request->getProperty('IdSupplier'));
									
			$IdResource = $request->getProperty('IdResource');
			$mResource = new \MVC\Mapper\Product();
			$Resource = $mResource->find($IdResource);
						
			$mPRI = new \MVC\Mapper\PriceResourceImport();
			$Id = $request->getProperty('Id');
			if (isset($Id)){
				$PRI = $mPRI->find($Id);
				$PRI->setPrice($request->getProperty('Price'));
				$mPRI->update($PRI);
				return self::statuses('CMD_OK');
			}
			$Id = $mPRI->checkExist(array(
				$request->getProperty('IdSupplier'),
				$IdResource
			));			
			if ($Id == 0){
				$PRI = new \MVC\Domain\PriceResourceImport(
					null,
					$IdSupplier,
					$IdResource,
					"",
					0
				);
				$mPRI->insert($PRI);
				$Id = $PRI->getId();
			}
			$PRI = $mPRI->find($Id);
			$request->setObject('PRI', $PRI);
										
			$request->setProperty('Title', 'CẬP NHẬT GIÁ NHẬP NGUYÊN LIỆU CỦA '.mb_strtoupper($Supplier->getName(), 'UTF8'));
			$request->setProperty('ParentsLinked', '?cmd=ViewSettings');
						
			return self::statuses('CMD_DEFAULT');
		}
	}
?>