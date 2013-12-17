<?php		
	namespace MVC\Command;	
	class SellingCustomerOrderDelExe extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$IdCustomer = $request->getProperty("IdCustomer");
			$IdOrderExport = $request->getProperty("IdOrderExport");
			$IdResource = $request->getProperty("IdResource");
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
						
			$mCustomer = new \MVC\Mapper\Customer();			
			$mOED = new \MVC\Mapper\OrderExportDetail();
			$mOEDE = new \MVC\Mapper\OrderExportDetailExtra();
			$mResource = new \MVC\Mapper\Resource();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------												
			$IdOED = $mOED->exist(array($IdOrderExport, $IdResource));
			$IdOEDE = $mOEDE->exist(array($IdOrderExport, $IdResource));
			
			if ($IdOED>0){
				$mOED->delete(array($IdOED));
				$mOEDE->delete(array($IdOEDE));
			}
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------	
			$Page = $Session->getCurrentPage();
			$request->setProperty("IdApp", "minhtai");
			$request->setProperty("IdOrderExport", $IdOrderExport);
			$request->setProperty("IdCustomer", $IdCustomer);
			$request->setProperty("page", $Page);
			return self::statuses('CMD_OK');
		}
	}
?>