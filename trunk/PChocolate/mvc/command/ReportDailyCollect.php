<?php		
	namespace MVC\Command;	
	class ReportDailyCollect extends Command {
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
			$mCollect 			= new \MVC\Mapper\CollectGeneral();
			$mCollectCustomer 	= new \MVC\Mapper\CollectCustomer();
			$mTracking 			= new \MVC\Mapper\Tracking();
			$mTD 				= new \MVC\Mapper\TrackingDaily();
			$mConfig 			= new \MVC\Mapper\Config();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$ConfigName	= $mConfig->findByName("NAME");
			$TD 		= $mTD->find($IdTD);
			$Tracking	= $mTracking->find($IdTrack);
			
			$Value 		= 0;
			//Tiền thu từ các khoản chung chung
			$CollectAll = $mCollect->findByTracking( array(
				$TD->getDate(), 
				$TD->getDate()
			));
						
			while ($CollectAll->valid()){
				$Collect 	= $CollectAll->current();
				$Value 	   += $Collect->getValue();
				$CollectAll->next();
			}
			$NTotal1 = new \MVC\Library\Number($Value);

			//Tiền thu từ TẤT CẢ KHÁCH HÀNG
			$Value1 = 0;
			$CollectCustomerAll = $mCollectCustomer->findByTracking1( array($TD->getDate(), $TD->getDate()));
			while ($CollectCustomerAll->valid()){
				$Collect 	= $CollectCustomerAll->current();
				$Value1 	+= $Collect->getValue();
				$CollectCustomerAll->next();
			}			
			$NTotal2 = new \MVC\Library\Number($Value1);
			
			$NTotal = new \MVC\Library\Number($Value1 + $Value);
			
			//Cập nhật kết quả vào DB
			$TD->setCollect($Value1 + $Value);
			$mTD->update($TD);
			
			$Title 		= "TIỀN THU ".$TD->getDatePrint();
			$Navigation = array(
				array("BÁO CÁO"				, "/report"),
				array($Tracking->getName()	, $Tracking->getURLView())
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title'			, $Title);
			$request->setObject('Navigation'		, $Navigation);
			$request->setObject('ConfigName'		, $ConfigName);
			
			$request->setObject('NTotal'			, $NTotal);
			$request->setObject('NTotal1'			, $NTotal1);
			$request->setObject('NTotal2'			, $NTotal2);
			
			$request->setObject('CollectAll'		, $CollectAll);
			$request->setObject('CollectCustomerAll', $CollectCustomerAll);
		}
	}
?>