<?php	
	namespace MVC\Command;
	class ViewFactoryTrackings extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			require_once("mvc/PublicFunction.php");
			//------------------------------------------------------------						
			
			$doAction = $request->getProperty('doAction');
			$ses = \MVC\Base\SessionRegistry::instance();
			$Today = $ses->getCurrentDate();			
			if (!isset($Today)){
				$CToday = getdate();
				$Today = $CToday['year']."-".$CToday['mon']."-".$CToday['mday'];
			}
			if ($doAction == "next"){				
				$cd = strtotime($Today);
				$Today = date('Y-m-d', mktime(0,0,0,date('m',$cd)+1,date('d',$cd),date('Y',$cd)));				
			}
			if ($doAction == "before"){
				$cd = strtotime($Today);
				$Today = date('Y-m-d', mktime(0,0,0,date('m',$cd)-1,date('d',$cd),date('Y',$cd)));
			}
			$ses->setCurrentDate($Today);
			//-------------------------------------------------------------------
						
			$mFT = new \MVC\Mapper\FactoryTracking();
			$FTrackings = $mFT->findBy(array(
				$Today,$Today,$Today,$Today,$Today,$Today								
			));											
			$request->setObject('FTrackings', $FTrackings);
			
			$fToday = date("m/Y", strtotime($Today));
			$request->setProperty('Title', "TỔNG KẾT CÁC LÒ THÁNG ".$fToday);
						
			return self::statuses('CMD_OK');
		}
	}
?>
