<?php	
	namespace MVC\Command;
	class PrintFactoryTracking extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			
			//------------------------------------------------------------						
		
			$ses = \MVC\Base\SessionRegistry::instance();			
			
			$IdFactory = $request->getProperty('IdFactory');
			$mFactory = new \MVC\Mapper\Factory();
			$Factory = $mFactory->find($IdFactory);
			
			$DateStart = $request->getProperty('DateStart');
			$DateEnd = $request->getProperty('DateEnd');
						
			//$mFT = new \MVC\Mapper\FactoryTracking();
			
			$mPI = new \MVC\Mapper\ProductImport();
			$PIs = $mPI->findByDate(array($IdFactory, $DateStart, $DateEnd));
			$PIValue = $mPI->evalByDate(array($IdFactory, $DateStart, $DateEnd));
			
			$mRE = new \MVC\Mapper\ResourceExport();
			$REs = $mRE->findByDate(array($IdFactory, $DateStart, $DateEnd));
			$REValue = $mRE->evalByDate(array($IdFactory, $DateStart, $DateEnd));
			
			$mFL = new \MVC\Mapper\FactoryLoan();
			$FLTrackings = $mFL->findByDate(array($IdFactory, $DateStart, $DateEnd));
			$FLTrackingValue = $mFL->evalByDate(array($IdFactory, $DateStart, $DateEnd));
						
			$TotalValue = round($PIValue - ($FLTrackingValue + $REValue),-3);
			
			$request->setObject('Factory', $Factory);
			$request->setProperty('DateStart', $DateStart);
			$request->setProperty('DateEnd', $DateEnd);
			
			$request->setObject('PIs', $PIs);
			$request->setProperty('PIValue', $PIValue);
									
			$request->setObject('REs', $REs);
			$request->setProperty('REValue', $REValue);
						
			$request->setObject('FLTrackings', $FLTrackings);
			$request->setProperty('FLTrackingValue', $FLTrackingValue);
			
			$request->setProperty('TotalValue', $TotalValue);
			
			return self::statuses('CMD_OK');
		}
	}
?>
