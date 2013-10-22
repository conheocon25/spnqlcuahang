<?php
	namespace MVC\Command;	
	class SettingTagUpdLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdTag = $request->getProperty("IdTag");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------						
			$mTag = new \MVC\Mapper\Tag();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Tag = $mTag->find($IdTag);
			$Title = mb_strtoupper($Tag->getName(), 'UTF8');
			$Navigation = array(
				array("ỨNG DỤNG", "/app"),
				array("THIẾT LẬP", "/setting"),
				array("THẺ", "/setting/tag")
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------	
			$request->setObject("Tag", $Tag);		
			$request->setObject("Navigation", $Navigation);
			$request->setProperty('Title', $Title);
		}
	}
?>
