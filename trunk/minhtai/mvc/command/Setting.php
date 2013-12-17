<?php		
	namespace MVC\Command;	
	class Setting extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
									
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mSupplier = new \MVC\Mapper\Supplier();
			$mCustomer = new \MVC\Mapper\Customer();
			$mStore = new \MVC\Mapper\Store();
			$mEmployee = new \MVC\Mapper\Employee();
			$mCategory = new \MVC\Mapper\Category();
			$mUnit = new \MVC\Mapper\Unit();
			$mTerm = new \MVC\Mapper\Term();
					
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Title = "MODULE THIẾT LẬP";
			$Suppliers = $mSupplier->findAll();
			$Customers = $mCustomer->findAll();
			$Stores = $mStore->findAll();
			$Employees = $mEmployee->findAll();
			$Categories = $mCategory->findAll();
			$Units = $mUnit->findAll();
			$Terms = $mTerm->findAll();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title', $Title);
			$request->setObject('Suppliers', $Suppliers);
			$request->setObject('Customers', $Customers);
			$request->setObject('Stores', $Stores);
			$request->setObject('Employees', $Employees);
			$request->setObject('Categories', $Categories);
			$request->setObject('Units', $Units);
			$request->setObject('Terms', $Terms);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>