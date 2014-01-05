<?php		
	namespace MVC\Command;	
	class ReportSellingDetail extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$TypeReport = $request->getProperty('TypeReport');			
			$DateStart = $request->getProperty("DateStart_Selling");
			$DateEnd = $request->getProperty("DateEnd_Selling");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mCustomer = new \MVC\Mapper\Customer();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($DateStart)||$DateStart==null){
				$DateStart = $Session->getReportSellingDateStart();
				$DateEnd = $Session->getReportSellingDateEnd();
			}
			
			$Date = new \MVC\Library\Date();			
			$arrType = array(
				"today" => $Date->rangeToday(),
				"yesterday" => $Date->rangeYesterday(),
				"thisweek" => $Date->rangeThisWeek(),
				"thismonth" => $Date->rangeThisMonth(),
				"beforemonth" => $Date->rangeBeforeMonth(),
				"custom" => array($DateStart, $DateEnd)
			);			
			$Session->setReportSellingDateStart($arrType[$TypeReport][0]);
			$Session->setReportSellingDateEnd($arrType[$TypeReport][1]);
			
			$Customers = $mCustomer->findAll();
			$Customers1 = $mCustomer->findAll();

			$Sum = 0;
			while($Customers->valid()){
				$Sum += $Customers->current()->getNewDebt();				
				$Customers->next();
			}
			$NSum = new \MVC\Library\Number($Sum);
						
			$TM = $Date->rangeThisMonth();
			$LM = $Date->rangeBeforeMonth();
			$arrType = array(
				"today" => "HÔM NAY ",
				"yesterday" => "HÔM QUA",
				"thisweek" => "TUẦN NÀY",
				"thismonth" => "THÁNG ".date('m/Y', strtotime($TM[0])),
				"beforemonth" => "THÁNG ".date('m/Y', strtotime($LM[0])),
				"custom" => date('d/m/Y', strtotime($DateStart))." ĐẾN ".date('d/m/Y', strtotime($DateEnd))
			);
			$Title = "CHI TIẾT BÁN HÀNG ".$arrType[$TypeReport];
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------				
			$request->setProperty('Title', $Title);
			$request->setProperty("Sum", $NSum->formatCurrency()." đ" );
			$request->setProperty("SumStr", $NSum->readDigit()." đồng");
									
			$request->setObject('Customers', $Customers);
			$request->setObject('Customers1', $Customers1);
		}
	}
?>