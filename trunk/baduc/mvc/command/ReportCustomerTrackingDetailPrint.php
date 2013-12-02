<?php		
	namespace MVC\Command;	
	class ReportCustomerTrackingDetailPrint extends Command{
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
			$mTracking	= new \MVC\Mapper\Tracking();			
			$mCT 		= new \MVC\Mapper\CustomerTracking();
			$mTCT 		= new \MVC\Mapper\TrackingCT();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Tracking 	= $mTracking->find($IdTrack);
			$CT			= $mCT->find($IdCT);
			$PreTracking = $Tracking->getPre();			
			$TCTAll		= $Tracking->getTCT($IdCT);			
			$TCTLast	= $TCTAll->last();
			$TCTAll->remove();
												
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------																	
			$request->setObject('Tracking'		, $Tracking);
			$request->setObject('CT'			, $CT);
			$request->setObject('TCTAll'		, $TCTAll);
			$request->setObject('TCTLast'		, $TCTLast);
			$request->setObject('PreTracking'	, $PreTracking);
		}
	}
?>