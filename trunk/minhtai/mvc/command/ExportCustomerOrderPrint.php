<?php		
	namespace MVC\Command;	
	class ExportCustomerOrderPrint extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$IdCustomer 	= $request->getProperty("IdCustomer");
			$IdOrder 		= $request->getProperty("IdOrder");
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------						
			$mOE 		= new \MVC\Mapper\OrderExport();
			$mCustomer 	= new \MVC\Mapper\Customer();
			$mCL 		= new \MVC\Mapper\CustomerLog();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$OE = $mOE->find($IdOrder);
			$Customer = $mCustomer->find($IdCustomer);
			
			$IdCL 	= $mCL->exist(array($IdCustomer, $IdOrder));
			$CL 	= $mCL->find($IdCL);
						
			$DateCurrent = "Vĩnh Long, ngày ".\date("d")." tháng ".\date("m")." năm ".\date("Y");

			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('DateCurrent', $DateCurrent);
			$request->setObject('OE', $OE);
			$request->setObject('CL', $CL);
			$request->setObject('Customer', $Customer );
		}
	}
?>