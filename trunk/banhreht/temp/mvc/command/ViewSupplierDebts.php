<?php	
	namespace MVC\Command;
	class ViewSupplierDebts extends Command {
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
			$IdSupplier = $request->getProperty('IdSupplier');
			$mSupplier = new \MVC\Mapper\Supplier();
			$Supplier = $mSupplier->find($IdSupplier);
			$request->setObject('Supplier', $Supplier);
			$ses->setCurrentSupplier($IdSupplier);
			
			$mSD = new \MVC\Mapper\SupplierDebt();
			$SDs = $mSD->trackBy(array($IdSupplier,$Today,$Today));
			$request->setObject('SDs', $SDs);
						
			$fToday = date("m/Y", strtotime($Today));
			$request->setProperty('Title', $Supplier->getName().' NHẬN TIỀN '.$fToday);
			$request->setProperty('ParentsLinked', '?cmd=ViewSuppliers');
						
			return self::statuses('CMD_OK');
		}
	}
?>
