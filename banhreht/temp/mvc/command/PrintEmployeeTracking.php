<?php	
	namespace MVC\Command;
	class PrintEmployeeTracking extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			require_once("mvc/PublicFunction.php");
			//------------------------------------------------------------
			
			$ses = \MVC\Base\SessionRegistry::instance();			
			$DateStart = $ses->getCurrentDateStart();
			$DateEnd = $ses->getCurrentDateEnd();
			
			//------------------------------------------------------------
			$mEmployee = new \MVC\Mapper\Employee();
			$IdEmployee = $request->getProperty('IdEmployee');
			$Employee = $mEmployee->find($IdEmployee);
			$mEP = new \MVC\Mapper\EmployeeProduce();	
			$EPs = $mEP->findByDate(array($IdEmployee, $DateStart, $DateEnd));
			$Generate1 = $mEP->evalByDate(array($IdEmployee, $DateStart, $DateEnd));
			
			$mEL = new \MVC\Mapper\EmployeeLoan();	
			$ELs = $mEL->findByDate(array($IdEmployee, $DateStart, $DateEnd));
			$Generate2 = $mEL->evalByDate(array($IdEmployee, $DateStart, $DateEnd));
			
			$fDateStart = date("d/m/Y", strtotime($DateStart));
			$fDateEnd = date("d/m/Y", strtotime($DateEnd));
						
			$request->setProperty('Title', "LƯƠNG ".$Employee->getName()." TỪ ". $fDateStart." ĐẾN ".$fDateEnd ); 
			$request->setObject('EPs',  $EPs);
			$request->setObject('ELs',  $ELs);
						
			$Generate3 = round($Generate1 - $Generate2, -3);
			$strGenerate3 = @\PF::readDigit($Generate3);
			
			$request->setProperty('Generate1', @\PF::formatCurrency($Generate1));
			$request->setProperty('Generate2', @\PF::formatCurrency($Generate2));
			$request->setProperty('Generate3', @\PF::formatCurrency($Generate3));
			$request->setProperty('strGenerate3', $strGenerate3);
															
			return self::statuses('CMD_OK');
		}
	}
?>
