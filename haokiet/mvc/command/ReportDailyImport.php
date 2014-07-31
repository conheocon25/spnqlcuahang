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
			$mTracking 	= new \MVC\Mapper\Tracking();
			$mTD 		= new \MVC\Mapper\TrackingDaily();
			$mOrder		= new \MVC\Mapper\OrderImport();
			$mSupplier	= new \MVC\Mapper\Supplier();
			$mConfig 	= new \MVC\Mapper\Config();
			$mTSD 		= new \MVC\Mapper\TrackingSupplierDaily();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$ConfigName = $mConfig->findByName("NAME");
			$TD 		= $mTD->find($IdTD);
			$Tracking	= $mTracking->find($IdTrack);
			$SupplierAll= $mSupplier->findAll();
																				
			$mTSD->deleteByDate(array($TD->Date));
			while($SupplierAll->valid()){
				$Supplier = $SupplierAll->current();				
				$DS = new \MVC\Domain\TrackingSupplierDaily(null, $Supplier->getId(), $TD->Date, 0, 0, 0, 0);
				
				$OrderAll	= $mOrder->findByDateSupplier(array($TD->getDate(), $Supplier->getId()));
				$OrderAll->rewind();
				while($OrderAll->valid())
				{
					$Order = $OrderAll->current();
					
					$DS->TicketImport += $Order->getTicket();					
					$DS->TicketBack += $Order->getTicket1();
					$DS->ValueImport += $Order->getValue();
					$DS->ValueBack += $Order->getValue1();
					
					$OrderAll->next();
				}
				
				$mTSD->insert($DS);
				$SupplierAll->next();
			}
			//$mTD->update($TD);
			
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
			$request->setObject('TD'			, $TD);
									
			$request->setObject('ConfigName'	, $ConfigName);
		}
	}
?>