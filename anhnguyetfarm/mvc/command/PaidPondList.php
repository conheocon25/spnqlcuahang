<?php		
	namespace MVC\Command;	
	class PaidPondList extends Command{
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
			$Date = $request->getProperty('Date');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mPond = new \MVC\Mapper\Pond();
			$mPP = new \MVC\Mapper\PaidPond();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Pond = $mPond->find($IdPond);
			$PPs = $mPP->findByTracking(array($IdPond, $Date, $Date));
			
			$FDate = new \MVC\Library\Date($Date);
			$Title = "CHI PHÍ ".$Pond->getName()." NGÀY ".$FDate->getDateFormat();
			
			$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();			
			$URLIns = "/".$App."/paid/pond/".$IdPond."/".$Date."/ins/load";
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title', $Title);
			$request->setProperty('URLIns', $URLIns);
			$request->setObject('Pond', $Pond);
			$request->setObject('PPs', $PPs);
			
		}
	}
?>