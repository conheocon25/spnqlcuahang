<?php		
	namespace MVC\Command;	
	class SellingOrderDetailDelExe extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdOrder = $request->getProperty("IdOrder");
			$IdOrderDetail = $request->getProperty("IdOrderDetail");
				
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------									
			$mOrder = new \MVC\Mapper\OrderExport();
			$mOrderDetail = new \MVC\Mapper\OrderExportDetail();
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------													
			$OrderDetail = $mOrderDetail->find($IdOrderDetail);											
			$mOrderDetail->delete( array($IdOrderDetail));
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------												
			return self::statuses('CMD_OK');
		}
	}
?>