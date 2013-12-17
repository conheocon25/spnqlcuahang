<?php		
	namespace MVC\Command;	
	class SellingCustomerOrderDelLoad extends Command{
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
			$mResource = new \MVC\Mapper\Resource();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Customer = $mCustomer->find($IdCustomer);
			$Resource = $mResource->find($IdResource);
						
			$Title = "XÓA CHI TIẾT ".mb_strtoupper($Resource->getName(), 'UTF8');
						
			$IdOED = $mOED->exist(array($IdOrderExport, $IdResource));
			$OED = $mOED->find($IdOED);
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('Title', $Title);
			$request->setObject('OED', $OED);
		}
	}
?>