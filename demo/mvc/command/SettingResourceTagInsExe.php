<?php
	namespace MVC\Command;	
	class SettingResourceTagInsExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$IdSupplier = $request->getProperty('IdSupplier');
			$IdResource = $request->getProperty('IdResource');
			$IdTag = $request->getProperty('IdTag');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------						
			$mResource = new \MVC\Mapper\Resource();
			$mTag = new \MVC\Mapper\Tag();
			$mR2T = new \MVC\Mapper\R2T();
						
			//-------------------------------------------------------------
			//XỬ LÍ CHÍNH
			//-------------------------------------------------------------									
			$R2T = new \MVC\Domain\R2T(
				null,
				$IdResource,
				$IdTag
			);			
			$mR2T->insert($R2T);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			return self::statuses('CMD_OK');
		}
	}
?>