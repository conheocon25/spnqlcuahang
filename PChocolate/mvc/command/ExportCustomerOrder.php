<?php		
	namespace MVC\Command;	
	class ExportCustomerOrder extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdCustomer 	= $request->getProperty('IdCustomer');
			$IdOrder 		= $request->getProperty('IdOrder');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mOrder	 		= new \MVC\Mapper\OrderExport();
			$mCustomer 		= new \MVC\Mapper\Customer();
			$mResource 		= new \MVC\Mapper\Resource();
			$mConfig 		= new \MVC\Mapper\Config();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$Customer 	= $mCustomer->find($IdCustomer);
			$Order 		= $mOrder->find($IdOrder);
			$ResourceAll= $mResource->findAll();
			
			$ConfigName	= $mConfig->findByName("NAME");
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$Title = $Order->getDatePrint();
			$Navigation = array(
				array("XUẤT HÀNG", "/export"),
				array(mb_strtoupper($Customer->getName(), 'UTF8'), $Customer->getURLExport())
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title'		, $Title);			
			$request->setObject('Navigation'	, $Navigation);
									
			$request->setObject('ConfigName'	, $ConfigName);
			$request->setObject('Order'			, $Order);
			$request->setObject('ResourceAll'	, $ResourceAll);
			$request->setObject('Customer'		, $Customer);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>