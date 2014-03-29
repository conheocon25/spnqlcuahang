<?php
	namespace MVC\Command;	
	class ExportPondInsLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdPond = $request->getProperty('IdPond');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mStore = new \MVC\Mapper\Store();
			$mPond = new \MVC\Mapper\Pond();
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Stores = $mStore->findAll();
			$Pond = $mPond->find($IdPond);
			$Title = "NHẬP HÀNG ".mb_strtoupper($Pond->getName(), 'UTF8');
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setProperty('Title', $Title);
			$request->setObject('Pond', $Pond);
			$request->setObject('Stores', $Stores);
						
			return self::statuses('CMD_DEFAULT');
		}
	}
?>