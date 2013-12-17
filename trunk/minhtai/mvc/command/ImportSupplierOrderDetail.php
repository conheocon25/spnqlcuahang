<?php		
	namespace MVC\Command;	
	class ImportSupplierOrderDetail extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$IdSupplier = $request->getProperty("IdSupplier");
			$PageCurrent = $request->getProperty('Page');
			$IdOrderImport = $request->getProperty("IdOrderImport");
			
						
			if (!isset($PageCurrent)) $PageCurrent = 1;			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			
			$mSupplier = new \MVC\Mapper\Supplier();
			$mOrderImport = new \MVC\Mapper\OrderImport();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$OrderImport = $mOrderImport->find($IdOrderImport);
			
			
			$Supplier = $mSupplier->find($IdSupplier);
		
			$OIs =  $mOrderImport->findByPage(array($IdSupplier, $PageCurrent, 15));
			
			if (!isset($OrderImport)) $OrderImport= $OIs->current();	
			
			$PN = new \MVC\Domain\PageNavigation($Supplier->getOrders()->count(), 15, $Supplier->getURLImportPage());
			
			$Session->setCurrentImportPage($PageCurrent);
			
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setObject('Supplier', $Supplier);
			$request->setObject('OrderImport', $OrderImport);
			$request->setObject('OIs', $OIs);	
			$request->setObject("CurrentPage", $PageCurrent);			
			$request->setObject("Pages", $PN);			
			
		}
	}
?>