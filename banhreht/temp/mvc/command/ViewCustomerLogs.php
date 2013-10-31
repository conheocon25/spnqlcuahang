<?php	
	namespace MVC\Command;
	class ViewCustomerLogs extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//------------------------------------------------------------						
			$ses = \MVC\Base\SessionRegistry::instance();
			
			
			
			$IdCustomer = $request->getProperty('IdCustomer');
			$mCustomer = new \MVC\Mapper\Customer();
			$Customer = $mCustomer->find($IdCustomer);
						
			$mCL = new \MVC\Mapper\CustomerLog();			
			$CLs = $mCL->findBy(array($IdCustomer));
							
			$request->setObject('CLs', $CLs);
			$request->setObject('Customer', $Customer);
			$request->setProperty('Title', 'NHẬT KÍ TỔNG KẾT '.$Customer->getName());
			$request->setProperty('ParentsLinked', '?cmd=ViewCustomers');
			
			return self::statuses('CMD_OK');
		}
	}
?>
