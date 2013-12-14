<?php		
	namespace MVC\Command;	
	class SellingDetail extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdDomain = $request->getProperty('IdDomain');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mDomain 	= new \MVC\Mapper\Domain();
			$mSupplier 	= new \MVC\Mapper\Supplier();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Domain  		= $mDomain->find($IdDomain);
			$SupplierAll 	= $mSupplier->findAll();
			
			$Title = $Domain->getName();
			$Navigation = array(				
				array("BÁN HÀNG", "/selling")
			);
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title'		, $Title);
			$request->setProperty('ActiveAdmin'	, 'Selling');
			$request->setObject('Navigation'	, $Navigation);
			$request->setObject('SupplierAll'	, $SupplierAll);
			$request->setObject('Domain'		, $Domain);			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>