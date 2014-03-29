<?php
	namespace MVC\Command;
	class LogPondUpdExe extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$IdPond = $request->getProperty("IdPond");
			$Date = $request->getProperty("Date");
			$Count = $request->getProperty("Count");
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mPL = new \MVC\Mapper\PondLog();
			$mPond = new \MVC\Mapper\Pond();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$IdPL = $mPL->exist(array($IdPond, $Date));
			if ($IdPL>0){
				if (isset($Count)){
					$PL = $mPL->find($IdPL);
					$PL->setCount($Count);
					$mPL->update($PL);
				}
			}else{
				if (isset($Count)){
					$PL = new \MVC\Domain\PondLog(
						null,
						$IdPond,
						$Date,
						$Count
					);				
					$mPL->insert($PL);
				}
			}
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>
