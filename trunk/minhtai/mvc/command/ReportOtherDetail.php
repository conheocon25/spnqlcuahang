<?php		
	namespace MVC\Command;	
	class ReportOtherDetail extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
														
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$TypeReport = $request->getProperty('TypeReport');			
			$DateStart = $request->getProperty("DateStart_Other");
			$DateEnd = $request->getProperty("DateEnd_Other");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			
			$mPaid = new \MVC\Mapper\PaidOther();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Date = new \MVC\Library\Date();			
			$arrType = array(
				"thismonth" => $Date->rangeThisMonth(),
				"beforemonth" => $Date->rangeBeforeMonth(),
				"custom" => array($DateStart, $DateEnd)
			);
			
			$Paids = $mPaid->findByTracking($arrType[$TypeReport]);
			$Sum = 0;
			while($Paids->valid()){
				$Sum += $Paids->current()->getValue();
				$Paids->next();
			}
			$NSum = new \MVC\Library\Number($Sum);
						
			$TM = $Date->rangeThisMonth();
			$LM = $Date->rangeBeforeMonth();
			$arrType = array(
				"thismonth" => "THÁNG ".date('m/Y', strtotime($TM[0])),
				"beforemonth" => "THÁNG ".date('m/Y', strtotime($LM[0])),
				"custom" => date('d/m/Y', strtotime($DateStart))." ĐẾN ".date('d/m/Y', strtotime($DateEnd))
			);
						
			$Title = "CHI TIẾT CHI KHÁC ".$arrType[$TypeReport];
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty("Sum", $NSum->formatCurrency()." đ" );
			$request->setObject( "Paids", $Paids );
			
			$request->setProperty('Title', $Title);
		}
	}
?>