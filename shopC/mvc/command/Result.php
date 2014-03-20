<?php		
	namespace MVC\Command;	
	class Result extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
														
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$IdTrack = $request->getProperty("IdTrack");
									
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mTracking 	= new \MVC\Mapper\Tracking();			
			$mConfig 	= new \MVC\Mapper\Config();
												
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Tracking = $mTracking->find($IdTrack);
			$TrackingAll = $mTracking->findAll();
						
			if (!isset($IdTrack)){
				$Tracking = $TrackingAll->current();
			}
			$TDAll = $Tracking->getDailyAll();
			if ($TDAll->count()==0){
				$Tracking->generateDaily();
			}
						
			$Title = $Tracking->getName();
			$Navigation = array(				
				array("KẾT QUẢ", "/result")
			);
			$ConfigName = $mConfig->findByName("NAME");
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------												
			$request->setProperty('Title'		, $Title);									
			$request->setObject('Navigation'	, $Navigation);
			$request->setObject('TrackingAll'	, $TrackingAll);
			$request->setObject('Tracking'		, $Tracking);
			$request->setObject('ConfigName'	, $ConfigName);
						
		}
	}
?>