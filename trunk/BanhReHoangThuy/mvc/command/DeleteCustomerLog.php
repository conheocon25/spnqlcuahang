<?php	
	namespace MVC\Command;
	class DeleteCustomerLog extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------									
			$IdLog = $request->getProperty('IdLog');
			$mCL = new \MVC\Mapper\CustomerLog();
			$CL = $mCL->find($IdLog);
			$mCL->delete(array($IdLog));
			$request->setProperty('IdCustomer', $CL->getIdCustomer());
			return self::statuses('CMD_OK');
		}
	}
?>
