<?php		
	namespace MVC\Command;	
	class SellingCheckout extends Command{
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
			$OrderAll = $mOrder->findBy( array( $Session->getCurrentUser()->getId(), 0 ) );
			$Order = $OrderAll->current();
			if (!isset($Order))
				return self::statuses('CMD_OK');
				
			$Order->setState(1);
			$mOrder->update($Order);
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>