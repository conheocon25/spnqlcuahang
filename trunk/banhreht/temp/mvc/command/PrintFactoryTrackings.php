<?php	
	namespace MVC\Command;
	class PrintFactoryTrackings extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			require_once("mvc/PublicFunction.php");
			//------------------------------------------------------------						
						
			$doAction = $request->getProperty('doAction');
			$ses = \MVC\Base\SessionRegistry::instance();
			$Month = $ses->getCurrentMonth();
			$Year = $ses->getCurrentYear();
						
			if (!isset($Month) || !isset($Year)){
				$Today = getdate();
				$Month = $Today['mon'];
				$Year = $Today['year'];
			}			
			$ses->setCurrentMonth($Month);
			$ses->setCurrentYear($Year);
			//------------------------------------------------------------
			$mFactory = new \MVC\Mapper\Factory();
			$Factory = $mFactory->find($request->getProperty('IdFactory'));
			
			$mFactoryTracking = new \MVC\Mapper\FactoryTracking();
			$FactoryTrackings = $mFactoryTracking->findBy(array(
				$request->getProperty('IdFactory'), $Month, $Year,
				$request->getProperty('IdFactory'), $Month, $Year,
				$request->getProperty('IdFactory'), $Month, $Year
			));
			$Summary = $mFactoryTracking->SumBy(array(
				$request->getProperty('IdFactory'), $Month, $Year,
				$request->getProperty('IdFactory'), $Month, $Year,
				$request->getProperty('IdFactory'), $Month, $Year
			));
						
			
			$request->setObject('FactoryTrackings', $FactoryTrackings);
						
			$request->setProperty('Title', 
				'THEO DÕI '.
				mb_strtoupper($Factory->getName(), 'UTF8').
				" THÁNG ".$Month."/".$Year
			);
			
			$mUser = new \MVC\Mapper\User();
			$User = $mUser->find($idUser);
			$request->setObject('User', $User);
						
			return self::statuses('CMD_OK');
		}
	}
?>
