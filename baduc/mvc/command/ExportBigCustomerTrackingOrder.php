<?php		
	namespace MVC\Command;	
	class ExportBigCustomerTrackingOrder extends Command {
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
			
			$Title 		= $Order->getDatePrint();
			$Navigation = array(
				array("XUẤT HÀNG"							, "/export"),
				array("BÁN SỈ ".$Domain->getName()			, $Domain->getURLBigExport() ),
				array("GIAO DỊCH CỦA ".$Customer->getName()	, $Customer->getURLTracking($IdDomain) ),
				array(mb_strtoupper($Tracking->getNote(), 'UTF8'), $Tracking->getURLOrder())
			);
					
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title'		, $Title);
			$request->setObject('Navigation'	, $Navigation);
			$request->setObject('Domain'		, $Domain);
			$request->setObject('Customer'		, $Customer);
			$request->setObject('Tracking'		, $Tracking);
			$request->setObject('Order'			, $Order);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>