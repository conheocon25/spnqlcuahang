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
			$mOID 		= new \MVC\Mapper\OrderImportDetail();
			$mOED 		= new \MVC\Mapper\OrderExportDetail();
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
			
			$Sum = 0;
			
			while ($ResourceAll->valid())
			{
				$Resource = $ResourceAll->current();
				
				$TS1 	 = $mTS->findByPre( array( $IdTD, $Resource->getId()) );
				if ($TS1->count() <= 0) $CountOld=0;
				else $CountOld = $TS1->current()->getCountRemain();
				
				$CountImport = $mOID->trackByCount( array($Resource->getId(), $TD->getDate(), $TD->getDate()));
				$CountExport = $mOED->trackByCount( array($Resource->getId(), $TD->getDate(), $TD->getDate()));
				
				$TS = new \MVC\Domain\TrackingStore(
					null,
					$IdTrack,
					$IdTD,
					$Resource->getId(),
					$CountOld,
					$CountImport,
					$CountExport,
					$Resource->getPrice()
				);
				$mTS->insert($TS);
				$Sum += $TS->getCountRemainValue();
				
				$ResourceAll->next();
			}			
			$TSAll = $mTS->findByDaily(array($IdTrack, $IdTD));
			
			$NSum = new \MVC\Library\Number($Sum);
			
			$TD->setStore($Sum);
			$mTD->update($TD);
						
			$Title = "TỒN KHO ".$TD->getDatePrint();
			$Navigation = array(				
				array("BÁO CÁO", "/report"),
				array($Tracking->getName(), $Tracking->getURLView() )
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title'		, $Title);
			
			$request->setProperty('Sum'			, $NSum);
			$request->setObject('ConfigName'	, $ConfigName);
			$request->setObject('Navigation'	, $Navigation);
			$request->setObject('Tracking'		, $Tracking);
			$request->setObject('TD'			, $TD);
			$request->setObject('ResourceAll'	, $ResourceAll);
			$request->setObject('TSAll'			, $TSAll);
		}
	}
?>