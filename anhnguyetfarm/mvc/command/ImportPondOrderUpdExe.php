<?php		
	namespace MVC\Command;	
	class ImportPondOrderUpdExe extends Command{
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
			$IdOrderImport = $request->getProperty("IdOrderImport");
			$IdResource = $request->getProperty("IdResource");
			$Count = $request->getProperty("Count");
			$Price = $request->getProperty("Price");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
						
			$mPond = new \MVC\Mapper\Pond();
			$mOE = new \MVC\Mapper\OrderImport();
			$mOED = new \MVC\Mapper\OrderImportDetail();
			$mResource = new \MVC\Mapper\Resource();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($Count))
				return self::statuses('CMD_OK');
				
			
			$Pond = $mPond->find($IdPond);
			$OE = $mOE->find($IdOrderImport);
			$Resource = $mResource->find($IdResource);
			
			//Kiểm tra xem record có tồn tại chưa
			$IdOED = $mOED->exist(array($IdOrderImport, $IdResource));
			
			if ($IdOED>0){
				$OED = $mOED->find($IdOED);
				$OED->setPrice($Price);
				$OED->setCount($Count);
				$mOED->update($OED);
			}else{
				$OED = new \MVC\Domain\OrderImportDetail(
					null,
					$IdOrderImport,
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