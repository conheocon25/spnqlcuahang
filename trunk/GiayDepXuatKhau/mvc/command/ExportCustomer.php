<?php		
	namespace MVC\Command;	
	class ExportCustomer extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdCustomer = $request->getProperty('IdCustomer');
			$Page 		= $request->getProperty('Page');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mCustomer 	= new \MVC\Mapper\Customer();
			$mConfig 	= new \MVC\Mapper\Config();
			$mOrder 	= new \MVC\Mapper\OrderExport();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$CustomerAll 	= $mCustomer->findAll();			
			$Customer 		= $mCustomer->find($IdCustomer);
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$Title = mb_strtoupper($Customer->getName(), 'UTF8');
			$Navigation = array(
				array("XUẤT HÀNG", "/export")				
			);
			if (!isset($Page)) $Page=1;
			$Config 		= $mConfig->findByName("ROW_PER_PAGE");
			$ConfigName 	= $mConfig->findByName("NAME");
			
			$OrderAll = $mOrder->findByCustomerPage(array($IdCustomer, $Page, $Config->getValue() ));
			$PN = new \MVC\Domain\PageNavigation($Customer->getOrderAll()->count(), $Config->getValue(), $Customer->getURLExport());
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title', $Title);
			$request->setProperty('Page', $Page);
			$request->setProperty('ActiveAdmin', 'Import');
			$request->setObject('Navigation', $Navigation);
			$request->setObject('PN', $PN);
			$request->setObject('ConfigName', $ConfigName);
			
			$request->setObject('CustomerAll', $CustomerAll);
			$request->setObject('OrderAll', $OrderAll);
			$request->setObject('Customer', $Customer);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>