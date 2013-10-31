<?php	
	namespace MVC\Command;
	class ViewCustomers extends Command {
		function doExecute( \MVC\Controller\Request $request ) {						
			require_once("mvc/base/domain/HelperFactory.php");
			$ses = \MVC\Base\SessionRegistry::instance();

			
			$mCustomer = new \MVC\Mapper\Customer();							
			$Customers = \MVC\Domain\HelperFactory::getCollection("Customer");	
			$Customers = $mCustomer->findAll();
			
			$request->setObject('Customers', $Customers);
			
			
			return self::statuses('CMD_OK');
		}
	}
?>
