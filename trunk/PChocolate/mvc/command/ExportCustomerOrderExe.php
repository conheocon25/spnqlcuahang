<?php		
	namespace MVC\Command;	
	class ExportCustomerOrderExe extends Command{
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
			$Count1 		= $request->getProperty("Count1");
			$Price 			= $request->getProperty("Price");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
						
			$mCustomer 		= new \MVC\Mapper\Customer();
			$mOrder 		= new \MVC\Mapper\OrderExport();
			$mOrderDetail 	= new \MVC\Mapper\OrderExportDetail();
			$mResource 		= new \MVC\Mapper\Resource();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Customer 		= $mCustomer->find($IdCustomer);
			$Order 			= $mOrder->find($IdOrder);
			$Resource 		= $mResource->find($IdResource);
			
			//Kiểm tra xem record có tồn tại chưa
			$IdOID = $mOrderDetail->exist(array($IdOrder, $IdResource));
			
			if ($IdOID>0){
				if ($Count==0){
					$mOrderDetail->delete(array($IdOID));
				}else{
					$OID = $mOrderDetail->find($IdOID);
					$OID->setPrice($Price);
					$OID->setCount($Count);
					$OID->setCount1($Count1);
					$mOrderDetail->update($OID);
				}
			}else{
				$OID = new \MVC\Domain\OrderExportDetail(
					null,
					$IdOrder,
					$IdResource,
					$Count,
					0,
					$Price
				);
				$mOrderDetail->insert($OID);
			}			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			
		}
	}
?>