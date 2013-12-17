<?php
	namespace MVC\Command;
	class SellingCustomerOrderCallExe extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdOrder = $request->getProperty("IdOrderExport");
			$IdResource = $request->getProperty("IdResource");			
			$Delta = $request->getProperty("Delta");
			
			$Count = $request->getProperty("Count");
			$Price = $request->getProperty("Price");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mOrder = new \MVC\Mapper\OrderExport();			
			$mResource = new \MVC\Mapper\Resource();			
			$mOED = new \MVC\Mapper\OrderExportDetail();
			$mOEDE = new \MVC\Mapper\OrderExportDetailExtra();			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Order = $mOrder->find($IdOrder);
			$Resource = $mResource->find($IdResource);
															
			//Kiểm tra xem IdResource đã có tồn tại trong Order hiện tại chưa
			$IdOED = $mOED->exist(array($IdOrder, $IdResource));
			if (!isset($IdOED) || $IdOED<1){
				$OED = new \MVC\Domain\OrderExportDetail(
					null,
					$IdOrder, 
					$IdResource, 
					1,
					$Resource->getPrice2()
				);
				$mOED->insert($OED);
				
			}else{
				$OED = $mOED->find($IdOED);
								
				$Count = $OED->getCount() + $Delta;
				$OED->setCount($Count);
				
				$mOED->update($OED);
				
			}
			
			//Kiểm tra xem record có tồn tại chưa
			$IdOEDE = $mOEDE->exist(array($IdOrder, $IdResource));
			
			if ($IdOEDE>0){
				$OEDE = $mOEDE->find($IdOEDE);
				$Count = $OEDE->getCount() + $Delta;
				$OEDE->setPrice($Price);
				$OEDE->setCount($Count);
				$mOEDE->update($OEDE);
			}else{
				$OEDE = new \MVC\Domain\OrderExportDetailExtra(
					null,
					$IdOrder,
					$IdResource,
					1,
					0
				);
				$mOEDE->insert($OEDE);
			}	
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject("OED", $OED);
		}
	}
?>
