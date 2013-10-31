<?php	
	namespace MVC\Command;
	class UpdateCustomer extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
						
			$mCustomer = new \MVC\Mapper\Customer();
			$Customer = $mCustomer->find( $request->getProperty('IdCustomer') );
			$request->setObject('Customer', $Customer);
			
			$request->setProperty('Title', 'CẬP NHẬT THÔNG TIN CỦA '.mb_strtoupper($Customer->getName(), 'UTF8'));
			
			$name = $request->getProperty('Name');
			if ( isset($name) ){								
				
				$Customer->setName($request->getProperty('Name'));
				$Customer->setPhone($request->getProperty('Phone'));
				$Customer->setAddress($request->getProperty('Address'));
				$Customer->setDescription($request->getProperty('Description'));
				$Customer->setBalance($request->getProperty('Balance'));
				
				$mCustomer->update($Customer);
				return self::statuses('CMD_OK');
			}
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
