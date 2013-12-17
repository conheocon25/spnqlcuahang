<?php		
	namespace MVC\Command;	
	class SellingCustomerOrder extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$IdFillter = $request->getProperty("IdFillter");
			$IdCustomer = $request->getProperty("IdCustomer");
			$PageCurrent = $request->getProperty('Page');
			
			if (!isset($PageCurrent)) $PageCurrent = 1;
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			
			$mCustomer = new \MVC\Mapper\Customer();
			$mOE = new \MVC\Mapper\OrderExport();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$Customer = $mCustomer->find($IdCustomer);
			$OEs = $mOE->findByPage(array($IdCustomer, $PageCurrent, 15));	
		
			$PN = new \MVC\Domain\PageNavigation($Customer->getOrders()->count(), 15, $Customer->getURLSellingPage());
			
			$Session->setCurrentPage($PageCurrent);
			
			
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setObject('Customer', $Customer);
			$request->setObject('OEs', $OEs);
			$request->setObject('Page', $PageCurrent);	
			$request->setObject("Pages", $PN);			
			
		}
	}
?>