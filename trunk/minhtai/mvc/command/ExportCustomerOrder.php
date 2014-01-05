<?php		
	namespace MVC\Command;	
	class ExportCustomerOrder extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdCustomer 	= $request->getProperty('IdCustomer');
			$IdOrder 		= $request->getProperty('IdOrder');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mOrderExport 	= new \MVC\Mapper\OrderExport();
			$mCustomer 		= new \MVC\Mapper\Customer();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$Customer 	= $mCustomer->find($IdCustomer);
			$Order 		= $mOrderExport->find($IdOrder);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$Title = $Order->getDatePrint();
			$Navigation = array(
				array("XUẤT HÀNG", "/export"),
				array(mb_strtoupper($Customer->getName(), 'UTF8'), $Customer->getURLExport())
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title', $Title);			
			$request->setObject('Navigation', $Navigation);
									
			$request->setObject('Order', $Order);
			$request->setObject('Customer', $Customer);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>