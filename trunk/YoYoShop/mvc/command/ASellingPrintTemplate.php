<?php		
	namespace MVC\Command;	
	class ASellingPrintTemplate extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdDomain 	= $request->getProperty('IdDomain');
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mDomain 	= new \MVC\Mapper\Domain();
			$mCustomer 	= new \MVC\Mapper\Customer();
			$mConfig 	= new \MVC\Mapper\Config();
			$mCL 		= new \MVC\Mapper\CustomerLog();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------																					
			$Domain 		= $mDomain->find($IdDomain);
			$CustomerAll 	= $mCustomer->findByDomain(array($IdDomain));
			
			$ConfigName		= $mConfig->findByName("NAME");
			$ConfigPhone	= $mConfig->findByName("PHONE");
			$ConfigAddress	= $mConfig->findByName("ADDRESS");
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------																		
			$request->setObject('ConfigName'	, $ConfigName);
			$request->setObject('ConfigPhone'	, $ConfigPhone);
			$request->setObject('ConfigAddress'	, $ConfigAddress);
			$request->setObject('Domain'		, $Domain);
			$request->setObject('CustomerAll'	, $CustomerAll);
																					
			return self::statuses('CMD_DEFAULT');
		}
	}
?>