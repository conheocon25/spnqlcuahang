<?php		
	namespace MVC\Command;	
	class SellingStore extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
									
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mConfig 	= new \MVC\Mapper\Config();
			$mCustomer 	= new \MVC\Mapper\Customer();
			$mSupplier 	= new \MVC\Mapper\Supplier();
			$mOrder 	= new \MVC\Mapper\OrderExport();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$CustomerAll = $mCustomer->findAll();			
			$SupplierAll = $mSupplier->findAll();
			
			$OrderAll 	= $mOrder->findByUser(array($Session->getCurrentIdUser()));
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$Title 		= "BÁN HÀNG TẠI CỬA HÀNG";
			$Navigation = array();
			$ConfigName	= $mConfig->findByName("NAME");
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title'		, $Title);
			$request->setProperty('ActiveAdmin'	, 'Export');
			$request->setObject('Navigation'	, $Navigation);
			$request->setObject('ConfigName'	, $ConfigName);
			$request->setObject('CustomerAll'	, $CustomerAll);
			$request->setObject('SupplierAll'	, $SupplierAll);
			$request->setObject('OrderAll'		, $OrderAll);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>