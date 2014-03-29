<?php		
	namespace MVC\Command;	
	class LogPondUpdLoad extends Command{
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
			$mPL = new \MVC\Mapper\PondLog();
			$mPond = new \MVC\Mapper\Pond();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Pond = $mPond->find($IdPond);
			$FDate = new \MVC\Library\Date($Date);
			$Title = "HAO HỤT ".$Pond->getName()." NGÀY ".$FDate->getDateFormat();
			
			$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();					
			$URL = "/".$App."/log/".$IdPond."/upd/exe/".$Date;
			
			$IdPL = $mPL->exist(array($IdPond, $Date));
			if ($IdPL>0){
				$PL = $mPL->find($IdPL);
				$Value = $PL->getCount();
			}else{
				$Value = 0;
			}
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('Title', $Title);
			$request->setProperty('Date', $Date);
			$request->setProperty('Value', $Value);
			$request->setProperty('URL', $URL);
		}
	}
?>
