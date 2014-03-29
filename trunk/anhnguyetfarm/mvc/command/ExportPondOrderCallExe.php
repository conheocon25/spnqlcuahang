<?php
	namespace MVC\Command;
	class ExportPondOrderCallExe extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$Type = $request->getProperty("Type");
			$IdPond = $request->getProperty("IdPond");
			$Date = $request->getProperty("Date");
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
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if ($Type==1){
				$IdOrder = $mOrder->exist1(array($IdPond, $Date));			
				if ($IdOrder>0){
					$Order = $mOrder->find($IdOrder);
				}else{
					$Order = new \MVC\Domain\OrderExport(
						null,
						$IdPond,
						1,
						$Date,
						'TA'
					);
					$mOrder->insert($Order);
				}
			}else{
				$IdOrder = $mOrder->exist2(array($IdPond, $Date));
				if ($IdOrder>0){
					$Order = $mOrder->find($IdOrder);
				}else{
					$Order = new \MVC\Domain\OrderExport(
						null,
						$IdPond,
						1,
						$Date,
						'TH'
					);
					$mOrder->insert($Order);
				}
			}
						
			$IdOrder = $Order->getId();			
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
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject("OED", $OED);
		}
	}
?>
