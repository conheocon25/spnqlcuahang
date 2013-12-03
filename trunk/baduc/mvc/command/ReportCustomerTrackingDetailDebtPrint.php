<?php		
	namespace MVC\Command;	
	class ReportCustomerTrackingDetailDebtPrint extends Command{
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
			$mTCT 		= new \MVC\Mapper\TrackingCT();
			$mTCTR 		= new \MVC\Mapper\TrackingCTR();
			$mCT 		= new \MVC\Mapper\CustomerTracking();						
			$mCustomer 	= new \MVC\Mapper\Customer();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Tracking 	= $mTracking->find($IdTrack);			
			$TCTRAll 	= $mTCTR->findBy(array($IdCT, $IdTrack));
			$Customer 	= $mCustomer->find($IdCustomer);
			$CT			= $mCT->find($IdCT);
			$TCT 		= $Tracking->getTCT($IdCT)->last();
			//print_r($TCT);
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------																	
			$request->setObject('CT'			, $CT);
			$request->setObject('TCT'			, $TCT);
			$request->setObject('TCTRAll'		, $TCTRAll);
			$request->setObject('Tracking'		, $Tracking);			
		}
	}
?>