<?php		
	namespace MVC\Command;	
	class SellingDetailLoadOrder extends Command{
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
			$IdOrder 	= $request->getProperty("IdOrder");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mOrder 		= new \MVC\Mapper\OrderExport();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Order 			= $mOrder->find($IdOrder);
			$CT				= $Order->getTracking();
			$CTAll			= $CT->getCustomer()->getTrackingAll();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setObject('Order'			, $Order);
			$request->setObject('CT'			, $CT);
			$request->setObject('CTAll'			, $CTAll);
			return self::statuses('CMD_DEFAULT');
		}
	}
?>