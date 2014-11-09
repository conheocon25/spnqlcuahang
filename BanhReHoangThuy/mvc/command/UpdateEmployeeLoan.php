<?php	
	namespace MVC\Command;
	class UpdateEmployeeLoan extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			
			$IdEmployee = $request->getProperty('IdEmployee');
			$IdFactory = $request->getProperty('IdFactory');
			$Date = $request->getProperty('Date');
			
			$mEmployee = new \MVC\Mapper\Employee();
			$Employee = $mEmployee->find( $IdEmployee);			
			$mEmployeeLoan = new \MVC\Mapper\EmployeeLoan();
												
			$Id = $request->getProperty('Id');
			if (isset($Id)){
				$EmployeeLoan = $mEmployeeLoan->find($request->getProperty('Id'));
				$EmployeeLoan->setValue($request->getProperty('Value'));
				$EmployeeLoan->setDescription($request->getProperty('Description'));
				$mEmployeeLoan->update($EmployeeLoan);
				
				$request->setProperty('IdFactory', $Employee->getFactory());				
				return self::statuses('CMD_OK');
			}
			$Id = $mEmployeeLoan->checkExist(array(
				$IdEmployee,
				$Date
			));
			if ($Id == 0){
				$EmployeeLoan = new \MVC\Domain\EmployeeLoan(
					null,
					$IdEmployee,
					$Date,										
					0,
					""
				);
				$mEmployeeLoan->insert($EmployeeLoan);
				$Id = $EmployeeLoan->getId();
			}
			$EmployeeLoan = $mEmployeeLoan->find($Id);
			$request->setObject('Employee', $Employee);
			$request->setObject('EmployeeLoan', $EmployeeLoan);
							
			$request->setProperty('Title', 'CẬP NHẬT ỨNG TIỀN CỦA ['.mb_strtoupper($Employee->getName(), 'UTF8').']');
			$request->setProperty('ParentsLinked', '');
									
			return self::statuses('CMD_DEFAULT');
		}
	}
?>