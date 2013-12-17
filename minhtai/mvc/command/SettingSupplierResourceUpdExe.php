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
			$IdResource = $request->getProperty("IdResource");
			
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
			$Resource = $mResource->find($IdResource);
			if (!isset($Name))
				return self::statuses('CMD_OK');
							
			$Resource->setName($Name);
			$Resource->setIdCategory($IdCategory);
			$Resource->setIdUnit($IdUnit);
			$Resource->setSize($Size);
			$Resource->setPrice1($Price1);
			$Resource->setPrice2($Price2);
			$Resource->setNote($Note);
						
			$mResource->update($Resource);
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			
			return self::statuses('CMD_OK');
		}
	}
?>