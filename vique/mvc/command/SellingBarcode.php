<?php
	namespace MVC\Command;	
	class SellingBarcode extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$Barcode = $request->getProperty('Barcode');
							
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mOrder = new \MVC\Mapper\OrderExport();
			$mOrderDetail = new \MVC\Mapper\OrderExportDetail();
			$mResource = new \MVC\Mapper\Resource();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			
			//Nhân viên bán hàng hiện tại chưa có đơn hàng
			$OrderAll = $mOrder->findBy( array( $Session->getCurrentUser()->getId(), 0 ) );
			$Order = $OrderAll->current();
			if (!isset($Order)){
				$Order = new \MVC\Domain\OrderExport(
					null,
					$Session->getCurrentUser()->getId(),
					\date("Y-m-d H:i:s"),
					0,
					"Hàng bán lẻ"
				);
				$mOrder->insert($Order);
			}
			
			$Resource = $mResource->findByBarcode(array($Barcode));
			if (!isset($Resource)) return self::statuses('CMD_OK');
			
			$IdDetail = $mOrderDetail->exist(array($Order->getId(), $Resource->getId()));
			if ($IdDetail == -1){				
				$OD = new \MVC\Domain\OrderExportDetail(
					null,
					$Order->getId(),
					$Resource->getId(),
					1,		
					$Resource->getPriceExport()
				);
				$mOrderDetail->insert($OD);
			}else{
				$OD = $mOrderDetail->find($IdDetail);
				$OD->setCount( $OD->getCount() + 1);
				$mOrderDetail->update($OD);		
			}
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>