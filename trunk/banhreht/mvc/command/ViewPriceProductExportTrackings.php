<?php	
	namespace MVC\Command;
	class ViewPriceProductExportTrackings extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			require_once("mvc/PublicFunction.php");
			//------------------------------------------------------------						
			
			//------------------------------------------------------------						
			$mPPETracking = new \MVC\Mapper\PriceProductExportTracking();
			$PPETrackings = $mPPETracking->findBy(array(
				null							
			));			
			$request->setObject('PPETrackings', $PPETrackings);
						
			$fToday = date("d/m/Y", strtotime($Today));
			$request->setProperty('Title', 'BẢNG ĐIỀU CHỈNH GIÁ NHẬN HÀNG');
			$request->setProperty('ParentsLinked', '?cmd=ViewSettings');
						
			return self::statuses('CMD_OK');
		}
	}
?>
