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
			$IdDomain 	= $request->getProperty('IdDomain');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mDomain 	= new \MVC\Mapper\Domain();			
			$mTracking 	= new \MVC\Mapper\Tracking();
			$mTD 		= new \MVC\Mapper\TrackingDaily();
			$mTDD 		= new \MVC\Mapper\TrackingDomainDaily();
			$mCL 		= new \MVC\Mapper\CustomerLog();
			$mConfig 	= new \MVC\Mapper\Config();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$ConfigName = $mConfig->findByName("NAME");
			$TD 		= $mTD->find($IdTD);
			$Tracking	= $mTracking->find($IdTrack);
			$DomainAll	= $mDomain->findAll();
			
			$TD->TicketSelling = 0;
			$TD->TicketSellingBack = 0;
			$TD->TicketSellingValue = 0;
			$TD->PaidTicket = 0;
			$TD->PaidDebt	= 0;
			$TD->Debt 		= 0;
			$TD->PaidDebtRemain = 0;
			$TD->PaidTicketRemain = 0;
			
			$mTDD->deleteByDate(array($TD->Date));
			while($DomainAll->valid()){
				$Domain = $DomainAll->current();				
				$DT = new \MVC\Domain\TrackingDomainDaily(null, $Domain->getId(), $TD->Date, 0, 0, 0, 0, 0, 0, 0, 0);
				
				$CLAll = $mCL->findByDateDomain(array($TD->Date, $Domain->getId()));
				$CLAll->rewind();
				while ($CLAll->valid()){
					$CL = $CLAll->current();					
					
					$DT->TicketSelling 		+= $CL->getTicket1();
					$DT->TicketSellingBack 	+= $CL->getTicket2();
					$TD->TicketSelling 		+= $CL->getTicket1();
					$TD->TicketSellingBack	+= $CL->getTicket2();
					
					$DT->TicketValue 		+= $CL->getTicketValue();
					$TD->TicketSellingValue += $CL->getTicketValue();
										
					$TD->PaidTicket 		+= $CL->getPaid1();
					$DT->PaidTicket 		+= $CL->getPaid1();
					
					$TD->PaidDebt 			+= $CL->getPaid2();
					$DT->PaidDebt 			+= $CL->getPaid2();
					
					$TD->Debt 				+= $CL->getDebt();
					$TD->PaidDebtRemain		+= $CL->getPaid1Remain();
					$TD->PaidTicketRemain	+= $CL->getPaid2Remain();
					
					$CLAll->next();
				}
				$mTDD->insert($DT);				
				$DomainAll->next();
			}
			$mTD->update($TD);
			
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
			$request->setObject('DomainAll'		, $DomainAll);
			
			$request->setObject('ConfigName'	, $ConfigName);
		}
	}
?>