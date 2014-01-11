<?php		
	namespace MVC\Command;	
	class ReportDailySelling extends Command {
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
			$mOrder 	= new \MVC\Mapper\OrderExport();
			$mTracking 	= new \MVC\Mapper\Tracking();
			$mTD 		= new \MVC\Mapper\TrackingDaily();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$TD 		= $mTD->find($IdTD);
			$Tracking	= $mTracking->find($IdTrack);
			
			$OrderAll = $mOrder->findByTracking( array(
				$TD->getDate(), 
				$TD->getDate()
			));
			
			$Value 		= 0;
			while ($OrderAll->valid()){
				$Order 	= $OrderAll->current();
				$Value 	+= $Order->getValue();
				$OrderAll->next();
			}			
			$NTotal = new \MVC\Library\Number($Value);
			
			//Cập nhật kết quả vào DB
			$TD->setImport($Value);
			$mTD->update($TD);
			
			$Title 		= "XUẤT HÀNG ".$TD->getDatePrint();
			$Navigation = array(
				array("BÁO CÁO"				, "/report"),
				array($Tracking->getName()	, $Tracking->getURLView())
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title'		, $Title);			
			$request->setObject('Navigation'	, $Navigation);
			$request->setObject('NTotal'		, $NTotal);
			$request->setObject('OrderAll'		, $OrderAll);
		}
	}
?>