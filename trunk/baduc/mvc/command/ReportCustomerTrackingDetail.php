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
			$mTCT 		= new \MVC\Mapper\TrackingCT();
			$mCustomer 	= new \MVC\Mapper\Customer();
			$mPC 		= new \MVC\Mapper\PaidCustomer();
			$mCC 		= new \MVC\Mapper\CollectCustomer();
			$mCT 		= new \MVC\Mapper\CustomerTracking();
			$mOE 		= new \MVC\Mapper\OrderExport();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			
			$Tracking 		= $mTracking->find($IdTrack);
			$PreTracking 	= $Tracking->getPre();
			$Customer 		= $mCustomer->find($IdCustomer);
			$CT 			= $mCT->find($IdCT);
			
			$DataTemp	= array();
			$Data		= array();
			$Date 		= $Tracking->getDateStart();
			$EndDate 	= $Tracking->getDateEnd();
			
			//Lấy về Lãi Nợ Cũ & Nợ Cũ 
			if (!isset($PreTracking))
				$OldDebt	= 0;				
			else{
				if ($PreTracking->getTCT($IdCT)->count()==0){					
					$OldDebt	= 0;
				}else{
					$OldDebt	= $PreTracking->getTCT($IdCT)->last()->getNewDebtValue();
				}
			}			
			$SDebtValue	= $OldDebt;
			
			$SCCValue 	= 0;
			$SPCValue 	= 0;
			$SOEValue 	= 0;
			
			while (strtotime($Date) <= strtotime($EndDate)){
				//-------------------------------------------------------------
				//Tổng thanh toán trong ngày hiện tại
				//-------------------------------------------------------------
				$CCAll 		= $mCC->findByTracking(array($IdCT, $Date, $Date));
				$CCValue 	= 0;
				while ($CCAll->valid()){
					$CC = $CCAll->current();
					$CCValue += $CC->getValue();
					$CCAll->next();
				}
				$NCCValue = new \MVC\Library\Number($CCValue);
				$SCCValue+= $CCValue;
				
				//-------------------------------------------------------------
				//Tổng ứng tiền trong ngày hiện tại
				//-------------------------------------------------------------
				$PCValue 	= 0;
				$PCAll 		= $mPC->findByTracking(array($IdCT, $Date, $Date));				
				while ($PCAll->valid()){
					$PC = $PCAll->current();
					$PCValue += $PC->getValue();
					$PCAll->next();
				}
				$NPCValue = new \MVC\Library\Number($PCValue);
				$SPCValue+= $PCValue;
				
				//Tổng nhập hàng trong ngày hiện tại
				$OEValue 	= 0;
				$OEAll 		= $mOE->findByTracking(array($IdCT, $Date, $Date));				
				while ($OEAll->valid()){
					$OE 	= $OEAll->current();
					$OEValue += $OE->getValue();
					$OEAll->next();
				}
				$NOEValue = new \MVC\Library\Number($OEValue);
				$SOEValue+= $OEValue;
				
				$RateValue 	= 0;
				$NRateValue = new \MVC\Library\Number($RateValue);
				
				//Nợ tính đến thời điểm hiện tại
				$DebtValue 	= 0;
				$NDebtValue = new \MVC\Library\Number($DebtValue);
																				
				$DataTemp[] = array(
							'DatePrint'		=>\date("d/m", strtotime($Date)),
							'Date'			=>$Date,
							array(),
							'OEValue'		=>$OEValue,
							'OEValuePrint'	=>$NOEValue->formatCurrency(),
							'PCValue'		=>$PCValue,
							'PCValuePrint'	=>$NPCValue->formatCurrency(),
							'CCValue'		=>$CCValue,
							'CCValuePrint'	=>$NCCValue->formatCurrency(),
							'RateValue'		=>$RateValue,
							'RateValuePrint'=>$NRateValue->formatCurrency(),
							'DebtValue'		=>$DebtValue,
							'DebtValuePrint'=>$NDebtValue->formatCurrency(),
							0,
							0
				);
				$Date = \date("Y-m-d", strtotime("+1 day", strtotime($Date)));
			}
			
			//Lưu lại CSDL
			$mTCT->deleteByTracking( array($IdCT, $Tracking->getId()) );
			foreach ($DataTemp as &$Value){					
				if ($Value['CCValue'] + $Value['PCValue'] + $Value['OEValue'] > 0){
					$Data[] = $Value;
					$TCT = new \MVC\Domain\TrackingCT(
						null,
						$IdCT,
						$IdTrack,
						$Value['Date'],
						$Value['OEValue'],
						$Value['PCValue'],
						$Value['CCValue'],
						$Value['RateValue'],
						$Value['DebtValue']
					);
					$mTCT->insert($TCT);
				}
			}
			
			//Chèn vào dòng tổng cuối báo cáo
			$TCT = new \MVC\Domain\TrackingCT(
				null,
				$IdCT,
				$IdTrack,
				$EndDate,
				$SOEValue,
				$SPCValue,
				$SCCValue,
				$RateValue,
				$OldDebt
			);
			$mTCT->insert($TCT);					
									
			$Title = $CT->getNote();
			$Navigation = array(
				array("BÁO CÁO", "/report"),
				array($Tracking->getName(), $Tracking->getURLView() ),
				array("GIAO DỊCH CỦA ".$Customer->getName(), $Tracking->getURLCustomerTracking($IdCustomer) )
			);
			$NOldDebt = new \MVC\Library\Number($OldDebt);
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title'		, $Title);
			$request->setProperty('Data'		, $Data);
			$request->setProperty('OldDebt'		, $NOldDebt->formatCurrency());
			$request->setObject('Navigation'	, $Navigation);
			$request->setObject('Tracking'		, $Tracking);
			$request->setObject('Customer'		, $Customer);
			$request->setObject('CT'			, $CT);
		}
	}
?>