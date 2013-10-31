<?php	
	namespace MVC\Command;
	class ViewCustomerPaids extends Command {
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
			//------------------------------------------------------------			
			$IdCustomer = $request->getProperty('IdCustomer');
			$mCustomer = new \MVC\Mapper\Customer();
			$Customer = $mCustomer->find($IdCustomer);
			$request->setObject('Customer', $Customer);
			$ses->setCurrentCustomer($IdCustomer);
			
			$mCP = new \MVC\Mapper\CustomerPaid();
			$CPs = $mCP->trackBy(array($IdCustomer,$Today,$Today));
			$request->setObject('CPs', $CPs);
						
			$fToday = date("m/Y", strtotime($Today));
			$request->setProperty('Title', $Customer->getName().' TRẢ TIỀN '.$fToday);
			$request->setProperty('ParentsLinked', '?cmd=ViewCustomers');
						
			return self::statuses('CMD_OK');
		}
	}
?>
