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
			$mSupplier = new \MVC\Mapper\Supplier();
			$mPond = new \MVC\Mapper\Pond();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Ponds = $mPond->findAll();
			$Suppliers = $mSupplier->findAll();
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setObject('Ponds', $Ponds);
			$request->setObject('Suppliers', $Suppliers);
			
		}
	}
?>