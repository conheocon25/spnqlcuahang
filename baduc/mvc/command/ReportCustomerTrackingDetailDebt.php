<?php		
	namespace MVC\Command;	
	class ReportCustomerTrackingDetailDebt extends Command{
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
			$Tracking 		= $mTracking->find($IdTrack);
			$PreTracking 	= $Tracking->getPre();			
			$CT 			= $mCT->find($IdCT);
			$mTCTR->deleteByTracking(array($IdCT, $IdTrack));
			$Customer 		= $mCustomer->find($IdCustomer);
			
			$DateStart		= $Tracking->getDateStart();
			$DateEnd 		= $Tracking->getDateEnd();
			$Data 			= array();
									
			if (isset($PreTracking)){ 
												
				//--------------------------------------------------------------
				//[ĐƠN HÀNG ĐẾN HẠN TÍNH LÃI] ==> tính SUM
				$OrderRatingAll = 	$Tracking->getOrderRating($IdCT);
				$OV1 = 0;
				while ( $OrderRatingAll->valid() ){
					$Order = $OrderRatingAll->current();
					$OV1 += $Order->getValue();
					$OrderRatingAll->next();
				}
				
				//--------------------------------------------------------------
				//[TIỀN LÃI NỢ TRẢ CHẬM] 	==> lấy về tháng trước
				$SumRateValue	= $PreTracking->getTCT($IdCT)->last()->getRateValue();
								
				//--------------------------------------------------------------
				//Lấy về 		[TIỀN NỢ QUÁ HẠN] Tháng trước 16.244.000
				//Trừ ra phần 	[TIỀN HẠN ĐẾN HẠN TÍNH LÃI]
				$OldDebt		= $PreTracking->getTCT($IdCT)->last()->getNewDebtValue() - $OV1;
				//$OldDebt		= $OV1;
				
				//--------------------------------------------------------------
				//Lãi suất theo ngày ==> THAM SỐ HÓA Profie của khách hàng
				$Rate			= $Tracking->getCustomerRate();
								
				//--------------------------------------------------------------
				if ($OldDebt>0){
					$Date 		= $PreTracking->getTCT($IdCT)->last()->getDate();
					$DateLimit 	= $PreTracking->getTCT($IdCT)->last()->getDate();
										
					$TCTR = new \MVC\Domain\TrackingCTR(
						null,
						$IdCT,
						$IdTrack,
						$Date,
						$Date,
						$OldDebt,
						$Tracking->getNDay(),
						$Rate,
						($OldDebt*$Rate*$Tracking->getNDay())/100
					);
					$mTCTR->insert($TCTR);
					$SumRateValue +=  ($OldDebt*$Rate*$Tracking->getNDay())/100;
				}
												
				//--------------------------------------------------------------
				//[ĐƠN HÀNG ĐẾN HẠN TÍNH LÃI] 	==>		phát sinh chi tiết lãi
				$OrderRatingAll->rewind();
				while ($OrderRatingAll->valid()){
					$Order 		= $OrderRatingAll->current();					
					$Date 		= $Order->getDate();									
					$DateLimit 	= \date("Y-m-d", strtotime($Date) + (24*3600*30));
					$Value		= $Order->getValue();					
					$nDay		= round((strtotime($DateEnd) - strtotime($DateLimit))/(24*3600),0);
					$RateValue	= ($Value*$Rate)/100;
										
					$TCTR = new \MVC\Domain\TrackingCTR(
						null,
						$IdCT,
						$IdTrack,
						$Date,
						$DateLimit,
						$Value,
						$nDay,
						$Rate,
						$RateValue
					);
					$mTCTR->insert($TCTR);
					
					$SumRateValue += $TCTR->getRateValue();
					$OrderRatingAll->next();
				}
			}else{
				$SumRateValue = 0;
			}
			$NSumRateValue = new \MVC\Library\Number($SumRateValue);
			
			//--------------------------------------------------------------
			//Cập nhật số nợ mới này vào DB
			$TCT = $Tracking->getTCT($IdCT)->last();
			$TCT->setRateValue($SumRateValue);
			$mTCT->update($TCT);
			
			$TCTRAll = $mTCTR->findBy(array($IdCT, $IdTrack));
		
			$Title = "CHI TIẾT TÍNH LÃI ".$CT->getNote();
			$Navigation = array(
				array("BÁO CÁO", "/report"),
				array($Tracking->getName(), $Tracking->getURLView() ),
				array("GIAO DỊCH CỦA ".$Customer->getName(), $Tracking->getURLCustomerTracking($IdCustomer) )
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title'		, $Title);			
			$request->setProperty('SumRateValue', $NSumRateValue->formatCurrency());
			$request->setObject('Navigation'	, $Navigation);			
			$request->setObject('Tracking'		, $Tracking);
			$request->setObject('Customer'		, $Customer);
			$request->setObject('TCTRAll'		, $TCTRAll);
			$request->setObject('CT'			, $CT);
			$request->setObject('OrderRatingAll', $OrderRatingAll);
		}
	}
?>