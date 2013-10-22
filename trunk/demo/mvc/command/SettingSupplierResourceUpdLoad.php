<?php
	namespace MVC\Command;	
	class SettingSupplierResourceUpdLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdSupplier = $request->getProperty("IdSupplier");
			$IdResource = $request->getProperty("IdResource");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mResource = new \MVC\Mapper\Resource();
			$mSupplier = new \MVC\Mapper\Supplier();
			$mUnit = new \MVC\Mapper\Unit();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$UnitAll = $mUnit->findAll();			
			$Resource = $mResource->find($IdResource);
			$Supplier = $mSupplier->find($IdSupplier);
			$SupplierAll = $mSupplier->findAll();
						
			$Title = mb_strtoupper($Resource->getName(), 'UTF8');
			$Navigation = array(
				array("ỨNG DỤNG", "/app"),
				array("THIẾT LẬP", "/setting"),
				array("NHÀ CUNG CẤP", "/setting/supplier"),
				array(mb_strtoupper($Supplier->getName(), 'UTF8'), $Supplier->getURLResource())
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject("UnitAll", $UnitAll);
			$request->setObject("Supplier", $Supplier);
			$request->setObject("SupplierAll", $SupplierAll);
			$request->setObject("Resource", $Resource);			
			$request->setObject("Navigation", $Navigation);
			$request->setProperty("Title", $Title);
			
		}
	}
?>