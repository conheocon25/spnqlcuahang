<?php
	namespace MVC\Command;	
	class SettingStoreInit extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdStore = $request->getProperty('IdStore');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mStore = new \MVC\Mapper\Store();
			$mSupplier = new \MVC\Mapper\Supplier();
								
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------							
			$Store = $mStore->find($IdStore);
			$Suppliers = $mSupplier->findAll();
			$Suppliers1 = $mSupplier->findAll();
			$Title = "KHỞI TẠO KHO";
			$Session->setCurrentStore($IdStore);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setObject('Store', $Store);
			$request->setObject('Suppliers', $Suppliers);
			$request->setObject('Suppliers1', $Suppliers1);
			$request->setProperty('Title', $Title);
		}
	}
?>
