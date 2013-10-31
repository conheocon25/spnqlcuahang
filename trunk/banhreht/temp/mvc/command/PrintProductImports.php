<?php	
	namespace MVC\Command;
	class PrintProductImports extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			require_once("mvc/PublicFunction.php");
			//------------------------------------------------------------						
			
			$ses = \MVC\Base\SessionRegistry::instance();			
			$Today = $ses->getCurrentDate();
			if (!isset($Today)){
				$CToday = getdate();
				$Today = $CToday['year']."-".$CToday['mon']."-".$CToday['mday'];
			}			
			//------------------------------------------------------------
			$mFactory = new \MVC\Mapper\Factory();
			$Factory = $mFactory->find($request->getProperty('IdFactory'));
			$request->setObject('Factory', $Factory);
						
			$fToday = date("m/Y", strtotime($Today));
			$request->setProperty('fToday', $fToday);
			$request->setProperty('Title', $Factory->getName().' GIAO HÀNG THÁNG '.$fToday);
			$request->setProperty('ParentsLinked', '?cmd=ViewFactories');
									
			return self::statuses('CMD_OK');
		}
	}
?>
