<?php	
	namespace MVC\Command;
	class AjaxUpdateEmployeeProduce extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			$ses = \MVC\Base\SessionRegistry::instance();
			
			$ColumnId = $request->getProperty('columnId');
			$RowId = $request->getProperty('rowId');
					
			$IdFactory = $ses->getCurrentFactory();			
			$mFactory = new \MVC\Mapper\Factory();
			$Factory = $mFactory->find($IdFactory);
			$Type = $Factory->getType();
			if ($Type%10==1){			
				$TableProduct = array(1, 9, 15, 20, 25, 34, 39);
			}
			else{				
				$TableProduct = array(2, 10, 16, 21, 26, 30, 35, 40);
			}
			$IdProduct = $TableProduct[$ColumnId-1];
			
			$Date = $ses->getCurrentDate();
			$Value = $request->getProperty('value');
			
			$mEmployee = new \MVC\Mapper\Employee();
			$Employee = $mEmployee->findByPositionInFactory(array($IdFactory, $RowId));
			$IdEmployee = $Employee->getId();
						
			$mEP = new \MVC\Mapper\EmployeeProduce();															
			$Id = $mEP->checkExist(array(
				$IdEmployee,
				$IdProduct,
				$Date
			));
			if ($Id == 0){
				if ($Value>0){
					$EP = new \MVC\Domain\EmployeeProduce(
						null,
						$IdEmployee,
						$Date,
						$IdProduct,
						"",
						$Value,
						40
					);
					$mEP->insert($EP);
					$mEP->update($EP);
					return self::statuses('CMD_DEFAULT');
				}	
			}else{
				if ($Value==0){
					$mEP->delete(array($Id));
					return self::statuses('CMD_DEFAULT');
				}
				$EP = $mEP->find($Id);
				$EP->setQuantity($Value);
			}
			$mEP->update($EP);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>