<?php		
	namespace MVC\Command;	
	class ReportDailyStore extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
														
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$IdTrack 	= $request->getProperty('IdTrack');
			$IdTD 		= $request->getProperty('IdTD');
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mTracking 	= new \MVC\Mapper\Tracking();
			$mTS 		= new \MVC\Mapper\TrackingStore();
			$mTD 		= new \MVC\Mapper\TrackingDaily();						
			$mResource 	= new \MVC\Mapper\Resource();
			$mConfig 	= new \MVC\Mapper\Config();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$ConfigName		= $mConfig->findByName("NAME");
			$Tracking 		= $mTracking->find($IdTrack);
			$TD				= $mTD->find($IdTD);
			
			$ResourceAll 	= $mResource->findAll();			
			//Xóa những dữ liệu tồn kho cũ
			$mTS->deleteByTracking(array($IdTrack, $IdTD));
						
			$Title = "TỒN KHO ".$TD->getDatePrint();
			$Navigation = array(				
				array("BÁO CÁO", "/report"),
				array($Tracking->getName(), $Tracking->getURLView() )
			);
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title'		, $Title);
			$request->setObject('ConfigName'	, $ConfigName);
			$request->setObject('Navigation'	, $Navigation);
			$request->setObject('Tracking'		, $Tracking);
			$request->setObject('TD'			, $TD);
			$request->setObject('ResourceAll'	, $ResourceAll);
			//$request->setObject('TSAll'			, $TSAll);
		}
	}
?>