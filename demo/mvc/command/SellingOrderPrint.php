<?php
	namespace MVC\Command;
	class SellingOrderPrint extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdOrder = $request->getProperty("IdOrder");
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mOrder = new \MVC\Mapper\OrderExport();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Order = $mOrder->find($IdOrder);
			//$Order->setState(1);
			//$mOrder->update($Order);
			
			//$OrderNew = new \MVC\Domain\OrderExport(
			//	null,
			//	$Session->getCurrentIdUser(),
			//	\date("Y-m-d H:i:s"),
			//	0,
			//	"Hàng bán lẻ"
			//);
			//$mOrder->insert($OrderNew);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setObject("Order", $Order);
			
		}
	}
?>
