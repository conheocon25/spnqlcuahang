<?php
	namespace MVC\Command;	
	class SettingStoreInitUpdExe extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdStore = $request->getProperty('IdStore');
			$IdResource = $request->getProperty('IdResource');
			$Count = $request->getProperty('Count');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mSD = new \MVC\Mapper\StoreDetail();
			$mResource = new \MVC\Mapper\Resource();
								
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------							
			$IdSD = $mSD->exist(array($IdStore, $IdResource));
			if ($IdSD<0){
				$SD = new \MVC\Domain\StoreDetail(
					null,
					$IdStore,
					$IdResource,
					0
				);
				$mSD->insert($SD);
			}else{
				$SD = $mSD->find($IdSD);
			}
			$SD->setCount($Count);
			$mSD->update($SD);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			return self::statuses('CMD_OK');
		}
	}
?>
