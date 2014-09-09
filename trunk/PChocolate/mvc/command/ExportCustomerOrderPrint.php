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
			$IdCustomer = $request->getProperty("IdCustomer");
			$IdOrder = $request->getProperty("IdOrder");
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------						
			$mOrder 	= new \MVC\Mapper\OrderExport();
			$mCustomer 	= new \MVC\Mapper\Customer();
			$mConfig 	= new \MVC\Mapper\Config();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Order 			= $mOrder->find($IdOrder);
			$Customer 		= $mCustomer->find($IdCustomer);
			$DateCurrent 	= "Vĩnh Long, ngày ".\date("d")." tháng ".\date("m")." năm ".\date("Y");
			
			$ConfigName		= $mConfig->findByName("NAME");
			$ConfigAddress	= $mConfig->findByName("ADDRESS");
			$ConfigPhone	= $mConfig->findByName("PHONE");

			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('DateCurrent'	, $DateCurrent);
			$request->setObject('Order'			, $Order);
			$request->setObject('Customer'		, $Customer );
			$request->setObject('ConfigName'	, $ConfigName );
			$request->setObject('ConfigAddress'	, $ConfigAddress );
			$request->setObject('ConfigPhone'	, $ConfigPhone );
		}
	}
?>