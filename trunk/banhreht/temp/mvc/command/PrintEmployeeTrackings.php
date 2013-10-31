<?php	
	namespace MVC\Command;
	class PrintEmployeeTrackings extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			require_once("mvc/PublicFunction.php");
			//------------------------------------------------------------						
			
			$ses = \MVC\Base\SessionRegistry::instance();			
			$DateStart = $ses->getCurrentDateStart();
			$DateEnd = $ses->getCurrentDateEnd();
			
			//------------------------------------------------------------
			$IdFactory = $ses->getCurrentFactory();
			$mFactory = new \MVC\Mapper\Factory();
			$Factory = $mFactory->find($IdFactory);
			
			$mEmployeeTracking = new \MVC\Mapper\EmployeeTracking();
			$EmployeeTrackings = $mEmployeeTracking->findBy(array(
				$DateStart, $DateEnd,$DateStart, $DateEnd,
				$IdFactory
			));
			
			
			$Id = 1;
			while($EmployeeTrackings->valid()){
				$ET = $EmployeeTrackings->current();
				$ET->setId($Id);
				$Id++;
				$EmployeeTrackings->next();				
			}
			
			$Summary = $mEmployeeTracking->SumBy(array(
				$DateStart, $DateEnd,$DateStart, $DateEnd,
				$IdFactory
			));
			$Summary = round($Summary, -3);
						
			$request->setProperty('Summary', number_format($Summary, 0, ',','.')." VNĐ");
			$request->setProperty('SummaryString', "(". @\PF::ReadDigit($Summary) . " đồng)");
			
			$request->setObject('Factory', $Factory);						
			$request->setObject('EmployeeTrackings', $EmployeeTrackings);
			
			$fDateStart = date("d/m/Y", strtotime($DateStart));
			$fDateEnd = date("d/m/Y", strtotime($DateEnd));
						
			$request->setProperty('Title', "BẢNG LƯƠNG TỪ ". $fDateStart." ĐẾN ".$fDateEnd ); 
			$request->setProperty('Name',  mb_strtoupper($Factory->getName(), 'UTF8')	);
												
			return self::statuses('CMD_OK');
		}
	}
?>
