<?php	
	namespace MVC\Command;
	class ViewResourceImports extends Command {
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
			$mSupplier = new \MVC\Mapper\Supplier();
			$mRIT = new \MVC\Mapper\ResourceImportTracking();
			
			$IdSupplier = $request->getProperty('IdSupplier');
			$Supplier = $mSupplier->find($IdSupplier);
			$RITs = $mRIT->trackBySupplier(array( $IdSupplier, $Today, $Today ));
			$ses->setCurrentSupplier($IdSupplier);
			
			$request->setProperty('IdSupplier', $IdSupplier);
			$request->setObject('Supplier', $Supplier);
			$request->setObject('RITs', $RITs);
			$fToday = date("m/Y", strtotime($Today));
			$request->setProperty('Title', 'NHẬP NGUYÊN LIỆU CỦA '. $Supplier->getName()." THÁNG ".$fToday);
						
			return self::statuses('CMD_OK');
		}
	}
?>
