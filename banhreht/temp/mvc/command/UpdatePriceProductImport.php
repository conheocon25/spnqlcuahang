<?php	
	namespace MVC\Command;
	class UpdatePriceProductImport extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			
			
			$IdFactory = $request->getProperty('IdFactory');
			$mFactory = new \MVC\Mapper\Factory();
			$Factory = $mFactory->find( $request->getProperty('IdFactory'));
									
			$IdProduct = $request->getProperty('IdProduct');
			$mProduct = new \MVC\Mapper\Product();
			$Product = $mProduct->find($IdProduct);
						
			$mPPI = new \MVC\Mapper\PriceProductImport();
			$Id = $request->getProperty('Id');
			if (isset($Id)){
				$PPI = $mPPI->find($Id);
				$PPI->setPrice($request->getProperty('Price'));
				$mPPI->update($PPI);
				return self::statuses('CMD_OK');
			}
			$Id = $mPPI->checkExist(array(
				$request->getProperty('IdFactory'),
				$IdProduct
			));			
			if ($Id == 0){
				$PPI = new \MVC\Domain\PriceProductImport(
					null,
					$IdFactory,
					$IdProduct,
					"",
					0
				);
				$mPPI->insert($PPI);
				$Id = $PPI->getId();
			}
			$PPI = $mPPI->find($Id);
			$request->setObject('PPI', $PPI);
										
			$request->setProperty('Title', 'CẬP NHẬT GIÁ CỦA '.mb_strtoupper($Factory->getName(), 'UTF8'));
			$request->setProperty('ParentsLinked', '?cmd=ViewPriceProductImportTrackings');
					
			return self::statuses('CMD_DEFAULT');
		}
	}
?>