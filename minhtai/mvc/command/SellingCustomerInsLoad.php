<?php
	namespace MVC\Command;	
	class SellingCustomerInsLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdCustomer = $request->getProperty('IdCustomer');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mStore = new \MVC\Mapper\Store();
			$mCustomer = new \MVC\Mapper\Customer();
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Stores = $mStore->findAll();
			$Customer = $mCustomer->find($IdCustomer);
			$Title = "NHẬP HÀNG ".mb_strtoupper($Customer->getName(), 'UTF8');						
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setProperty('Title', $Title);
			$request->setObject('Customer', $Customer);
			$request->setObject('Stores', $Stores);
						
			return self::statuses('CMD_DEFAULT');
		}
	}
?>