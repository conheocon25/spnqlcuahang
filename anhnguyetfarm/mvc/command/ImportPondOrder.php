<?php		
	namespace MVC\Command;	
	class ImportPondOrder extends Command{
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
			$Type = $request->getProperty("Type");
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mPond = new \MVC\Mapper\Pond();
			$mOI = new \MVC\Mapper\OrderImport();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Pond = $mPond->find($IdPond);
			$FDate = new \MVC\Library\Date($Date);
			
			if ($Type==1){
				$IdOrder = $mOI->exist1(array($IdPond, $Date));				
				$Title = "NHẬP THỨC ĂN ".$Pond->getName()." NGÀY ".$FDate->getDateFormat();
			}else{
				$IdOrder = $mOI->exist2(array($IdPond, $Date));				
				$Title = "NHẬP THUỐC ".$Pond->getName()." NGÀY ".$FDate->getDateFormat();
			}
			
			if ($IdOrder>0){
				$OE = $mOI->find($IdOrder);
			}else{				
				$OE = null;
			}
			
			$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
			$URLCall = "/".$App."/import/".$IdPond."/".$Date."/call/load/".$Type;
			$URLCallExe = "/".$App."/import/".$IdPond."/".$Date."/call/exe/".$Type;
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject('Pond', $Pond);
			$request->setObject('OE', $OE);
			$request->setProperty('Title', $Title);
			$request->setProperty('URLCall', $URLCall);
			$request->setProperty('URLCallExe', $URLCallExe);
		}
	}
?>