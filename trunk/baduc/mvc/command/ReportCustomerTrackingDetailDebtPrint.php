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
			$mOE 		= new \MVC\Mapper\OrderExport();
			$mCustomer 	= new \MVC\Mapper\Customer();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Tracking 	= $mTracking->find($IdTrack);
			$PreTracking= $Tracking->getPre();
			$TCTRAll 	= $mTCTR->findBy(array($IdCT, $IdTrack));
			$Customer 	= $mCustomer->find($IdCustomer);
			$CT			= $mCT->find($IdCT);
			
			if (isset($PreTracking)){ 				
				$RateValueOld	= $PreTracking->getTCT($IdCT)->last()->getRateValue();
			}else{
				$RateValueOld 	= 0;
			}
			
			$Value		= 0;
			while ($TCTRAll->valid()){
				$TCTR = $TCTRAll->current();
				$Value += $TCTR->getRateValue();
				$TCTRAll->next();
			}
			$NRateValue 	= new \MVC\Library\Number($Value);
			$NRateValueOld 	= new \MVC\Library\Number($RateValueOld);
			$NRateValueNew 	= new \MVC\Library\Number($RateValueOld + $Value);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------														
			$request->setObject('TCTRAll'		, $TCTRAll);
			$request->setObject('CT'			, $CT);			
			$request->setObject('Tracking'		, $Tracking);
			$request->setObject('Customer'		, $Customer);
			$request->setObject('NRateValue'	, $NRateValue);
			$request->setObject('NRateValueOld'	, $NRateValueOld);
			$request->setObject('NRateValueNew'	, $NRateValueNew);
		}
	}
?>