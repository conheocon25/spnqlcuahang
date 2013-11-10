<?php		
	namespace MVC\Command;	
	class ExportBigCustomerTracking extends Command {
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
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mDomain 			= new \MVC\Mapper\Domain();
			$mCustomer 			= new \MVC\Mapper\Customer();
			$mCustomerTracking 	= new \MVC\Mapper\CustomerTracking();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------												
			$Domain 	= $mDomain->find($IdDomain);
			$Customer 	= $mCustomer->find($IdCustomer);
			$Tracking 	= $mCustomerTracking->find($IdTracking);
			
			$Title = "PHIẾU HÀNG";			
			$Navigation = array(
				array("XUẤT HÀNG"							, "/export"),
				array("BÁN SỈ ".$Domain->getName()			, $Domain->getURLBigExport() ),
				array("GIAO DỊCH CỦA ".$Customer->getName()	, $Customer->getURLTracking($IdDomain) )
			);
					
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title'		, $Title);			
			$request->setObject('Navigation'	, $Navigation);
			$request->setObject('Domain'		, $Domain);
			$request->setObject('Customer'		, $Customer);
			$request->setObject('Tracking'		, $Tracking);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>