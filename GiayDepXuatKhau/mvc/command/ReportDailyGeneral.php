<?php		
	namespace MVC\Command;	
	class ReportDailyGeneral extends Command {
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
			$mTDR 		= new \MVC\Mapper\TrackingDailyResource();
			$mResource 	= new \MVC\Mapper\Resource();
			$mOID	 	= new \MVC\Mapper\OrderImportDetail();
			$mOED	 	= new \MVC\Mapper\OrderExportDetail();
			$mConfig 	= new \MVC\Mapper\Config();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$ConfigName = $mConfig->findByName("NAME");
			$Tracking 	= $mTracking->find($IdTrack);
			$TD 		= $mTD->find($IdTD);
			$ResourceAll= $mResource->findAll();
						
			//Chưa có dữ liệu thì phát sinh dữ liệu báo cáo MẶC ĐỊNH LƯỢNG HÀNG TỒN
			$TDRAll = $TD->getTDResourceAll();
			if ($TDRAll->count() == 0){
				
				while ($ResourceAll->valid()){
					$Resource = $ResourceAll->current();					
					$TDR = new \MVC\Domain\TrackingDailyResource(
						null,
						$IdTD,
						$Resource->getId(),
						0,
						0,
						0,
						$Resource->getPriceImport()
					);					
					$mTDR->insert($TDR);
					$ResourceAll->next();
				}
			}else //NẾU ĐÃ CÓ THÌ SẼ TIẾN HÀNH CẬP NHẬT			
			{
				while ($TDRAll->valid()){
					$TDR = $TDRAll->current();
					
					$TDR1 = $mTDR->findByPre(array($TDR->getIdTD(), $TDR->getIdResource()));
					if ($TDR1->count()>0){
						$CountOld = $TDR1->current()->getCountNew();
					}else{
						$CountOld = 0;
					}					
					$CountImport = $mOID->trackByCount(array($TDR->getIdResource(), $TD->getDate(), $TD->getDate() ));
					$CountExport = $mOED->trackByCount(array($TDR->getIdResource(), $TD->getDate(), $TD->getDate() ));
					
					$TDR->setCountOld( 		$CountOld 		);
					$TDR->setCountImport( 	$CountImport 	);
					$TDR->setCountExport( 	$CountExport 	);
					$mTDR->update($TDR);
					
					$TDRAll->next();
				}
			}
									
			$Title = $TD->getDatePrint()." TỔNG HỢP";
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