<?php		
	namespace MVC\Command;	
	class Report extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------						
			$Page = $request->getProperty('Page');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mTracking 	= new \MVC\Mapper\Tracking();
			$mConfig 	= new \MVC\Mapper\Config();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Title = "BÁO CÁO";			
			$Navigation = array(
				
			);
			
			if (!isset($Page)) $Page=1;
			$Config = $mConfig->findByName("ROW_PER_PAGE");
			$TrackingAll	= $mTracking->findAll();
			$TrackingAll1 	= $mTracking->findByPage(array($Page, $Config->getValue() ));
			$PN = new \MVC\Domain\PageNavigation($TrackingAll->count(), $Config->getValue(), "/report" );
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setProperty('Title'		, $Title);						
			$request->setProperty('ActiveAdmin'	, 'Report');
			$request->setProperty('Page'		, $Page);
			$request->setObject('TrackingAll'	, $TrackingAll1);
			$request->setObject('PN'			, $PN);
			$request->setObject('Navigation'	, $Navigation);
		}
	}
?>