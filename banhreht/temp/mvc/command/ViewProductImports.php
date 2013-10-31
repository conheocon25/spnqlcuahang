<?php	
	namespace MVC\Command;
	class ViewProductImports extends Command {
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
			$mFactory = new \MVC\Mapper\Factory();
			$IdFactory = $request->getProperty('IdFactory');
			$Factory = $mFactory->find($IdFactory);
			$request->setObject('Factory', $Factory);
			$ses->setCurrentFactory($IdFactory);
			
			$mPI = new \MVC\Mapper\ProductImportTracking();			
			$PIs = $mPI->trackByFactory(array(					
					$Factory->getId(),$Today, $Today
				));													
			$request->setObject('PIs', $PIs);
						
			$fToday = date("m/Y", strtotime($Today));
			$request->setProperty('Title', $Factory->getName().' GIAO HÀNG THÁNG '.$fToday);
			$request->setProperty('ParentsLinked', '?cmd=ViewFactories');
									
			return self::statuses('CMD_OK');
		}
	}
?>
