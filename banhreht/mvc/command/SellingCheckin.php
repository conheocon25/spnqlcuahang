<?php		
	namespace MVC\Command;	
	class SellingCheckin extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------									
			$mOrder = new \MVC\Mapper\OrderExport();
												
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Order = new \MVC\Domain\OrderExport(
				null,
				$Session->getCurrentIdUser(),
				\date("Y-m-d H:i:s"),
				0,
				"Hàng bán lẻ"
			);
			$mOrder->insert($Order);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>