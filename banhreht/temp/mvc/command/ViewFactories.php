<?php	
	namespace MVC\Command;
	class ViewFactories extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//------------------------------------------------------------						
			
									
			$mFactory = new \MVC\Mapper\Factory();
			$Factories = \MVC\Domain\HelperFactory::getCollection("Factory");
			$Factories = $mFactory->findAll();
			
			$Id = 1;
			$Factory = $Factories->current();
			while ($Factories->valid()){
				$Factory = $Factories->current();
				$Factory->setId($Id);
				$Id++;
				$Factories->next();
			}			
			$request->setObject('Factories', $Factories);
			
			return self::statuses('CMD_OK');
		}
	}
?>
