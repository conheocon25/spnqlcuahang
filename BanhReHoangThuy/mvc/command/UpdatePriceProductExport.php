<?php	
	namespace MVC\Command;
	class UpdatePriceProductExport extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
						
			$IdCustomer = $request->getProperty('IdCustomer');
			$mCustomer = new \MVC\Mapper\Customer();
			$Customer = $mCustomer->find( $request->getProperty('IdCustomer'));
									
			$IdProduct = $request->getProperty('IdProduct');
			$mProduct = new \MVC\Mapper\Product();
			$Product = $mProduct->find($IdProduct);
						
			$mPPE = new \MVC\Mapper\PriceProductExport();
			$Id = $request->getProperty('Id');
			if (isset($Id)){
				$PPE = $mPPE->find($Id);
				$PPE->setPrice($request->getProperty('Price'));
				$mPPE->update($PPE);
				return self::statuses('CMD_OK');
			}
			$Id = $mPPE->checkExist(array(
				$request->getProperty('IdCustomer'),
				$IdProduct
			));			
			if ($Id == 0){
				$PPE = new \MVC\Domain\PriceProductExport(
					null,
					$IdCustomer,
					$IdProduct,
					"",
					0
				);
				$mPPE->insert($PPE);
				$Id = $PPE->getId();				
			}
			$PPE = $mPPE->find($Id);
			$request->setObject('PPE', $PPE);
										
			$request->setProperty('Title', 'CẬP NHẬT GIÁ CỦA '.mb_strtoupper($Customer->getName(), 'UTF8'));
			$request->setProperty('ParentsLinked', '?cmd=ViewPriceProductExportTrackings');
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>