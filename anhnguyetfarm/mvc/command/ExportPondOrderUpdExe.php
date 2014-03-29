<?php		
	namespace MVC\Command;	
	class ExportPondOrderUpdExe extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$IdPond = $request->getProperty("IdPond");
			$IdOrderExport = $request->getProperty("IdOrderExport");
			$IdResource = $request->getProperty("IdResource");
			$Count = $request->getProperty("Count");
			$Price = $request->getProperty("Price");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
						
			$mPond = new \MVC\Mapper\Pond();
			$mOE = new \MVC\Mapper\OrderExport();
			$mOED = new \MVC\Mapper\OrderExportDetail();
			$mResource = new \MVC\Mapper\Resource();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($Count))
				return self::statuses('CMD_OK');
				
			
			$Pond = $mPond->find($IdPond);
			$OE = $mOE->find($IdOrderExport);
			$Resource = $mResource->find($IdResource);
			
			//Kiểm tra xem record có tồn tại chưa
			$IdOED = $mOED->exist(array($IdOrderExport, $IdResource));
			
			if ($IdOED>0){
				$OED = $mOED->find($IdOED);
				$OED->setPrice($Price);
				$OED->setCount($Count);
				$mOED->update($OED);
			}else{
				$OED = new \MVC\Domain\OrderExportDetail(
					null,
					$IdOrderExport,
					$IdResource,
					$Count,
					$Price
				);
				$mOED->insert($OED);
			}
			
			//Cập nhật giá của Sản phẩm
			if ($Price > 0){
				if ($Resource->getPrice1() != $Price){
					$Resource->setPrice1($Price);
					$Resource->setPrice2($Price);
					$mResource->update($Resource);
				}
			}
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Date', $OE->getDate());
			$request->setProperty('Type', $OE->getType());
			
			return self::statuses('CMD_OK');
		}
	}
?>