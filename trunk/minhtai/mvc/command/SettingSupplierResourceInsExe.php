<?php
	namespace MVC\Command;
	class SettingSupplierResourceInsExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$IdSupplier = $request->getProperty('IdSupplier');
			$Name = $request->getProperty("Name");
			$IdCategory = $request->getProperty("IdCategory");
			$IdUnit = $request->getProperty("IdUnit");
			$Size = $request->getProperty("Size");
			$Price1 = $request->getProperty("Price1");
			$Price2 = $request->getProperty("Price2");
			$Note = $request->getProperty("Note");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mResource = new \MVC\Mapper\Resource();								
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($Name))
				return self::statuses('CMD_OK');
				
			$Resource = new \MVC\Domain\Resource(
				null,
				$IdSupplier,
				$Name,
				$IdCategory,
				$IdUnit,
				$Size,
				$Price1,
				$Price2,
				$Note
			);
			$mResource->Insert($Resource);
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>
