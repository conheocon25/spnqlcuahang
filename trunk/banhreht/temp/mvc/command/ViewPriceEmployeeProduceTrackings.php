<?php	
	namespace MVC\Command;
	class ViewPriceEmployeeProduceTrackings extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			require_once("mvc/PublicFunction.php");
			//------------------------------------------------------------						
			
			//------------------------------------------------------------
			$IdFactory = $request->getProperty('IdFactory');
			$mFactory = new \MVC\Mapper\Factory();
			$Factory = $mFactory->find($request->getProperty('IdFactory'));
			
			$mPEPTracking = new \MVC\Mapper\PriceEmployeeProduceTracking();
			$PEPTrackings = $mPEPTracking->findBy(array(
				$IdFactory
			));			
			$request->setObject('Factory', $Factory);
			$request->setObject('PEPTrackings', $PEPTrackings);
			
			$request->setProperty('Title', 
				'BẢNG GIÁ GIA CÔNG '.mb_strtoupper($Factory->getName(), 'UTF8')
			);
			$request->setProperty('ParentsLinked', $Factory->getURLViewEmployees());
									
			return self::statuses('CMD_OK');
		}
	}
?>
