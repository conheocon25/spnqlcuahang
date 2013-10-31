<?php		
	namespace MVC\Command;	
	class SellingOrderDetailDelLoad extends Command{
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
			$Order = $mOrder->find($IdOrder);
			$OrderDetail = $mOrderDetail->find($IdOrderDetail);
			$Title = mb_strtoupper($OrderDetail->getResource()->getName()." XÓA", 'UTF8');
			$Navigation = array(
				array("ỨNG DỤNG", "/app"),
				array("BÁN HÀNG", "/selling")
			);
															
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('Title', $Title);
			$request->setObject('Navigation', $Navigation);
			$request->setObject('OrderDetail', $OrderDetail);
		}
	}
?>