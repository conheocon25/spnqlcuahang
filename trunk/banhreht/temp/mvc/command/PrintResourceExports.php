<?php	
	namespace MVC\Command;	      
	class PrintResourceExports extends Command {
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
			$IdFactory = $request->getProperty('IdFactory');
			$mFactory = new \MVC\Mapper\Factory();			
			$Factory = $mFactory->find($IdFactory);
						
			$request->setObject('Factory', $Factory);			
			$fToday = date("__/m/Y", strtotime($Today));			
			$request->setProperty('Title', 'NHẬN NGUYÊN LIỆU CỦA ['. $Factory->getName()."] THÁNG ".$fToday);
			$request->setProperty('fToday', $fToday);
						
			return self::statuses('CMD_OK');
		}
	}
?>
