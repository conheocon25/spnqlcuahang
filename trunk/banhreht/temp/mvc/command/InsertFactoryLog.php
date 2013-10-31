<?php	
	namespace MVC\Command;
	class InsertFactoryLog extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
						
			$IdFactory = $request->getProperty('IdFactory');
			$mFactory = new \MVC\Mapper\Factory();
			$Factory= $mFactory->find( $IdFactory);
									
			$DateStart = $request->getProperty('DateStart');
			if (isset($DateStart)){
				$mFL = new \MVC\Mapper\FactoryLog();
				$FL = new \MVC\Domain\FactoryLog(
					null,
					$IdFactory,
					$request->getProperty('DateStart'),
					$request->getProperty('DateEnd')
				);
				$mFL->insert($FL);
				return self::statuses('CMD_OK');
			}						
			$request->setProperty('Title', 'THÊM NHẬT KÍ TỔNG KẾT CỦA '.$Factory->getName());
						
			return self::statuses('CMD_DEFAULT');
		}
	}
?>