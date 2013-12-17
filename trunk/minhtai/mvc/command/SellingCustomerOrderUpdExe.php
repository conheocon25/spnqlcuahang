<?php		
	namespace MVC\Command;	
	class SellingCustomerOrderUpdExe extends Command{
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
			$Count = $request->getProperty("Count");
			$Price = $request->getProperty("Price");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
						
			$mCustomer = new \MVC\Mapper\Customer();
			$mOE = new \MVC\Mapper\OrderExport();
			$mOED = new \MVC\Mapper\OrderExportDetail();
			$mOEDE = new \MVC\Mapper\OrderExportDetailExtra();
			$mResource = new \MVC\Mapper\Resource();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($Count))
				return self::statuses('CMD_OK');
				
			
			$Customer = $mCustomer->find($IdCustomer);
			$OI = $mOE->find($IdOrderExport);
			$Resource = $mResource->find($IdResource);
			
			//Kiểm tra xem record có tồn tại chưa
			$IdOID = $mOED->exist(array($IdOrderExport, $IdResource));
			
			if ($IdOID>0){
				$OID = $mOED->find($IdOID);
				$OID->setPrice($Price);
				$OID->setCount($Count);
				$mOED->update($OID);				
			}else{
				$OID = new \MVC\Domain\OrderExportDetail(
					null,
					$IdOrderExport,
					$IdResource,
					$Count,
					$Price
				);
				$mOED->insert($OID);				
			}

			//Kiểm tra xem record có tồn tại chưa
			$IdOEDE = $mOEDE->exist(array($IdOrderExport, $IdResource));
			
			if ($IdOEDE>0){
				$OEDE = $mOEDE->find($IdOEDE);
				//$OEDE->setPrice($Price);
				$OEDE->setCount($Count);
				$mOEDE->update($OEDE);
			}else{
				$OEDE = new \MVC\Domain\OrderExportDetailExtra(
					null,
					$IdOrderExport,
					$IdResource,
					$Count,
					0
				);
				$mOEDE->insert($OEDE);
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