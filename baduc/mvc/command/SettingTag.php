<?php		
	namespace MVC\Command;	
	class SettingTag extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$Page = $request->getProperty('Page');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			require_once("mvc/base/mapper/MapperDefault.php");
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$TagAll = $mTag->findAll();
						
			$Title = "THẺ SẢN PHẨM";
			$Navigation = array(				
				array("THIẾT LẬP", "/setting")
			);
			
			if (!isset($Page)) $Page=1;
			$Config = $mConfig->findByName("ROW_PER_PAGE");
			$TagAll1 = $mTag->findByPage(array($Page, $Config->getValue() ));
			$PN = new \MVC\Domain\PageNavigation($TagAll->count(), $Config->getValue(), "/setting/tag" );
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title'		, $Title);
			$request->setProperty('ActiveAdmin'	, 'Tag');
			$request->setProperty('Page'		, $Page);
			$request->setObject('PN'			, $PN);
			$request->setObject('Navigation'	, $Navigation);
			$request->setObject('TagAll1'		, $TagAll1);
												
			return self::statuses('CMD_DEFAULT');
		}
	}
?>