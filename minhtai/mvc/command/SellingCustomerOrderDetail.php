<?php		
	namespace MVC\Command;	
	class SellingCustomerOrderDetail extends Command{
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
			$IdOrderExport = $request->getProperty("IdOrderExport");
			$PageCurrent = $request->getProperty('Page');
						
			if (!isset($PageCurrent)) $PageCurrent = 1;			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			
			$mCustomer = new \MVC\Mapper\Customer();
			$mOrderExport = new \MVC\Mapper\OrderExport();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$OrderExport = $mOrderExport->find($IdOrderExport);
			
			
			$Customer = $mCustomer->find($IdCustomer);
		
			$OEs1 =  $mOrderExport->findByPage(array($IdCustomer, $PageCurrent, 15));
			
			if (!isset($OrderExport)) $OrderExport= $OEs1->current();	
			
			$PN = new \MVC\Domain\PageNavigation($Customer->getOrders()->count(), 15, $Customer->getURLSellingPage());
			
			$Session->setCurrentPage($PageCurrent);
			
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setObject('Customer', $Customer);
			$request->setObject('OrderExport', $OrderExport);
			$request->setObject('OEs1', $OEs1);	
			$request->setObject("CurrentPage", $PageCurrent);			
			$request->setObject("Pages", $PN);			
			
		}
	}
?>