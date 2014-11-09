<?php	
	namespace MVC\Command;
	class ViewFactoryLogs extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//------------------------------------------------------------						
			$ses = \MVC\Base\SessionRegistry::instance();
			
			
			$IdFactory = $request->getProperty('IdFactory');
			$mFactory = new \MVC\Mapper\Factory();
			$Factory = $mFactory->find($IdFactory);
						
			$mFL = new \MVC\Mapper\FactoryLog();			
			$FLs = $mFL->findBy(array($IdFactory));
							
			$request->setObject('FLs', $FLs);
			$request->setObject('Factory', $Factory);
			$request->setProperty('Title', 'NHẬT KÍ TỔNG KẾT '.$Factory->getName());
			$request->setProperty('ParentsLinked', '?cmd=ViewFactories');
			
			return self::statuses('CMD_OK');
		}
	}
?>
