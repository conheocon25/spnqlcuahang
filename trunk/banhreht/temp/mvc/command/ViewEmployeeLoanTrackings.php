<?php	
	namespace MVC\Command;
	class ViewEmployeeLoanTrackings extends Command {
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
				$Today = date('Y-m-d', mktime(0,0,0,date('m',$cd),date('d',$cd)+1,date('Y',$cd)));
			}
			if ($doAction == "before"){
				$cd = strtotime($Today);
				$Today = date('Y-m-d', mktime(0,0,0,date('m',$cd),date('d',$cd)-1,date('Y',$cd)));
			}
			$ses->setCurrentDate($Today);
			//------------------------------------------------------------
			$mFactory = new \MVC\Mapper\Factory();
			$Factory = $mFactory->find($request->getProperty('IdFactory'));
			
			$mEmployeeLoanTracking = new \MVC\Mapper\EmployeeLoanTracking();
			$EmployeeLoanTrackings = $mEmployeeLoanTracking->findBy(array(				
				$Today,$Today,				
				$request->getProperty('IdFactory')
			));
			$request->setObject('Factory', $Factory);
			$request->setObject('EmployeeLoanTrackings', $EmployeeLoanTrackings);
						
			$fToday = date("d/m/Y", strtotime($Today));
			$request->setProperty('Title', 
				'BẢNG ỨNG TIỀN '.
				mb_strtoupper($Factory->getName(), 'UTF8').
				" NGÀY ".$fToday
			);
			$request->setProperty('ParentsLinked', $Factory->getURLViewEmployees());
			return self::statuses('CMD_OK');
		}
	}
?>
