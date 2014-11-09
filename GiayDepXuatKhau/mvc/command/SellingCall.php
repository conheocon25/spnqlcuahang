<?php
	namespace MVC\Command;
	class SellingCall extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$IdResource = $request->getProperty("IdResource");									
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mResource 		= new \MVC\Mapper\Resource();
			$mOrder 		= new \MVC\Mapper\OrderExport();
			$mOrderDetail 	= new \MVC\Mapper\OrderExportDetail();
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$OrderAll 	= $mOrder->findByUser(array($Session->getCurrentIdUser()));
			$Order		= $OrderAll->current();
			$Resource   = $mResource->find($IdResource);
			
			$StateNew 	= 0;
			//Nếu đã tạo mới thì thêm món vào
			if ($Order->getState()>0){
				$OE = new \MVC\Domain\OrderExport(
					null,					//Id					
					$Session->getCurrentIdUser(),//IdUser										
					1,						//Khách lẻ
					\date("Y-m-d H:i:s"), 	//DateTime					
					0, 						//State
					"Đơn hàng"				//Note
				);
				$mOrder->insert($OE);
				$IdOrder = $OE->getId();
				$StateNew = 1;
			}else{
				$IdOrder = $Order->getId();		
			}
									
			//Kiểm tra xem IdResource đã có tồn tại trong Order hiện tại chưa
			$IdOD = $mOrderDetail->exist(array($IdOrder, $IdResource));
			$Count = 1;
			if (!isset($IdOD) || $IdOD==-1){
				$OD = new \MVC\Domain\OrderExportDetail(
					null,
					$IdOrder, 
					$IdResource, 
					1,
					1,
					$Resource->getPrice()
				);
				$mOrderDetail->insert($OD);
			}else{
				$OD = $mOrderDetail->find($IdOD);
			}
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------												
			$request->setObject("OD", $OD);
			$request->setProperty("StateNew", $StateNew);
		}
	}
?>