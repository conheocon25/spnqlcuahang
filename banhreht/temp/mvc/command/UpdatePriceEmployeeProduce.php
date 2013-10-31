<?php	
	namespace MVC\Command;
	class UpdatePriceEmployeeProduce extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
						
			$IdFactory = $request->getProperty('IdFactory');
			$mFactory = new \MVC\Mapper\Factory();
			$Factory = $mFactory->find( $request->getProperty('IdFactory'));
			
			$IdEmployee = $request->getProperty('IdEmployee');
			$mEmployee = new \MVC\Mapper\Employee();
			$Employee = $mEmployee->find( $request->getProperty('IdEmployee'));
			
			$IdProduct = $request->getProperty('IdProduct');
			$mProduct = new \MVC\Mapper\Product();
			$Product = $mProduct->find($IdProduct);
						
			$mPEP = new \MVC\Mapper\PriceEmployeeProduce();
			$Id = $request->getProperty('Id');
			if (isset($Id)){
				$PEP = $mPEP->find($Id);
				$PEP->setPrice($request->getProperty('Price'));
				$mPEP->update($PEP);
				return self::statuses('CMD_OK');
			}
			$Id = $mPEP->checkExist(array(
				$request->getProperty('IdEmployee'),
				$IdProduct
			));			
			if ($Id == 0){
				$PEP = new \MVC\Domain\PriceEmployeeProduce(
					null,
					$IdEmployee,
					$IdProduct,"",
					0
				);
				$mPEP->insert($PEP);
				$Id = $PEP->getId();
			}
			$PEP = $mPEP->find($Id);
			$request->setObject('PEP', $PEP);
										
			$request->setProperty('Title', 'CẬP NHẬT GIÁ CHẤM CÔNG CỦA ['.mb_strtoupper($Employee->getName(), 'UTF8').']');
			$request->setProperty('ParentsLinked', $Factory->getURLViewPriceEmployeeProduceTrackings());
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>