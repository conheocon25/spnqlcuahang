<?php		
	namespace MVC\Command;	
	class PaidSupplierListInsLoad extends Command{
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
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
						
			$mSupplier = new \MVC\Mapper\Supplier();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Supplier = $mSupplier->find($IdSupplier);			
			$Title = "TRẢ TIỀN ".mb_strtoupper($Supplier->getName(), 'UTF8');
			
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('Title', $Title);
			
			$request->setObject('Supplier', $Supplier);
		}
	}
?>