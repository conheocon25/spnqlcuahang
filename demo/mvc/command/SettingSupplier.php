<?php		
	namespace MVC\Command;	
	class SettingSupplier extends Command {
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
			$UnitAll = $mUnit->findAll();			
			$CustomerAll = $mCustomer->findAll();			
			$UserAll = $mUser->findAll();
			$TagAll = $mTag->findAll();
			$TagSelectedAll = $mTagSelected->findAll();
			$ResourceAll = $mResource->findAll();
			$ResourceBarcode = $mResource->havingBarcode(array());
			$ConfigAll = $mConfig->findAll();
			
			$Title = "NHÀ CUNG CẤP";
			$Navigation = array(
				array("ỨNG DỤNG", "/app"),
				array("THIẾT LẬP", "/setting")
			);
			
			if (!isset($Page)) $Page=1;
			$Config = $mConfig->findByName("ROW_PER_PAGE");
			$SupplierAll1 = $mSupplier->findByPage(array($Page, $Config->getValue() ));
			$PN = new \MVC\Domain\PageNavigation($SupplierAll->count(), $Config->getValue(), "/setting/supplier" );
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title', $Title);
			$request->setProperty('ActiveAdmin', 'Supplier');
			$request->setProperty('Page', $Page);
			$request->setObject('PN', $PN);
			$request->setObject('Navigation', $Navigation);
			$request->setObject('SupplierAll1', $SupplierAll1);
			
			$request->setObject('SupplierAll', $SupplierAll);
			$request->setObject('ResourceAll', $ResourceAll);
			$request->setObject('ResourceBarcode', $ResourceBarcode);
			$request->setObject('UnitAll', $UnitAll);
			$request->setObject('CustomerAll', $CustomerAll);			
			$request->setObject('UserAll', $UserAll);
			$request->setObject('TagAll', $TagAll);			
			$request->setObject('TagSelectedAll', $TagSelectedAll);
			$request->setObject('ConfigAll', $ConfigAll);
									
			return self::statuses('CMD_DEFAULT');
		}
	}
?>