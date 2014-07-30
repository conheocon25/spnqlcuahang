<?php
	namespace MVC\Command;	
	class ReportDailyImport extends Command{
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
			$mDomain 	= new \MVC\Mapper\Domain();			
			$mTracking 	= new \MVC\Mapper\Tracking();
			$mTD 		= new \MVC\Mapper\TrackingDaily();
			$mOrder		= new \MVC\Mapper\OrderImport();
			$mConfig 	= new \MVC\Mapper\Config();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$ConfigName = $mConfig->findByName("NAME");
			$TD 		= $mTD->find($IdTD);
			$Tracking	= $mTracking->find($IdTrack);
			$OrderAll	= $mOrder->findByTracking(array($TD->getDate(), $TD->getDate()));
			
			$SValue = 0;
			$SValue1 = 0;
			$SValue2 = 0;
			
			while($OrderAll->valid()){
				$Order = $OrderAll->current();
				
				$SValue += $Order->getValue();
				$SValue1 += $Order->getValue1();	
				$SValue2 += $Order->getValue2();
				
				$OrderAll->next();		
			}	
			
			$Title = $TD->getDatePrint();
			$Navigation = array(				
				array("BÁO CÁO", "/report"),
				array($Tracking->getName(), $Tracking->getURLView() )
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title'		, $Title);			
			$request->setObject('Navigation'	, $Navigation);
			
			$request->setProperty('SValue'		, number_format($SValue, 0, ',', '.')." đ");
			$request->setProperty('SValue1'		, number_format($SValue1, 0, ',', '.')." đ");
			$request->setProperty('SValue2'		, number_format($SValue2, 0, ',', '.')." đ");
						
			$request->setObject('TD'			, $TD);
			$request->setObject('OrderAll'		, $OrderAll);
			
			$request->setObject('ConfigName'	, $ConfigName);
		}
	}
?>