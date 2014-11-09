<?php	
	namespace MVC\Command;
	class ViewPriceResourceExportTrackings extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			require_once("mvc/PublicFunction.php");
			//------------------------------------------------------------
			
			$mPRETracking = new \MVC\Mapper\PriceResourceExportTracking();
			$PRETrackings = $mPRETracking->findBy(array(
				null
			));			
			$request->setObject('PRETrackings', $PRETrackings);
						
			$fToday = date("d/m/Y", strtotime($Today));
			$request->setProperty('Title', 'BẢNG ĐIỀU CHỈNH GIÁ GIAO NGUYÊN LIỆU CÁC LÒ');
			$request->setProperty('ParentsLinked', '?cmd=ViewResourceExportTrackings');
						
			return self::statuses('CMD_OK');
		}
	}
?>
