<?php		
	namespace MVC\Command;	
	class PaidPondListInsLoad extends Command{
		function doExecute( \MVC\Controller\Request $request ){
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
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
						
			$mPond = new \MVC\Mapper\Pond();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$FDate = new \MVC\Library\Date($Date);
			$Pond = $mPond->find($IdPond);			
			$Title = "CHI TIỀN ".$Pond->getName()." NGÀY ".$FDate->getDateFormat();
			
			$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();			
			$URLIns = "/".$App."/paid/pond/".$IdPond."/".$Date."/ins/exe";
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('Title', $Title);
			$request->setProperty('URLIns', $URLIns);
			$request->setObject('Pond', $Pond);
		}
	}
?>