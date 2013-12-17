<?php		
	namespace MVC\Command;	
	class Paid extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mCustomer = new \MVC\Mapper\Customer();
			$mEmployee = new \MVC\Mapper\Employee();
			$mSupplier = new \MVC\Mapper\Supplier();
			$mTerm = new \MVC\Mapper\Term();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Customers = $mCustomer->findAll();
			$Employees = $mEmployee->findAll();
			$Suppliers = $mSupplier->findAll();
			$Terms = $mTerm->findAll();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setObject('Customers', $Customers);
			$request->setObject('Employees', $Employees);
			$request->setObject('Suppliers', $Suppliers);
			$request->setObject('Terms', $Terms);
		}
	}
?>