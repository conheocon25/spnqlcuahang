<?php	
	namespace MVC\Command;
	class PrintCustomerTracking1 extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//------------------------------------------------------------
			$DateStart = $request->getProperty('DateStart');
			$DateEnd = $request->getProperty('DateEnd');
												
			$IdCustomer = $request->getProperty('IdCustomer');
			$mCustomer = new \MVC\Mapper\Customer();
			$Customer = $mCustomer->find($IdCustomer);
			$request->setProperty('IdCustomer', $IdCustomer);
									
			$mPETracking = new \MVC\Mapper\ProductExportTracking();
			$PETrackings = $mPETracking->trackBy1(array($Customer->getId(),$DateStart, $DateEnd));
			
			$request->setObject('PETrackings', $PETrackings);
			$DateStart1 = date("d/m/Y", strtotime($DateStart));
			$DateEnd1 = date("d/m/Y", strtotime($DateEnd));
			$request->setProperty('Title', $Customer->getName().' NHẬN '.$DateStart1." ĐẾN ".$DateEnd1);
			
			return self::statuses('CMD_OK');
		}
	}
?>
