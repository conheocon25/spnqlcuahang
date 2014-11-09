<?php	
	namespace MVC\Command;
	class UpdatePriceResourceExport extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			
			$IdFactory = $request->getProperty('IdFactory');
			$mFactory = new \MVC\Mapper\Factory();
			$Factory = $mFactory->find( $request->getProperty('IdFactory'));
									
			$IdResource = $request->getProperty('IdResource');
			$mResource = new \MVC\Mapper\Product();
			$Resource = $mResource->find($IdResource);
						
			$mPRE = new \MVC\Mapper\PriceResourceExport();
			$Id = $request->getProperty('Id');
			if (isset($Id)){
				$PRE = $mPRE->find($Id);
				$PRE->setPrice($request->getProperty('Price'));
				$mPRE->update($PRE);
				return self::statuses('CMD_OK');
			}
			$Id = $mPRE->checkExist(array(
				$request->getProperty('IdFactory'),
				$IdResource
			));			
			if ($Id == 0){
				$PRE = new \MVC\Domain\PriceResourceExport(
					null,
					$IdFactory,
					$IdResource,
					"",
					0
				);
				$mPRE->insert($PRE);
				$Id = $PRE->getId();
			}
			$PRE = $mPRE->find($Id);
			$request->setObject('PRE', $PRE);
										
			$request->setProperty('Title', 'CẬP NHẬT GIÁ NHẬN NGUYÊN LIỆU CỦA ['.mb_strtoupper($Factory->getName(), 'UTF8').']');
			$request->setProperty('ParentsLinked', '');
						
			return self::statuses('CMD_DEFAULT');
		}
	}
?>