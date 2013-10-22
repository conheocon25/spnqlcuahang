<?php		
	namespace MVC\Command;	
	class SellingOrderDetailUpdExe extends Command{
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
			$Count = $request->getProperty("Count");
			$Price = $request->getProperty("Price");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------									
			$mOrder = new \MVC\Mapper\OrderExport();
			$mOrderDetail = new \MVC\Mapper\OrderExportDetail();
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($Count))
				return self::statuses('CMD_OK');
										
			$OrderDetail = $mOrderDetail->find($IdOrderDetail);
								
			$OrderDetail->setPrice($Price);
			$OrderDetail->setCount($Count);
			$mOrderDetail->update($OrderDetail);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------												
			return self::statuses('CMD_OK');
		}
	}
?>