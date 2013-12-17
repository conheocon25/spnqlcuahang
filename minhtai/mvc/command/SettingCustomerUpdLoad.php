<?php
	namespace MVC\Command;	
	class SettingCustomerUpdLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdCustomer = $request->getProperty('IdCustomer');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mCustomer = new \MVC\Mapper\Customer();
								
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------							
			$Customer = $mCustomer->find($IdCustomer);			
			$Title = "CẬP NHẬT KHÁCH HÀNG";
			$Types	=  array();
			$Types[0] =  array ("Id" =>1, "Name" => "Thuốc");
			$Types[1] =  array ("Id" =>2, "Name" => "Thức Ăn");
			
			
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setObject('Customer', $Customer);
			$request->setProperty('Title', $Title);
			$request->setObject('Types', $Types);			
		}
	}
?>
