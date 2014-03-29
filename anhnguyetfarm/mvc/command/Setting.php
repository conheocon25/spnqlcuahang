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
			$mPond = new \MVC\Mapper\Pond();
			$mStore = new \MVC\Mapper\Store();			
			$mCategory = new \MVC\Mapper\Category();
			$mUnit = new \MVC\Mapper\Unit();
								
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Title = "MODULE THIẾT LẬP";
			
			$Suppliers = $mSupplier->findAll();
			$Ponds = $mPond->findAll();
			$Stores = $mStore->findAll();			
			$Categories = $mCategory->findAll();
			$Units = $mUnit->findAll();			
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title', $Title);
			$request->setObject('Suppliers', $Suppliers);
			$request->setObject('Ponds', $Ponds);
			$request->setObject('Stores', $Stores);
			$request->setObject('Categories', $Categories);
			$request->setObject('Units', $Units);
						
			return self::statuses('CMD_DEFAULT');
		}
	}
?>