<?php		
	namespace MVC\Command;	
	class SettingFactory extends Command {
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
			$FactoryAll = $mFactory->findAll();
						
			$Title = "NHÀ CUNG CẤP";
			$Navigation = array(				
				array("THIẾT LẬP", "/setting")
			);
			if (!isset($Page)) $Page=1;
			$Config = $mConfig->findByName("ROW_PER_PAGE");
			$FactoryAll1 = $mFactory->findByPage(array($Page, $Config->getValue() ));
			$PN = new \MVC\Domain\PageNavigation($FactoryAll->count(), $Config->getValue(), "/setting/factory" );
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title', $Title);
			$request->setProperty('ActiveAdmin', 'Factory');
			$request->setProperty('Page', $Page);
			$request->setObject('Navigation', $Navigation);
			$request->setObject('FactoryAll1', $FactoryAll1);
			$request->setObject('PN', $PN);
												
			return self::statuses('CMD_DEFAULT');
		}
	}
?>