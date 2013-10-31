<?php		
	namespace MVC\Command;	
	class ImportSupplierOrderExe extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$Data = $request->getProperty('Data');
										
			$IdSupplier = $Data[0];
			$IdOrder 	= $Data[1];
			$IdResource = $Data[2];
			$Count 		= $Data[3];
			$Price 		= $Data[4];
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
						
			$mSupplier = new \MVC\Mapper\Supplier();
			$mOI = new \MVC\Mapper\SupplierOrder();
			$mOID = new \MVC\Mapper\SupplierOrderDetail();
			$mResource = new \MVC\Mapper\Resource();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Supplier = $mSupplier->find($IdSupplier);
			$OI = $mOI->find($IdOrder);
			$Resource = $mResource->find($IdResource);
			
			//Kiểm tra xem record có tồn tại chưa
			$IdOID = $mOID->exist(array($IdOrder, $IdResource));
			
			if ($IdOID>0){
				if ($Count==0){
					$mOID->delete(array($IdOID));
				}else{
					$OID = $mOID->find($IdOID);
					$OID->setPrice($Price);
					$OID->setCount($Count);
					$mOID->update($OID);
				}
			}else{
				$OID = new \MVC\Domain\SupplierOrderDetail(
					null,
					$IdOrder,
					$IdResource,
					$Count,
					$Price
				);
				$mOID->insert($OID);
			}			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
		}
	}
?>