<?php
	namespace MVC\Command;	
	class ImportSupplier extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdSupplier = $request->getProperty('IdSupplier');
			$Page = $request->getProperty('Page');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mSupplier = new \MVC\Mapper\Supplier();
			$mOrder = new \MVC\Mapper\OrderImport();
			$mConfig = new \MVC\Mapper\Config();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$SupplierAll = $mSupplier->findAll();
			if (!isset($IdSupplier)){
				$Supplier = $SupplierAll->current();
			}else{
				$Supplier = $mSupplier->find($IdSupplier);
			}			
			
			$Config = $mConfig->findByName('ROW_PER_PAGE');
			if (!isset($Page)) $Page = 1;
			$OrderAll = $mOrder->findByPage(array($IdSupplier, $Page, $Config->getValue() ));
			$PN = new \MVC\Domain\PageNavigation( $Supplier->getOrders()->count(), $Config->getValue(), $Supplier->getURLImport());
			
			$Title = mb_strtoupper($Supplier->getName(), 'UTF8');
			$Navigation = array(
				array("ỨNG DỤNG", "/app"),
				array("NHẬP HÀNG", "/import")
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setObject("SupplierAll", $SupplierAll);
			$request->setObject("Supplier", $Supplier);
			$request->setObject("OrderAll", $OrderAll);
			$request->setObject("PN", $PN);
			
			$request->setObject("Navigation", $Navigation);
			$request->setProperty('Page', $Page);			
			$request->setProperty('Title', $Title );
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>