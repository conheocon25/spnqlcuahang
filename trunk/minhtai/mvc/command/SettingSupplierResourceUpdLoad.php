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
			$IdResource = $request->getProperty("IdResource");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mResource = new \MVC\Mapper\Resource();
			$mUnit = new \MVC\Mapper\Unit();
			$mCategory = new \MVC\Mapper\Category();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Units = $mUnit->findAll();
			$Categories = $mCategory->findAll();
			$Resource = $mResource->find($IdResource);
			$Title = "CẬP NHẬT MÓN";
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject("Units", $Units);
			$request->setObject("Categories", $Categories);
			$request->setObject("Resource", $Resource);
			$request->setProperty("Title", $Title);
			
		}
	}
?>