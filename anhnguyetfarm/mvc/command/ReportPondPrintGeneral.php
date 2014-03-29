<?php		
	namespace MVC\Command;	
	class ReportPondPrintGeneral extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
							
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdPond = $request->getProperty('IdPond');
			$IdPondSession = $request->getProperty("IdPondSession");
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mPond = new \MVC\Mapper\Pond();
			$mPondSession = new \MVC\Mapper\PondSession();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Pond = $mPond->find($IdPond);
			$PondSession = $mPondSession->find($IdPondSession);
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject('Pond', $Pond);
			$request->setObject('PondSession', $PondSession);
			
		}
	}
?>