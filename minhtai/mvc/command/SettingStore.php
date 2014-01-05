<?php		
	namespace MVC\Command;	
	class SettingStore extends Command {
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
			$mConfig 	= new \MVC\Mapper\Config();
			$mStore 	= new \MVC\Mapper\Store();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$StoreAll = $mStore->findAll();
			
			$Title = "CẤU HÌNH";
			$Navigation = array(				
				array("THIẾT LẬP", "/setting")
			);
			if (!isset($Page)) $Page=1;
			$Config 	= $mConfig->findByName("ROW_PER_PAGE");
			$StoreAll1 	= $mStore->findByPage(array($Page, $Config->getValue() ));
			$PN 		= new \MVC\Domain\PageNavigation($StoreAll->count(), $Config->getValue(), "/setting/store" );
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title', $Title);
			$request->setProperty('ActiveAdmin', 'Store');
			$request->setProperty('Page', $Page);
			$request->setObject('Navigation', $Navigation);
			$request->setObject('StoreAll1', $StoreAll1);
			$request->setObject('PN', $PN);
									
			return self::statuses('CMD_DEFAULT');
		}
	}
?>