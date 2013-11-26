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
			$SumRateValue	= 0;
			//--------------------------------------------------------------
			//Những đơn hàng quá 30 ngày mà chưa thanh toán sẽ bị tính lãi			
			//Điều kiện lọc	: [DateStart - 30 - 30, DateStart - 30]
			//
			//Ví dụ			: Tháng 08/2013
			//Điệu kiện lọc	: [2/6/2013, 2/7/2013]
			$OrderRatingAll = 	$Tracking->getOrderRating($IdCT);
			
			while ($OrderRatingAll->valid()){
				$Order 	= $OrderRatingAll->current();
				$Data[] = array(
					"Date"		=> $Order->getDatePrint(),
					"Value"		=> $Order->getValuePrint(),
					"Rate"		=> "0.06",
					"nDay"		=> $Order->getDays($DateEnd),
					"RateValue"	=> $Order->getRateValuePrint($DateEnd, 0.06)
				);
				$TCTR = new \MVC\Domain\TrackingCTR(
					null,
					$IdCT,
					$IdTrack,
					$Order->getDate(),
					$Order->getValue(),
					$Order->getDays($DateEnd),
					0.06,
					$Order->getRateValue($DateEnd, 0.06)
				);
				$mTCTR->insert($TCTR);
				
				$SumRateValue += $Order->getRateValue($DateEnd, 0.06);
				$OrderRatingAll->next();
			}
			$NSumRateValue = new \MVC\Library\Number($SumRateValue);
			
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
			$request->setProperty('Data'		, $Data);
			$request->setProperty('SumRateValue', $NSumRateValue->formatCurrency());
			$request->setObject('Navigation'	, $Navigation);			
			$request->setObject('Tracking'		, $Tracking);
			$request->setObject('Customer'		, $Customer);
			$request->setObject('CT'			, $CT);
			$request->setObject('OrderRatingAll', $OrderRatingAll);
		}
	}
?>