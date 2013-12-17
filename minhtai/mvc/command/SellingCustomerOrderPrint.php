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
			$IdFillter = $request->getProperty("IdFillter");
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
			$Tittle = "";
			if ($IdFillter == 1) {
					$Tittle = "HÓA ĐƠN THUỐC";
			}else { $Tittle = "HÓA ĐƠN THỨC ĂN";}
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setObject('Tittle', $Tittle);
			$request->setObject('Customer', $Customer);
			$request->setObject('OE', $OE);
		}
	}
?>