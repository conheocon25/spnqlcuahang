<?php		
	namespace MVC\Command;	
	class ReportEmployeeDetail extends Command {
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
			$DateStart = $request->getProperty("DateStart_Employee");
			$DateEnd = $request->getProperty("DateEnd_Employee");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mEmployee = new \MVC\Mapper\Employee();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($DateStart)||$DateStart==null){
				$DateStart = $Session->getReportEmployeeDateStart();
				$DateEnd = $Session->getReportEmployeeDateEnd();
			}
							
			$Date = new \MVC\Library\Date();			
			$arrType = array(
				"thismonth" => $Date->rangeThisMonth(),
				"beforemonth" => $Date->rangeBeforeMonth(),
				"custom" => array($DateStart, $DateEnd)
			);
			$Session->setReportEmployeeDateStart($arrType[$TypeReport][0]);
			$Session->setReportEmployeeDateEnd($arrType[$TypeReport][1]);
			
			$TM = $Date->rangeThisMonth();
			$LM = $Date->rangeBeforeMonth();
			$arrType = array(
				"thismonth" => "THÁNG ".date('m/Y', strtotime($TM[0])),
				"beforemonth" => "THÁNG ".date('m/Y', strtotime($LM[0])),
				"custom" => date('d/m/Y', strtotime($DateStart))." ĐẾN ".date('d/m/Y', strtotime($DateEnd))
			);
			$Employees = $mEmployee->findAll();
			$Sum = 0;
			while ($Employees->valid()){
				$Sum += $Employees->current()->getPaidsTrackingValue();
				$Employees->next();
			}
			$NSum = new \MVC\Library\Number($Sum);
			$Title = "CHI TIẾT NHÂN VIÊN ".$arrType[$TypeReport];
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('Title', $Title);
			$request->setProperty('Sum', $NSum->formatCurrency()." đ");
			$request->setProperty('SumStr', $NSum->readDigit()." đồng");
			$request->setObject('Employees', $Employees);
		}
	}
?>