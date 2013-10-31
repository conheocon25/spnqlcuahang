<?php	
	namespace MVC\Command;
	class InsertEmployeeLoan extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			
			$mEmployee = new \MVC\Mapper\Employee();
			$Employee = $mEmployee->find( $request->getProperty('IdEmployee'));
						
			$Date = $request->getProperty('Date');			
			if (isset($Date)){
				$mEmployeeLoan = new \MVC\Mapper\EmployeeLoan();
				$EmployeeLoan = new \MVC\Domain\EmployeeLoan(
					null,
					$request->getProperty('IdEmployee'),
					$request->getProperty('Date'),					
					$request->getProperty('Value'),
					$request->getProperty('Description')
				);
				$mEmployeeLoan->insert($EmployeeLoan);
				return self::statuses('CMD_OK');
			}
			
			$request->setObject('Employee', $Employee);			
			$request->setProperty('Title', 'THÊM KHOẢN ỨNG TIỀN CỦA '.mb_strtoupper($Employee->getName(), 'UTF8') );
			$request->setProperty('ParentsLinked', $Employee->getURLViewLoans());

			return self::statuses('CMD_DEFAULT');
		}
	}
?>