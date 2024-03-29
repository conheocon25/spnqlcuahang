<?php		
	namespace MVC\Command;	
	class ReportCustomerTracking extends Command{
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
			$IdCustomer = $request->getProperty('IdCustomer');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mTracking 	= new \MVC\Mapper\Tracking();
			$mCustomer 	= new \MVC\Mapper\Customer();
			$mCT 		= new \MVC\Mapper\CustomerTracking();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Tracking 	= $mTracking->find($IdTrack);
			$Customer 	= $mCustomer->find($IdCustomer);
			$CustomerAll= $mCustomer->findAll();
			$CTAll		= $mCT->findByTime(array($IdCustomer, $Tracking->getDateStart(), $Tracking->getDateEnd()));
			
			$Title = "GIAO DỊCH CỦA ".$Customer->getName();
			$Navigation = array(
				array("BÁO CÁO", "/report"),
				array($Tracking->getName(), $Tracking->getURLView() )
			);
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title'		, $Title);
			$request->setObject('Navigation'	, $Navigation);
			$request->setObject('Tracking'		, $Tracking);
			$request->setObject('Customer'		, $Customer);
			$request->setObject('CustomerAll'	, $CustomerAll);
			$request->setObject('CTAll'			, $CTAll);
		}
	}
?>