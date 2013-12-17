<?php
	namespace MVC\Command;
	class Selling extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdFillter = $request->getProperty('IdFillter');							
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mCustomer = new \MVC\Mapper\Customer();			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Customers = $mCustomer->findAll();			
			$CustomerTypes = $mCustomer->findByType(array($IdFillter));			
			//print_r($Customers);
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setObject("Customers", $Customers);
			$request->setObject("Customers1", $CustomerTypes);		
			
		}
	}
?>
