<?php		
	namespace MVC\Command;	
	class ImportSupplierOrderPrint extends Command{
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
			$IdOrder 	= $request->getProperty("IdOrder");
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------						
			$mOI = new \MVC\Mapper\OrderImport();
			$mSupplier = new \MVC\Mapper\Supplier();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Order = $mOI->find($IdOrder);
			$Supplier = $mSupplier->find($IdSupplier);
			$DateCurrent = "Đồng Tháp, ngày ".\date("d")." tháng ".\date("m")." năm ".\date("Y");

			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('DateCurrent'	, $DateCurrent);
			$request->setObject('Order'			, $Order);
			$request->setObject('Supplier'		, $Supplier );
		}
	}
?>