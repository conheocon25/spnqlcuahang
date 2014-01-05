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
			$Price 			= $request->getProperty("Price");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------						
			$mCustomer 	= new \MVC\Mapper\Customer();
			$mResource 	= new \MVC\Mapper\Resource();
			$mOE 		= new \MVC\Mapper\OrderExport();
			$mOED 		= new \MVC\Mapper\OrderExportDetail();
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Customer 	= $mCustomer->find($IdCustomer);
			$OE 		= $mOE->find($IdOrder);
			$Resource 	= $mResource->find($IdResource);
			
			//Kiểm tra xem record có tồn tại chưa
			$IdOED = $mOED->exist(array($IdOrder, $IdResource));
			
			if ($IdOED>0){
				if ($Count==0){
					$mOED->delete(array($IdOED));
				}else{
					$OID = $mOED->find($IdOED);
					$OID->setPrice($Price);
					$OID->setCount($Count);
					$mOED->update($OID);
				}
			}else{
				$OED = new \MVC\Domain\OrderExportDetail(
					null,
					$IdOrder,
					$IdResource,
					$Count,
					$Price
				);
				$mOED->insert($OED);
			}			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
		}
	}
?>