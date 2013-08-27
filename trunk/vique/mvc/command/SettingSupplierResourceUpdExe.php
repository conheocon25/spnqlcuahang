<?php	
	namespace MVC\Command;
	class SettingSupplierResourceUpdExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdSupplier = $request->getProperty("IdSupplier");
			$IdResource = $request->getProperty("IdResource");
			$Name = $request->getProperty("Name");						
			$PriceImport = $request->getProperty("PriceImport");
			$PriceExport = $request->getProperty("PriceExport");
			$Unit = $request->getProperty("Unit");
			$Description = $request->getProperty("Description");
			$Barcode = $request->getProperty("Barcode");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mResource = new \MVC\Mapper\Resource();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Resource = $mResource->find($IdResource);
			if (!isset($Name)) return self::statuses('CMD_OK');
							
			$Resource->setIdSupplier($IdSupplier);
			$Resource->setName($Name);
			$Resource->setPriceImport($PriceImport);
			$Resource->setPriceExport($PriceExport);
			$Resource->setUnit($Unit);
			$Resource->setDescription($Description);
			$Resource->setBarcode($Barcode);
			
			$mResource->update($Resource);
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			
			return self::statuses('CMD_OK');
		}
	}
?>