<?php
	namespace MVC\Command;	
	class Import extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
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
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$SupplierAll = $mSupplier->findAll();
								
			$Title = "NHẬP HÀNG";
			$Navigation = array(
				array("ỨNG DỤNG", "/app")				
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setObject("SupplierAll", $SupplierAll);
						
			$request->setObject("Navigation", $Navigation);			
			$request->setProperty('Title', $Title );
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>