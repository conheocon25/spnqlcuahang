<?php	
	namespace MVC\Command;
	class ViewEmployees extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//------------------------------------------------------------						
			
			
			$mFactory = new \MVC\Mapper\Factory();
			$Factory = $mFactory->find($request->getProperty('IdFactory'));
			
			$mEmployee = new \MVC\Mapper\Employee();
			$Employees = $mEmployee->findByFactory(array($request->getProperty('IdFactory')));
			
			$request->setObject('Factory', $Factory);
			$request->setObject('Employees', $Employees);
			$request->setProperty('Title', 'DANH SÁCH NHÂN VIÊN '.mb_strtoupper($Factory->getName(), 'UTF8') );
			$request->setProperty('ParentsLinked', '?cmd=ViewFactories');
			
			return self::statuses('CMD_OK');
		}
	}
?>
