<?php	
	namespace MVC\Command;
	class InsertEmployee extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			
			
			$mFactory = new \MVC\Mapper\Factory();
			$Factory = $mFactory->find( $request->getProperty('IdFactory'));						
			$Sex = $request->getProperty('Sex');
			if (isset($Sex)){
				$mEmployee = new \MVC\Mapper\Employee();
				$Employee = new \MVC\Domain\Employee(
					null,
					$request->getProperty('Name'),
					$request->getProperty('Sex'),					
					$request->getProperty('Phone'),
					$request->getProperty('Address'),
					$request->getProperty('IdFactory')
				);
				$mEmployee->insert($Employee);
				return self::statuses('CMD_OK');
			}
			$request->setObject('Factory', $Factory);
			$request->setProperty('Title', 'THÊM MỚI NHÂN VIÊN ['.mb_strtoupper($Factory->getName(), 'UTF8')."]");
									
			return self::statuses('CMD_DEFAULT');
		}
	}
?>