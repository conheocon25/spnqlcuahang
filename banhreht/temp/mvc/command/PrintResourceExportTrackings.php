<?php	
	namespace MVC\Command;
	class PrintResourceExportTrackings extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			require_once("mvc/PublicFunction.php");
			//------------------------------------------------------------						
			
						
			$DateStart = $request->getProperty('DateStart');
			$DateEnd = $request->getProperty('DateEnd');
			//------------------------------------------------------------
			$mRET = new \MVC\Mapper\ResourceExportTracking();
			$RETs = $mRET->trackByDate(array(
				$DateStart, $DateEnd, 
				$DateStart, $DateEnd, 
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd
			));
			$SRETs = $mRET->sumByDate(array(
				$DateStart, $DateEnd, 
				$DateStart, $DateEnd, 
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd
			));			
			$request->setObject('RETs', $RETs);
			$request->setObject('SRETs', $SRETs);
			
			$fDateStart = date("d/m/Y", strtotime($DateStart));
			$fDateEnd = date("d/m/Y", strtotime($DateEnd));
			
			$request->setProperty('Title', "BẢNG THEO DÕI CÁC LÒ NHẬN NGUYÊN LIỆU TỪ NGÀY ".$fDateStart. " ĐẾN ".$fDateEnd);
			return self::statuses('CMD_OK');
		}
	}
?>
