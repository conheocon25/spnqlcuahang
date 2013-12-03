<?php		
	namespace MVC\Command;	
	class ReportCustomer extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
														
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$IdTrack = $request->getProperty('IdTrack');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mTracking = new \MVC\Mapper\Tracking();
			$mCustomer = new \MVC\Mapper\Customer();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$TrackingAll 	= $mTracking->findAll();
			$Tracking 		= $mTracking->find($IdTrack);
			$CustomerAll 	= $mCustomer->findAll();
									
			$Title = "CÔNG NỢ KHÁCH HÀNG";
			$Navigation = array(				
				array("BÁO CÁO", "/report"),
				array($Tracking->getName(), $Tracking->getURLView() )
			);
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title'		, $Title);			
			$request->setObject('Tracking'		, $Tracking);
			$request->setObject('TrackingAll'	, $TrackingAll);
			$request->setObject('Navigation'	, $Navigation);
			$request->setObject('CustomerAll'	, $CustomerAll);			
		}
	}
?>