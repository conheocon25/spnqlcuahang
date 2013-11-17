<?php		
	namespace MVC\Command;	
	class ReportCustomerTrackingDetail extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
														
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$IdTrack 	= $request->getProperty('IdTrack');
			$IdCustomer = $request->getProperty('IdCustomer');
			$IdCT 		= $request->getProperty('IdCT');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mTracking 	= new \MVC\Mapper\Tracking();
			$mCustomer 	= new \MVC\Mapper\Customer();
			$mCT 		= new \MVC\Mapper\CustomerTracking();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Tracking 	= $mTracking->find($IdTrack);
			$Customer 	= $mCustomer->find($IdCustomer);
			$CT 		= $mCT->find($IdCT);
									
			$Title = $CT->getNote();
			$Navigation = array(
				array("BÁO CÁO", "/report"),
				array($Tracking->getName(), $Tracking->getURLView() ),
				array("GIAO DỊCH CỦA ".$Customer->getName(), $Tracking->getURLCustomerTracking($IdCustomer) )
			);
					
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title', $Title);						
			$request->setObject('Navigation', $Navigation);
			$request->setObject('Tracking', $Tracking);
			$request->setObject('Customer', $Customer);
			$request->setObject('CT', $CT);
		}
	}
?>