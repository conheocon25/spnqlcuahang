<?php		
	namespace MVC\Command;	
	class ImportSupplierOrder extends Command{
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
			
			if (!isset($PageCurrent)) $PageCurrent = 1;			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			
			$mSupplier = new \MVC\Mapper\Supplier();
			$mOI = new \MVC\Mapper\OrderImport();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$Supplier = $mSupplier->find($IdSupplier);
			
			//$OIs = $mOI->findByTop10(array($IdSupplier));
			//$OIs1 = $mOI->findByTop10(array($IdSupplier));
			
			$OIs = $mOI->findByPage(array($IdSupplier, $PageCurrent, 15));	
		
			$PN = new \MVC\Domain\PageNavigation($Supplier->getOrders()->count(), 15, $Supplier->getURLImportPage());
			
			$Session->setCurrentImportPage($PageCurrent);						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setObject('Supplier', $Supplier);
			$request->setObject('OIs', $OIs);
			$request->setObject('OIs1', $OIs);			
			$request->setObject("Pages", $PN);
		}
	}
?>