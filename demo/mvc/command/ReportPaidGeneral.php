<?php		
	namespace MVC\Command;	
	class ReportPaidGeneral extends Command{
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
			$mTracking 	= new \MVC\Mapper\Tracking();
			$mPaid 		= new \MVC\Mapper\PaidGeneral();
			$mTerm 		= new \MVC\Mapper\TermPaid();
			$mEmployee 	= new \MVC\Mapper\Employee();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Tracking = $mTracking->find($IdTrack);			
			$EmployeeAll = $mEmployee->findAll();
			$TermAll = $mTerm->findAll();
			$Title = "TỔNG HỢP CHI THÁNG ".\date("m", strtotime($Tracking->getDateStart()))."/".\date("Y", strtotime($Tracking->getDateStart()));
			$DateCurrent = "Vĩnh Long, ngày ".\date("d")." tháng ".\date("m")." năm ".\date("Y");
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title'		, $Title);
			$request->setProperty('DateCurrent'	, $DateCurrent);
			$request->setObject('Tracking'		, $Tracking);
			$request->setObject('TermAll'		, $TermAll);
			$request->setObject('EmployeeAll'	, $EmployeeAll);
		}
	}
?>