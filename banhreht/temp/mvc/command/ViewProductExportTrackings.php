<?php	
	namespace MVC\Command;
	class ViewProductExportTrackings extends Command {
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
			$mCustomer = new \MVC\Mapper\Customer();
			$Customer = $mCustomer->find($request->getProperty('IdCustomer'));
			
			$mPETracking = new \MVC\Mapper\ProductExportTracking();
			$PETrackings = $mPETracking->findBy(array(
				$Today,
				$Today,$Today,$Today,$Today,
				$Today,$Today,$Today,$Today,
				$Today,$Today,$Today,$Today,
				$Today,$Today,$Today,$Today,
				$Today,$Today,$Today,$Today,
				$Today,$Today,$Today,$Today,
				$Today,$Today,$Today,$Today
			));
			$request->setObject('Customer', $Customer);
			$request->setObject('PETrackings', $PETrackings);
						
			$fToday = date("d/m/Y", strtotime($Today));
			$request->setProperty('Title', 
				'BẢNG THEO DÕI [KHÁCH NHẬN HÀNG] NGÀY '.$fToday
			);
			$request->setProperty('ParentsLinked', '?cmd=ViewCustomers');
									
			return self::statuses('CMD_OK');
		}
	}
?>
