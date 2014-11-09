<?php	
	namespace MVC\Command;
	class InsertCustomer extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------
					
			$mapper = new \MVC\Mapper\Customer();							
			$name = $request->getProperty('Name');
			if ( isset($name) ){
				// ? Chưa viết cập nhật thông tin khách hàng
				$mCustomer = new \MVC\Mapper\Customer();
				$Customer = new \MVC\Domain\Customer(
					null,					
					$request->getProperty('Name'),
					$request->getProperty('Phone'),
					$request->getProperty('Address'),
					$request->getProperty('Description')
				);
				$mCustomer->insert($Customer);
				return self::statuses('CMD_OK');
			}
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
