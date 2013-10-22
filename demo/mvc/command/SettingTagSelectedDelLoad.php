<?php		
	namespace MVC\Command;	
	class SettingTagSelectedDelLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdTag = $request->getProperty('IdTag');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			require_once("mvc/base/mapper/MapperDefault.php");
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------																				
			$Navigation = array(
				array("ỨNG DỤNG", "/app"),
				array("THIẾT LẬP", "/setting"),
				array("THẺ ĐƯỢC CHỌN", "/setting/tagselected")
			);			
			$TagSelected = $mTagSelected->find($IdTag);
			$Title = mb_strtoupper($TagSelected->getTag()->getName(), 'UTF8');
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title', $Title);
			$request->setProperty('ActiveAdmin', 'TagSelected');
			$request->setObject('Navigation', $Navigation);
			$request->setObject('TagSelected', $TagSelected);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>