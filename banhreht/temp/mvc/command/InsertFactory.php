<?php	
	namespace MVC\Command;
	class InsertFactory extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
						
			$mFactory = new \MVC\Mapper\Factory();											
			$Name = $request->getProperty('Name');
			if (isset($Name)){								
				$Factory	= new \MVC\Domain\Factory(					
					$request->getProperty('IdFactory'),
					$request->getProperty('Name'),
					$request->getProperty('Type'),
					$request->getProperty('Phone'),
					$request->getProperty('Address'),
					$request->getProperty('Description')
				);
				$mFactory->insert($Factory);
				return self::statuses('CMD_OK');
			}
			$request->setProperty('Title', 'THÊM MỚI LÒ ');
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
