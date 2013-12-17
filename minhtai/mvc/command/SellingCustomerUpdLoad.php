<?php		
	namespace MVC\Command;	
	class SellingCustomerUpdLoad extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdOrderExport = $request->getProperty("IdOrderExport");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mStore = new \MVC\Mapper\Store();
			$mOE = new \MVC\Mapper\OrderExport();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Stores = $mStore->findAll();
			$OE = $mOE->find($IdOrderExport);
			$Title = "CẬP NHẬT ĐƠN HÀNG";
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('Title', $Title);			
			$request->setObject('OrderExport', $OE);
			$request->setObject('Stores', $Stores);
		}
	}
?>