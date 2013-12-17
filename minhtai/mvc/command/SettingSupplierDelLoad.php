<?php
	namespace MVC\Command;	
	class SettingSupplierDelLoad  extends Command {
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
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mSupplier = new \MVC\Mapper\Supplier();
					
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Supplier = $mSupplier->find($IdSupplier);
						
			$Title = "XÓA ".$Supplier->getName();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setObject('Supplier', $Supplier);
			$request->setProperty('Title', $Title);
		}
	}
?>
