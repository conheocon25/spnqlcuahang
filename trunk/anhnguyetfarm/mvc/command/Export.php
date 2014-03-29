<?php
	namespace MVC\Command;	
	class Export extends Command {
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
			$mPond = new \MVC\Mapper\Pond();						
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Pond = $mPond->find($IdPond);
			$Session = $Pond->getCurrentSession();
			$Session1 = $Pond->getCurrentSession();
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setObject("Pond", $Pond);
			$request->setObject("Session", $Session);
			$request->setObject("Session1", $Session1);
						
			return self::statuses('CMD_DEFAULT');
		}
	}
?>