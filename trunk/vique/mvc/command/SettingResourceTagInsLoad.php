<?php
	namespace MVC\Command;	
	class SettingResourceTagInsLoad extends Command {
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
			$mTag = new \MVC\Mapper\Tag();
						
			//-------------------------------------------------------------
			//XỬ LÍ CHÍNH
			//-------------------------------------------------------------						
			$Supplier = $mSupplier->find($IdSupplier);
			$Resource = $mResource->find($IdResource);
			$TagAll = $mTag->findAll();
									
			$Title = "THÊM MỚI";
			$Navigation = array(
				array("ỨNG DỤNG", "/app"),
				array("THIẾT LẬP", "/setting"),
				array("NHÀ CUNG CẤP", "/setting/supplier"),
				array( mb_strtoupper($Supplier->getName(), 'UTF8'), $Supplier->getURLResource() ),
				array( mb_strtoupper($Resource->getName(), 'UTF8'), $Resource->getURLTag() )
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setObject("TagAll", $TagAll);
			$request->setObject("Supplier", $Supplier);			
			$request->setObject("Resource", $Resource);
			
			$request->setObject("Navigation", $Navigation);			
			$request->setProperty('Title', $Title);
		}
	}
?>