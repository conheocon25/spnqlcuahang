<?php		
	namespace MVC\Command;	
	class SellingSearchResource extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$Name 		= $request->getProperty("Name");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mResource 	= new \MVC\Mapper\Resource();
			$mTD 		= new \MVC\Mapper\TrackingDaily();
			$mTDR 		= new \MVC\Mapper\TrackingDailyResource();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------												
			$TDAll 			= $mTD->findByNow(array());
			$TD				= $TDAll->current();
						
			$TDRAll 		= $mTDR->findByResourceName(array($TD->getId(), $Name."%"));
															
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setObject('TDRAll'	, $TDRAll);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>