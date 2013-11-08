<?php		
	namespace MVC\Command;	
	class SettingSupplierDomain extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdSupplier = $request->getProperty('IdSupplier');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mDomain 	= new \MVC\Mapper\Domain();
			$mSupplier 	= new \MVC\Mapper\Supplier();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$DomainAll 	= $mDomain->findAll();
			$Supplier 	= $mSupplier->find($IdSupplier);						
			$Title 		= $Supplier->getName()." KINH DOANH LĨNH VỰC";
			$Navigation = array(
				array("THIẾT LẬP"		, "/setting"),
				array("NHÀ CUNG CẤP"	, "/setting/supplier")
			);
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title'	, $Title);			
			$request->setObject('Navigation', $Navigation);
			$request->setObject('Supplier'	, $Supplier);
			$request->setObject('DomainAll'	, $DomainAll);
															
			return self::statuses('CMD_DEFAULT');
		}
	}
?>