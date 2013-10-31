<?php	
	namespace MVC\Command;
	class ViewPriceProductImportTrackings extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			require_once("mvc/PublicFunction.php");
			//------------------------------------------------------------						
			
			//------------------------------------------------------------						
			$mPPITracking = new \MVC\Mapper\PriceProductImportTracking();
			$PPITrackings = $mPPITracking->findBy(array(null));
			$request->setObject('PPITrackings', $PPITrackings);
						
			$fToday = date("d/m/Y", strtotime($Today));
			$request->setProperty('Title', 'BẢNG ĐIỀU CHỈNH GIÁ LÒ GIAO HÀNG');
			$request->setProperty('ParentsLinked', '?cmd=ViewProductImportTrackings');
						
			return self::statuses('CMD_OK');
		}
	}
?>
