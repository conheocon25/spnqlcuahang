<?php		
	namespace MVC\Command;	
	class SellingCustomerOrderPrint extends Command{
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
			$IdOrder = $request->getProperty("IdOrderExport");
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mCustomer = new \MVC\Mapper\Customer();
			$mOE = new \MVC\Mapper\OrderExport();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$Customer = $mCustomer->find($IdCustomer);
									
			$OE = $mOE->find($IdOrder);
			
			$Session->setOrderExportDate( $OE->getDate() );
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setObject('Customer', $Customer);
			$request->setObject('OE', $OE);
		}
	}
?>