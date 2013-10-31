<?php	
	namespace MVC\Command;
	class ViewCustomerPaidTrackings extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			require_once("mvc/PublicFunction.php");
			//------------------------------------------------------------						
			
			
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
			$mCPTracking = new \MVC\Mapper\CustomerPaidTracking();
			$CPTrackings = $mCPTracking->findBy(array(
				$Today,$Today
			));			
			$request->setObject('CPTrackings', $CPTrackings);
						
			$fToday = date("d/m/Y", strtotime($Today));
			$request->setProperty('Title', 
				'BẢNG THEO DÕI [KHÁCH TRẢ TIỀN] NGÀY '.$fToday
			);
			$request->setProperty('ParentsLinked', '?cmd=ViewCustomers');
									
			return self::statuses('CMD_OK');
		}
	}
?>
