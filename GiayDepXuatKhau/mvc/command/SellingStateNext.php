<?php
	namespace MVC\Command;
	class SellingStateNext extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$IdOrder 	= $request->getProperty("IdOrder");
			$Delta 		= $request->getProperty("Delta");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------						
			$mOrder 		= new \MVC\Mapper\OrderExport();
															
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Order 		= $mOrder->find($IdOrder);
			$State		= $Order->getState() + 1;
			
			if ($State<0) $State = 0;
			else if ($State>=4) $State = 3;
							
			$Order->setState($State);						
			$mOrder->update($Order);
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------		
		}
	}
?>