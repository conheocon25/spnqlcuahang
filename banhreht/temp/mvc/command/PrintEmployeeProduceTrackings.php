<?php	
	namespace MVC\Command;
	class PrintEmployeeProduceTrackings extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			require_once("mvc/PublicFunction.php");
			//------------------------------------------------------------						
		
			
			$doAction = $request->getProperty('doAction');
			$ses = \MVC\Base\SessionRegistry::instance();
			$Today = $ses->getCurrentDate();			
			if (!isset($Today)){
				$CToday = getdate();
				$Today = $CToday['year']."-".$CToday['mon']."-".$CToday['mday'];
			}
			if ($doAction == "next"){				
				$cd = strtotime($Today);
				$Today = date('Y-m-d', mktime(0,0,0,date('m',$cd),date('d',$cd)+1,date('Y',$cd)));				
			}
			if ($doAction == "before"){
				$cd = strtotime($Today);
				$Today = date('Y-m-d', mktime(0,0,0,date('m',$cd),date('d',$cd)-1,date('Y',$cd)));
			}
			$ses->setCurrentDate($Today);
			$ses->setCurrentFactory($request->getProperty('IdFactory'));
			//------------------------------------------------------------
			$mFactory = new \MVC\Mapper\Factory();
			$Factory = $mFactory->find($request->getProperty('IdFactory'));
			
			$mEmployeeProduceTracking = new \MVC\Mapper\EmployeeProduceTracking();
			$EmployeeProduceTrackings = $mEmployeeProduceTracking->findBy(array(
				$Today,
				$Today,$Today,$Today,$Today,
				$Today,$Today,$Today,$Today,
				$Today,$Today,$Today,$Today,
				$Today,$Today,$Today,
				$request->getProperty('IdFactory')
			));
			$Id = 1;
			while ($EmployeeProduceTrackings->valid()){
				$EPT = $EmployeeProduceTrackings->current();
				$EPT->setId($Id);
				$Id++;
				$EmployeeProduceTrackings->next();
			}
			
			$request->setObject('Factory', $Factory);
			$request->setObject('EmployeeProduceTrackings', $EmployeeProduceTrackings);
						
			$fToday = date("d/m/Y", strtotime($Today));
			$request->setProperty('Title', 
				'BẢNG CHẤM CÔNG ['.
				mb_strtoupper($Factory->getName(), 'UTF8').
				"] NGÀY ".$fToday
			);
			$request->setProperty('Title1', 
				'GIAO NGUYÊN LIỆU['.
				mb_strtoupper($Factory->getName(), 'UTF8').
				"] NGÀY ".$fToday
			);
		}
	}
?>
