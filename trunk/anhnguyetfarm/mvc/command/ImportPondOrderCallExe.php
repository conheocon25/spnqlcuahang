<?php
	namespace MVC\Command;
	class ImportPondOrderCallExe extends Command{
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
			$mOrder = new \MVC\Mapper\OrderImport();			
			$mResource = new \MVC\Mapper\Resource();			
			$mOID = new \MVC\Mapper\OrderImportDetail();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if ($Type==1){
				$IdOrder = $mOrder->exist1(array($IdPond, $Date));
				if ($IdOrder>0){
					$Order = $mOrder->find($IdOrder);
				}else{
					$Order = new \MVC\Domain\OrderImport(
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
					$Order = new \MVC\Domain\OrderImport(
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
			$IdOID = $mOID->exist(array($IdOrder, $IdResource));
			if (!isset($IdOID) || $IdOID<1){
				$OID = new \MVC\Domain\OrderImportDetail(
					null,
					$IdOrder, 
					$IdResource, 
					1,
					$Resource->getPrice2()
				);
				$mOID->insert($OID);
			}else{
				$OID = $mOID->find($IdOID);
								
				$Count = $OID->getCount() + $Delta;
				$OID->setCount($Count);				
				$mOID->update($OID);
			}
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject("OID", $OID);
		}
	}
?>
