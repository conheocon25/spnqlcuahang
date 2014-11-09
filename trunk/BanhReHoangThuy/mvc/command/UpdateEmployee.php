<?php	
	namespace MVC\Command;
	class UpdateEmployee extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------						
			$mFactory = new \MVC\Mapper\Factory();
			$Factory = $mFactory->find( $request->getProperty('IdFactory'));
			$mEmployee = new \MVC\Mapper\Employee();
			$Employee = $mEmployee->find($request->getProperty('IdEmployee'));
				
			$Name = $request->getProperty('Name');
			if (isset($Name)){								
				$Employee->setName($request->getProperty('Name'));
				$Employee->setSex($request->getProperty('Sex'));
				$Employee->setPhone($request->getProperty('Phone'));
				$Employee->setAddress($request->getProperty('Address'));
				$mEmployee->update($Employee);
				return self::statuses('CMD_OK');
			}			
			
			$request->setObject('Factory', $Factory);
			$request->setObject('Employee', $Employee);
			$request->setProperty('Title', 'CẬP NHẬT THÔNG TIN CỦA '.mb_strtoupper($Employee->getName(), 'UTF8'));
			//echo "co vao day1";
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>