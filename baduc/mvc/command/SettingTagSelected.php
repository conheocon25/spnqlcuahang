<?php		
	namespace MVC\Command;	
	class SettingTagSelected extends Command {
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
			$SupplierAll = $mSupplier->findAll();			
			$TagAll = $mTag->findAll();
			$TagSelectedAll = $mTagSelected->findAll();
			$CustomerAll = $mCustomer->findAll();			
			$UnitAll = $mUnit->findAll();
			$UserAll = $mUser->findAll();
			$ConfigAll = $mConfig->findAll();
			
			$Title = "THẺ ĐƯỢC CHỌN";
			$Navigation = array(
				array("ỨNG DỤNG", "/app"),
				array("THIẾT LẬP", "/setting")
			);
			
			if (!isset($Page)) $Page=1;
			$Config = $mConfig->findByName("ROW_PER_PAGE");
			$TagSelectedAll1 = $mTagSelected->findByPage(array($Page, $Config->getValue() ));
			$PN = new \MVC\Domain\PageNavigation($TagSelectedAll->count(), $Config->getValue(), "/setting/tagselected" );
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title', $Title);
			$request->setProperty('ActiveAdmin', 'TagSelected');
			$request->setProperty('Page', $Page);
			$request->setObject('PN', $PN);
			$request->setObject('Navigation', $Navigation);
						
			$request->setObject('SupplierAll', $SupplierAll);
			$request->setObject('UnitAll', $UnitAll);
			$request->setObject('TagAll', $TagAll);
			$request->setObject('TagSelectedAll', $TagSelectedAll);
			$request->setObject('TagSelectedAll1', $TagSelectedAll1);
			$request->setObject('CustomerAll', $CustomerAll);			
			$request->setObject('UserAll', $UserAll);
			$request->setObject('ConfigAll', $ConfigAll);
									
			return self::statuses('CMD_DEFAULT');
		}
	}
?>