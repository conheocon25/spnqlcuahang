<?php		
	namespace MVC\Command;	
	class ExportBigCustomerTrackingOrderPrint extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdDomain 		= $request->getProperty('IdDomain');
			$IdCustomer 	= $request->getProperty('IdCustomer');
			$IdTracking 	= $request->getProperty('IdTracking');
			$IdOrder 		= $request->getProperty('IdOrder');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mDomain 			= new \MVC\Mapper\Domain();
			$mCustomer 			= new \MVC\Mapper\Customer();
			$mCustomerTracking 	= new \MVC\Mapper\CustomerTracking();
			$mOrderExport 		= new \MVC\Mapper\OrderExport();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------												
			$Domain 	= $mDomain->find($IdDomain);
			$Customer 	= $mCustomer->find($IdCustomer);
			$Tracking 	= $mCustomerTracking->find($IdTracking);
			$Order 		= $mOrderExport->find($IdOrder);
											
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setObject('Domain'		, $Domain	);
			$request->setObject('Customer'		, $Customer	);
			$request->setObject('Tracking'		, $Tracking	);
			$request->setObject('Order'			, $Order	);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>