<?php
	namespace MVC\Command;	
	class SettingPondSessionUpdLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdPondSession = $request->getProperty('IdPondSession');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mPondSession = new \MVC\Mapper\PondSession();
								
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$PondSession = $mPondSession->find($IdPondSession);
			$Title = "CẬP NHẬT VỤ NUÔI ".$PondSession->getPond()->getName();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setObject('PondSession', $PondSession);
			$request->setProperty('Title', $Title);
		}
	}
?>
