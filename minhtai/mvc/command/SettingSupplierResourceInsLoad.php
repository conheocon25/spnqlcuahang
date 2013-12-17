<?php	
	namespace MVC\Command;
	class SettingSupplierResourceInsLoad extends Command{
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
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mUnit = new \MVC\Mapper\Unit();
			$mCategory = new \MVC\Mapper\Category();
			$mSupplier = new \MVC\Mapper\Supplier();
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------	
			$Categories = $mCategory->findAll();
			$Units = $mUnit->findAll();
			$Supplier = $mSupplier->find($IdSupplier);
			$Title = "THÊM NGUYÊN LIỆU";
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject("Categories", $Categories);
			$request->setObject("Units", $Units);
			$request->setObject("Supplier", $Supplier);
			$request->setProperty("Title", $Title);
			
		}
	}
?>