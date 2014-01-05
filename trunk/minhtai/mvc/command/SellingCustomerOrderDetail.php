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
			$mCustomer 		= new \MVC\Mapper\Customer();
			$mCL 			= new \MVC\Mapper\CustomerLog();
			$mOrderExport 	= new \MVC\Mapper\OrderExport();
			$mPaid 			= new \MVC\Mapper\PaidCustomer();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$OrderExport 	= 	$mOrderExport->find($IdOrderExport);						
			$Customer 		= 	$mCustomer->find($IdCustomer);		
			$OEs1 			=  	$mOrderExport->findByPage(array($IdCustomer, $PageCurrent, 15));
			
			if (!isset($OrderExport)){ 
				$OrderExport= $OEs1->current();
				$IdOrderExport = $OrderExport->getId();
			}
			$PN = new \MVC\Domain\PageNavigation($Customer->getOrders()->count(), 15, $Customer->getURLSellingPage());			
			$Session->setCurrentPage($PageCurrent);
						
			//Tiền trả trong kì
			//$PaidAll = $mPaid->findByTracking1( array($IdCustomer, $OrderExport->getDate(), $OrderExport->getDate()) );
			//$SPaid = 0;
			//while ($PaidAll->valid()){
			//	$Paid = $PaidAll->current();
			//	$SPaid += $Paid->getValue();
			//	$PaidAll->next();
			//}
			
			//Chèn CustomerLog theo dõi nhật ký khách hàng				
			//$CL = new \MVC\Domain\CustomerLog(
			//	null,
			//	$IdOrderExport,
			//	$IdCustomer,
			//	$SPaid
			//);
			//$mCL->insert($CL);
			
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