<?php
	namespace MVC\Command;	
	class SettingSupplierResourcePrintBarcode extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$IdSupplier = $request->getProperty('IdSupplier');
			$IdResource = $request->getProperty('IdResource');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mSupplier = new \MVC\Mapper\Supplier();
			$mResource = new \MVC\Mapper\Resource();
						
			//-------------------------------------------------------------
			//XỬ LÍ CHÍNH
			//-------------------------------------------------------------			
			$Resource = $mResource->find($IdResource);
			$Supplier = $mSupplier->find($IdSupplier);
					
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setObject("Supplier", $Supplier);
			$request->setObject("Resource", $Resource);
		}
	}
?>