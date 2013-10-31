<?php	
	namespace MVC\Command;
	class PrintProductImports1 extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			require_once("mvc/PublicFunction.php");
			//------------------------------------------------------------						
									
			$ses = \MVC\Base\SessionRegistry::instance();
			$Today = $ses->getCurrentDate();			
			
			//------------------------------------------------------------
			$mFactory = new \MVC\Mapper\Factory();
			$IdFactory = $request->getProperty('IdFactory');
			$Factory = $mFactory->find($IdFactory);
			$request->setObject('Factory', $Factory);
			$ses->setCurrentFactory($IdFactory);
			
			$mPI = new \MVC\Mapper\ProductImportTracking();			
			$PIs = $mPI->trackByFactory(array(					
					$Factory->getId(),$Today, $Today
				));
			$request->setObject('PIs', $PIs);
						
			$fToday = date("m/Y", strtotime($Today));
			$request->setProperty('Title', $Factory->getName().' GIAO HÀNG THÁNG '.$fToday);
												
			return self::statuses('CMD_OK');
		}
	}
?>
