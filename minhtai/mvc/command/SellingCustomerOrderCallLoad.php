<?php
	namespace MVC\Command;
	class SellingCustomerOrderCallLoad extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdCustomer = $request->getProperty("IdCustomer");
			$IdOrder = $request->getProperty("IdOrderExport");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mSupplier = new \MVC\Mapper\Supplier();
			$mCustomer = new \MVC\Mapper\Customer();
			$mOrder = new \MVC\Mapper\OrderExport();
			
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Suppliers = $mSupplier->findAll();
			$Suppliers1 = $mSupplier->findAll();
			$Customer = $mCustomer->find($IdCustomer);
			$Order = $mOrder->find($IdOrder);
		
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------												
			$request->setObject("Suppliers", $Suppliers);
			$request->setObject("Suppliers1", $Suppliers1);
			$request->setObject("Customer", $Customer);
			$request->setObject('Order', $Order);
		}
	}
?>
