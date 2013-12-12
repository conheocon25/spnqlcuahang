<?php
	namespace MVC\Command;
	class SellingDetailCallOrder extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
												
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdDomain 	= $request->getProperty("IdDomain");
			$IdOrder 	= $request->getProperty("IdOrder");
			$IdResource = $request->getProperty("IdResource");
			$Delta 		= $request->getProperty("Delta");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mOrder 		= new \MVC\Mapper\OrderExport();			
			$mResource 		= new \MVC\Mapper\Resource();			
			$mOD 			= new \MVC\Mapper\OrderExportDetail();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Table 			= $mOrder->find($IdOrder);
			$Resource 		= $mResource->find($IdResource);
									
			//Kiểm tra xem IdResource đã có tồn tại trong Session hiện tại chưa
			$IdOD = $mOD->exist(array($IdOrder, $IdResource));
			if (!isset($IdOD) || $IdOD<0){
				$OD = new \MVC\Domain\OrderExportDetail(
					null,
					$IdOrder,
					$IdResource, 
					1,
					$Resource->getPriceExport()
				);
				$mOD->insert($OD);
			}else{
				$OD 	= $mOD->find($IdOD);									
				$Count 	= $OD->getCount() + $Delta;				
				$OD->setCount($Count);
				$mOD->update($OD);
			}						
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------												
			$request->setObject("OD", $OD);
		}
	}
?>