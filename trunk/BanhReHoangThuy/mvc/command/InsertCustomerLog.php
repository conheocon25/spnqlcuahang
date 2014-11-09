<?php	
	namespace MVC\Command;
	class InsertCustomerLog extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------				
			
			$IdCustomer = $request->getProperty('IdCustomer');
			$mCustomer = new \MVC\Mapper\Customer();
			$Customer = $mCustomer->find( $request->getProperty('IdCustomer'));
									
			$DateStart = $request->getProperty('DateStart');
			if (isset($DateStart)){
				$mCL = new \MVC\Mapper\CustomerLog();
				$CL = new \MVC\Domain\CustomerLog(
					null,
					$IdCustomer,
					$request->getProperty('DateStart'),
					$request->getProperty('DateEnd')
				);
				$mCL->insert($CL);
				return self::statuses('CMD_OK');
			}						
			$request->setProperty('Title', 'THÊM NHẬT KÍ TỔNG KẾT CỦA '.$Customer->getName());
						
			return self::statuses('CMD_DEFAULT');
		}
	}
?>