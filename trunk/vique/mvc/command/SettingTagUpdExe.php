<?php
	namespace MVC\Command;	
	class SettingTagUpdExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdTag = $request->getProperty('IdTag');
			$Name = $request->getProperty('Name');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mTag = new \MVC\Mapper\Tag();
			
					
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($Name))
				return self::statuses('CMD_OK');
				
			$Tag = $mTag->find($IdTag);
			$Tag->setName($Name);
			$mTag->update($Tag);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			
			return self::statuses('CMD_OK');
		}
	}
?>
