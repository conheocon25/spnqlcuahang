<?php		
	namespace MVC\Command;	
	class ReportSupplierDetail extends Command {
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
			$DateStart = $request->getProperty("DateStart_Supplier");
			$DateEnd = $request->getProperty("DateEnd_Supplier");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			
			$mSupplier = new \MVC\Mapper\Supplier();
			$mOrder = new \MVC\Mapper\OrderImport();
			$mSPaid = new \MVC\Mapper\PaidSupplier();
			
			//-------------------------------------------------------------
			//XỬ LÍ CHÍNH
			//-------------------------------------------------------------
			if (!isset($DateStart)||$DateStart==null){
				$DateStart = $Session->getReportSupplierDateStart();
				$DateEnd = $Session->getReportSupplierDateEnd();
			}
			$Suppliers = $mSupplier->findAll();
			$Supplier1s = $mSupplier->findAll();
			
			$Date = new \MVC\Library\Date();
			$arrType = array(				
				"thismonth" => $Date->rangeThisMonth(),
				"beforemonth" => $Date->rangeBeforeMonth(),
				"custom" => array($DateStart, $DateEnd)
			);
			
			$Session->setReportSupplierDateStart($arrType[$TypeReport][0]);
			$Session->setReportSupplierDateEnd($arrType[$TypeReport][1]);
			
			//Hiển thị tiêu đề
			$TM = $Date->rangeThisMonth();
			$BM = $Date->rangeBeforeMonth();			
			$arrType = array(				
				"thismonth" => "THÁNG ".date('m/Y', strtotime($TM[0])),
				"beforemonth" => "THÁNG ".date('m/Y', strtotime($BM[0])),
				"custom" => date('d/m/Y', strtotime($DateStart))." ĐẾN ".date('d/m/Y', strtotime($DateEnd))
			);
			
			$Sum = 0;			
			while ($Suppliers->valid()){
				$Sum += $Suppliers->current()->getNewDebt();
				$Suppliers->next();
			}
			$NSum = new \MVC\Library\Number($Sum);
			$Suppliers->rewind();			
			
			$Title = "CHI TIẾT HÀNG NHẬP: ".$arrType[$TypeReport];
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty("Title", $Title);
			$request->setProperty("SNewDebt", $NSum->formatCurrency());
			$request->setObject("Suppliers", $Suppliers);
			$request->setObject("Supplier1s", $Supplier1s);
						
		}
	}
?>