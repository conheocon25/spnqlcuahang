<?php	
	namespace MVC\Command;
	class ViewPriceResourceImportTrackings extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			require_once("mvc/PublicFunction.php");
			//------------------------------------------------------------
			
			
			$mPRITracking = new \MVC\Mapper\PriceResourceImportTracking();
			$PRITrackings = $mPRITracking->findBy(array(null));
			$request->setObject('PRITrackings', $PRITrackings);
						
			$fToday = date("d/m/Y", strtotime($Today));
			$request->setProperty('Title', 'BẢNG ĐIỀU CHỈNH GIÁ NHẬP NGUYÊN LIỆU');
			$request->setProperty('ParentsLinked', '?cmd=ViewSettings');
						
			return self::statuses('CMD_OK');
		}
	}
?>
