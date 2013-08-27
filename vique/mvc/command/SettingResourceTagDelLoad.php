<?php
	namespace MVC\Command;	
	class SettingResourceTagDelLoad extends Command{
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
			$IdR2T = $request->getProperty('IdR2T');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mSupplier = new \MVC\Mapper\Supplier();
			$mResource = new \MVC\Mapper\Resource();
			$mR2T = new \MVC\Mapper\R2T();
						
			//-------------------------------------------------------------
			//XỬ LÍ CHÍNH
			//-------------------------------------------------------------						
			$Supplier = $mSupplier->find($IdSupplier);
			$Resource = $mResource->find($IdResource);
			$R2T = $mR2T->find($IdR2T);
			
			$Title = mb_strtoupper($R2T->getTag()->getName(), 'UTF8');
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
			$request->setObject("Supplier", $Supplier);			
			$request->setObject("Resource", $Resource);
			$request->setObject("R2T", $R2T);
			
			$request->setObject("Navigation", $Navigation);
			$request->setProperty('Title', $Title);
		}
	}
?>