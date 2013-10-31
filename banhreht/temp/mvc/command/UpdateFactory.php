<?php	
	namespace MVC\Command;
	class UpdateFactory extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			
			$mFactory = new \MVC\Mapper\Factory();									
			$Factory = $mFactory->find( $request->getProperty('IdFactory'));
									
			$Name = $request->getProperty('Name');
			if (isset($Name)){								
				$Factory	= new \MVC\Domain\Factory(					
					$request->getProperty('IdFactory'),					
					$request->getProperty('Name'),
					null,
					$request->getProperty('Phone'),
					$request->getProperty('Address'),
					$request->getProperty('Description')
				);
				$mFactory->update($Factory);
				return self::statuses('CMD_OK');
			}
			
			$request->setObject('Factory', $Factory);			
			$request->setProperty('Title', 'CẬP NHẬT THÔNG TIN '.mb_strtoupper($Factory->getName(), 'UTF8') );
						
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
