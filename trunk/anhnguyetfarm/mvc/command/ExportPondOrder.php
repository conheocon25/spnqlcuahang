<?php		
	namespace MVC\Command;	
	class ExportPondOrder extends Command{
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
			$mOE = new \MVC\Mapper\OrderExport();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Pond = $mPond->find($IdPond);
			$FDate = new \MVC\Library\Date($Date);
			
			if ($Type==1){
				$IdOrder = $mOE->exist1(array($IdPond, $Date));				
				$Title = "XUẤT THỨC ĂN ".$Pond->getName()." NGÀY ".$FDate->getDateFormat();
			}else{
				$IdOrder = $mOE->exist2(array($IdPond, $Date));				
				$Title = "XUẤT THUỐC ".$Pond->getName()." NGÀY ".$FDate->getDateFormat();
			}
			
			if ($IdOrder>0){
				$OE = $mOE->find($IdOrder);
			}else{				
				$OE = null;
			}
			
			$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();			
			$URLCall = "/".$App."/export/".$IdPond."/".$Date."/call/load/".$Type;
			$URLCallExe = "/".$App."/export/".$IdPond."/".$Date."/call/exe/".$Type;
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