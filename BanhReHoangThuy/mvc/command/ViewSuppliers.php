<?php	
	namespace MVC\Command;
	class ViewSuppliers extends Command {
		function doExecute( \MVC\Controller\Request $request ) {						
			require_once("mvc/base/domain/HelperFactory.php");
			$ses = \MVC\Base\SessionRegistry::instance();
			$mSupplier = new \MVC\Mapper\Supplier();							
			$Suppliers = \MVC\Domain\HelperFactory::getCollection("Supplier");	
			$Suppliers = $mSupplier->findAll();			
			$request->setObject('Suppliers', $Suppliers);			
			return self::statuses('CMD_OK');
		}
	}
?>
