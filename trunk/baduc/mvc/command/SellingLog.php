<?php
	namespace MVC\Command;
	class SellingLog extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
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
			$mOrder = new \MVC\Mapper\OrderExport();
			$mConfig = new \MVC\Mapper\Config();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($Page)) $Page=1;
			$Config = $mConfig->findByName("ROW_PER_PAGE");
			$OrderAll1 = $mOrder->findAll();
			$OrderAll = $mOrder->findByPage(array($Page, $Config->getValue() ));
			$PN = new \MVC\Domain\PageNavigation($OrderAll1->count(), $Config->getValue(), "/selling/log" );			
									
			$Title = "NHẬT KÝ";
			$Navigation = array(
				array("ỨNG DỤNG", "/app"),
				array("BÁN HÀNG", "/selling")
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title', $Title);
			$request->setProperty('Page', $Page);
			$request->setObject('PN', $PN);
			$request->setObject('OrderAll', $OrderAll);
			$request->setObject('Navigation', $Navigation);
		}
	}
?>