<?php	
	namespace MVC\Command;
	class PrintCustomerPaids extends Command {
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
			$IdCustomer = $request->getProperty('IdCustomer');
			$mCustomer = new \MVC\Mapper\Customer();
			$Customer = $mCustomer->find($IdCustomer);
			$request->setObject('Customer', $Customer);
						
			$fToday = date("__/m/Y", strtotime($Today));
			$request->setProperty('Title', 'BẢNG THEO DÕI '.$Customer->getName().' TRẢ TIỀN '.$fToday);
			$request->setProperty('fToday', $fToday);
						
			return self::statuses('CMD_OK');
		}
	}
?>
