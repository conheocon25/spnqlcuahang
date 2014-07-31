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
			
			$TD->Ticket1 = 0;
			$TD->Ticket2 = 0;
			
			$mTDD->deleteByDate(array($TD->Date));
			while($DomainAll->valid()){
				$Domain = $DomainAll->current();				
				$DT = new \MVC\Domain\TrackingDomainDaily(null, $Domain->getId(), $TD->Date, 0, 0, 0, 0, 0, 0, 0 );
				
				$CLAll = $mCL->findByDateDomain(array($TD->Date, $Domain->getId()));
				$CLAll->rewind();
				while ($CLAll->valid()){
					$CL = $CLAll->current();					
					$DT->Ticket1 += $CL->getTicket1();
					$DT->Ticket2 += $CL->getTicket2();
					
					$TD->Ticket1 += $CL->getTicket1();
					$TD->Ticket2 += $CL->getTicket2();
			
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