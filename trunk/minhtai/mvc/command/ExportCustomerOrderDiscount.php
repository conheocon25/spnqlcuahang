<?php		
	namespace MVC\Command;	
	class ExportCustomerOrderDiscount extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$IdCustomer 	= $request->getProperty("IdCustomer");
			$IdOrder 		= $request->getProperty("IdOrder");
			$IdResource 	= $request->getProperty("IdResource");
			$Count 			= $request->getProperty("Count");
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------						
			$mCustomer 	= new \MVC\Mapper\Customer();
			$mResource 	= new \MVC\Mapper\Resource();
			$mOE 		= new \MVC\Mapper\OrderExport();
			$mOEDX 		= new \MVC\Mapper\OrderExportDetailExtra();
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Customer 	= $mCustomer->find($IdCustomer);
			$OE 		= $mOE->find($IdOrder);
			$Resource 	= $mResource->find($IdResource);
			
			//Kiểm tra xem record có tồn tại chưa
			$IdOED = $mOEDX->exist(array($IdOrder, $IdResource));
			
			if ($IdOED>0){
				if ($Count==0){
					$mOEDX->delete(array($IdOED));
				}else{
					$OID = $mOEDX->find($IdOED);
					$OID->setPrice($Price);
					$OID->setCount($Count);
					$mOEDX->update($OID);
				}
			}else{
				$OED = new \MVC\Domain\OrderExportDetailExtra(
					null,
					$IdOrder,
					$IdResource,
					$Count,
					0
				);
				$mOEDX->insert($OED);
			}			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			
		}
	}
?>