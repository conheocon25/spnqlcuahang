<?php		
	namespace MVC\Command;	
	class SettingCustomerDomain extends Command {
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
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mDomain 	= new \MVC\Mapper\Domain();
			$mCustomer 	= new \MVC\Mapper\Customer();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$DomainAll 	= $mDomain->findAll();
			$Customer 	= $mCustomer->find($IdCustomer);						
			$Title = $Customer->getName()." LĨNH VỰC";
			$Navigation = array(				
				array("THIẾT LẬP", "/setting"),
				array("KHÁCH HÀNG", "/setting/customer")
			);
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title'	, $Title);			
			$request->setObject('Navigation', $Navigation);
			$request->setObject('Customer'	, $Customer);
			$request->setObject('DomainAll'	, $DomainAll);
															
			return self::statuses('CMD_DEFAULT');
		}
	}
?>