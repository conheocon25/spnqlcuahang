<?php
	namespace MVC\Command;
	class ViewEmployeeTrackings extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			require_once("mvc/PublicFunction.php");
			//------------------------------------------------------------						
			$request->setProperty('flagInput', false);
			$ses = \MVC\Base\SessionRegistry::instance();
			$DateStart = $request->getProperty('DateStart');
			$DateEnd = $request->getProperty('DateEnd');
							
			$mFactory = new \MVC\Mapper\Factory();
			$IdFactory = $request->getProperty('IdFactory');
			$Factory = $mFactory->find($IdFactory);
			$request->setObject('Factory', $Factory);
			$ses->setCurrentFactory($IdFactory);
				
			if (!isset($DateStart)){
				$Today = getdate();				
				$DateStart = date('Y-m-d', mktime(0,0,0,$Today['mon'],1,$Today['year']));
				$DateEnd = date('Y-m-d', mktime(0,0,0,$Today['mon'],$Today['mday'],$Today['year']));				
				$request->setProperty('flagInput', true);
			}
			else{
				//------------------------------------------------------------
				$ses->setCurrentDateStart($DateStart);
				$ses->setCurrentDateEnd($DateEnd);
										
				$mEmployeeTracking = new \MVC\Mapper\EmployeeTracking();
				$EmployeeTrackings = $mEmployeeTracking->findBy(array(
					$DateStart, 
					$DateEnd,
					$DateStart, 
					$DateEnd,
					$IdFactory
				));
				$request->setObject('EmployeeTrackings', $EmployeeTrackings);
				$request->setProperty('PrintURLEmployeeTrackings', '?cmd=PrintEmployeeTrackings&IdFactory='.$IdFactory);
				$request->setProperty('flagInput', false);
			}
			$request->setProperty('DateStart', $DateStart);
			$request->setProperty('DateEnd', $DateEnd);
			
			$fDateStart = date("d/m/Y", strtotime($DateStart));
			$fDateEnd = date("d/m/Y", strtotime($DateEnd));
			$request->setProperty('Title', 'THEO DÕI BẢNG LƯƠNG '.	mb_strtoupper($Factory->getName(), 'UTF8').	" TỪ NGÀY ".$fDateStart." ĐẾN NGÀY ".$fDateEnd	);
									
			return self::statuses('CMD_OK');
		}
	}
?>
