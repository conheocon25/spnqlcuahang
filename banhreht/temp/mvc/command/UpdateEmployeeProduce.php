<?php	
	namespace MVC\Command;
	class UpdateEmployeeProduce extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			
			
			$IdFactory = $request->getProperty('IdFactory');
			$mFactory = new \MVC\Mapper\Factory();
			$Factory = $mFactory->find( $request->getProperty('IdFactory'));
			
			$IdEmployee = $request->getProperty('IdEmployee');
			$mEmployee = new \MVC\Mapper\Employee();
			$Employee = $mEmployee->find($IdEmployee);
						
			$mEmployeeProduce = new \MVC\Mapper\EmployeeProduce();
			$IdProduct = $request->getProperty('IdProduct');
			$mProduct = new \MVC\Mapper\Product();
			$Product = $mProduct->find($IdProduct);
			$Date = $request->getProperty('Date');															

			$Id = $mEmployeeProduce->checkExist(array(
				$request->getProperty('IdEmployee'),
				$IdProduct,
				$request->getProperty('Date')
			));			
			if ($Id == 0){
				$EmployeeProduce = new \MVC\Domain\EmployeeProduce(
					null,
					$IdEmployee,
					$Date,
					$IdProduct,
					"",
					0,
					40
				);
				$mEmployeeProduce->insert($EmployeeProduce);
				$mEmployeeProduce->update($EmployeeProduce);
				$Id = $EmployeeProduce->getId();
			}
			return self::statuses('CMD_DEFAULT');
		}
	}
?>