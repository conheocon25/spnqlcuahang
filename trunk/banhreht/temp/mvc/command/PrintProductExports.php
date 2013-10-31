<?php	
	namespace MVC\Command;
	class PrintProductExports extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			require_once("mvc/PublicFunction.php");
									
			$ses = \MVC\Base\SessionRegistry::instance();
			$Today = $ses->getCurrentDate();			
			//------------------------------------------------------------
			$IdCustomer = $request->getProperty('IdCustomer');
			$mCustomer = new \MVC\Mapper\Customer();
			$Customer = $mCustomer->find($IdCustomer);
			$request->setProperty('IdCustomer', $IdCustomer);
			$ses->setCurrentCustomer($IdCustomer);
						
			$mPETracking = new \MVC\Mapper\ProductExportTracking();
			$PETrackings = $mPETracking->trackBy(array($Customer->getId(),$Today, $Today));
			$request->setObject('PETrackings', $PETrackings);
			$fToday = date("m/Y", strtotime($Today));
			$request->setProperty('Title', $Customer->getName().' NHẬN HÀNG THÁNG '.$fToday);
												
			return self::statuses('CMD_OK');
		}
	}
?>
