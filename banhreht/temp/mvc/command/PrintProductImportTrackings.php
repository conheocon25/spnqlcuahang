<?php	
	namespace MVC\Command;
	class PrintProductImportTrackings extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			require_once("mvc/PublicFunction.php");
			//------------------------------------------------------------						
			
								
			$DateStart = $request->getProperty('DateStart');
			$DateEnd = $request->getProperty('DateEnd');
			//------------------------------------------------------------
			$mPIT = new \MVC\Mapper\ProductImportTracking();
			$PITs = $mPIT->trackByDate(array(
				$DateStart, $DateEnd, 
				$DateStart, $DateEnd, 
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd, 
				$DateStart, $DateEnd, 
				$DateStart, $DateEnd, 
				$DateStart, $DateEnd, 
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
			$SPIT = $mPIT->sumByDate(array(
				$DateStart, $DateEnd, 
				$DateStart, $DateEnd, 
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd,
				$DateStart, $DateEnd, 
				$DateStart, $DateEnd, 
				$DateStart, $DateEnd, 
				$DateStart, $DateEnd, 
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
			
			$request->setObject('PITs', $PITs);
			$request->setObject('SPIT', $SPIT);
			$request->setProperty('DateStart', $DateStart);
			$request->setProperty('DateEnd', $DateEnd);
						
			$fDateStart = date("d/m/Y", strtotime($DateStart));
			$fDateEnd = date("d/m/Y", strtotime($DateEnd));
			
			$request->setProperty('Title', "BẢNG THEO DÕI CÁC LÒ GIAO HÀNG TỪ NGÀY ".$fDateStart. " ĐẾN ".$fDateEnd);
			return self::statuses('CMD_OK');
		}
	}
?>
