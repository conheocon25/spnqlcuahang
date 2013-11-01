<?php		
	namespace MVC\Command;	
	class ImportSupplierOrderDetail extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdSupplier 	= $request->getProperty('IdSupplier');
			$IdOrder 		= $request->getProperty('IdOrder');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mSupplierOrder 	= new \MVC\Mapper\SupplierOrder();
			$mSupplier 			= new \MVC\Mapper\Supplier();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$Supplier 	= $mSupplier->find($IdSupplier);
			$Order 		= $mSupplierOrder->find($IdOrder);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$Title = $Order->getDatePrint();
			$Navigation = array(
				array("NHẬP", "/import"),
				array("NHÀ CUNG CẤP", "/import/supplier"),
				array(mb_strtoupper($Supplier->getName(), 'UTF8'), $Supplier->getURLImport())
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title', $Title);			
			$request->setObject('Navigation', $Navigation);
									
			$request->setObject('Order', $Order);
			$request->setObject('Supplier', $Supplier);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>