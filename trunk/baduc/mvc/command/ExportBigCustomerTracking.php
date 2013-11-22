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
			$Page 			= $request->getProperty('Page');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mConfig 			= new \MVC\Mapper\Config();
			$mDomain 			= new \MVC\Mapper\Domain();
			$mCustomer 			= new \MVC\Mapper\Customer();
			$mCustomerTracking 	= new \MVC\Mapper\CustomerTracking();
			$mOrder 			= new \MVC\Mapper\OrderExport();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------												
			$Domain 	= $mDomain->find($IdDomain);
			$Customer 	= $mCustomer->find($IdCustomer);
			$Tracking 	= $mCustomerTracking->find($IdTracking);
			
			if (!isset($Page)) $Page=1;
			$Config 	= $mConfig->findByName("ROW_PER_PAGE");
			$OrderAll 	= $mOrder->findByPage(array($IdTracking, $Page, $Config->getValue() ));
			$PN 		= new \MVC\Domain\PageNavigation($Tracking->getOrderAll()->count(), $Config->getValue(), $Tracking->getURLOrder());
			
			$Title = mb_strtoupper($Tracking->getNote(), 'UTF8');
			$Navigation = array(
				array("XUẤT HÀNG"							, "/export"),
				array("BÁN SỈ ".$Domain->getName()			, $Domain->getURLBigExport() ),
				array("GIAO DỊCH CỦA ".$Customer->getName()	, $Customer->getURLTracking($IdDomain) )
			);
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title'		, $Title);
			$request->setProperty('Page'		, $Page);
			$request->setProperty('IdUser'		, $Session->getCurrentIdUser());
			$request->setObject('Navigation'	, $Navigation);
			$request->setObject('PN'			, $PN);
			$request->setObject('Domain'		, $Domain);
			$request->setObject('Customer'		, $Customer);
			$request->setObject('Tracking'		, $Tracking);
			$request->setObject('OrderAll'		, $OrderAll);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>