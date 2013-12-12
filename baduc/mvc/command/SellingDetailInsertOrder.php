<?php		
	namespace MVC\Command;	
	class SellingDetailInsertOrder extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdDomain 	= $request->getProperty("IdDomain");
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mOrder 		= new \MVC\Mapper\OrderExport();
			$mOEL 			= new \MVC\Mapper\OrderExportLog();
			$mCustomer 		= new \MVC\Mapper\Customer();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Customer 	= $mCustomer->find(1);
			$CT 		= $Customer->getTrackingAll()->current();
			
			$Order 	= new \MVC\Domain\OrderExport(
				null,
				$CT->getId(),
				$Session->getCurrentUser()->getId(),
				0,
				\date('Y-m-d H:i:s'),
				"Đơn hàng bán lẻ"
			);
			$mOrder->insert($Order);
			
			$OEL = new \MVC\Domain\OrderExportLog(
				null,
				\date('Y-m-d H:i:s'),
				$Order->getId()
			);
			$mOEL->insert($OEL);
							
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			echo $Order->toJSON();
		}
	}
?>