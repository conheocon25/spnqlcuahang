<?php	
	namespace MVC\Command;
	class ViewFactoryLoanTrackings extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			require_once("mvc/PublicFunction.php");
			//------------------------------------------------------------						
			
			
			$ses = \MVC\Base\SessionRegistry::instance();
			$doAction = $request->getProperty('doAction');						
			$Today = $ses->getCurrentDate();
			if (!isset($Today)){
				$CToday = getdate();
				$Today = $CToday['year']."-".$CToday['mon']."-".$CToday['mday'];
			}
			if ($doAction == "next"){				
				$cd = strtotime($Today);
				$Today = date('Y-m-d', mktime(0,0,0,date('m',$cd),date('d',$cd)+1,date('Y',$cd)));
			}
			if ($doAction == "before"){
				$cd = strtotime($Today);
				$Today = date('Y-m-d', mktime(0,0,0,date('m',$cd),date('d',$cd)-1,date('Y',$cd)));
			}
			$ses->setCurrentDate($Today);
			//------------------------------------------------------------			
			$mFactoryLoanTracking = new \MVC\Mapper\FactoryLoanTracking();
			$FactoryLoanTrackings = $mFactoryLoanTracking->findBy(array(
				$Today,$Today
			));			
			$request->setObject('FactoryLoanTrackings', $FactoryLoanTrackings);
						
			$fToday = date("d/m/Y", strtotime($Today));
			$request->setProperty('Title', 
				'BẢNG THEO DÕI [LÒ ỨNG TIỀN] NGÀY '.$fToday
			);
			$request->setProperty('ParentsLinked', '?cmd=ViewFactories');
						
			return self::statuses('CMD_OK');
		}
	}
?>
