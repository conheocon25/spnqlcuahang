<?php		
	namespace MVC\Command;	
	class SellingPrint extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$IdOrder 	= $request->getProperty("IdOrder");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mOrder 	= new \MVC\Mapper\OrderExport();
			$mConfig 	= new \MVC\Mapper\Config();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$Order	= $mOrder->find($IdOrder);
			
			$ConfigDouble	= $mConfig->findByName("RECEIPT_VIRTUAL_DOUBLE");
			$ConfigName		= $mConfig->findByName("NAME");
			$ConfigAddress	= $mConfig->findByName("ADDRESS");
			$ConfigPhone	= $mConfig->findByName("PHONE");
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject('Order', $Order);
			$request->setObject("ConfigDouble"	, $ConfigDouble);
			$request->setObject("ConfigName"	, $ConfigName);
			$request->setObject("ConfigAddress"	, $ConfigAddress);
			$request->setObject("ConfigPhone"	, $ConfigPhone);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>