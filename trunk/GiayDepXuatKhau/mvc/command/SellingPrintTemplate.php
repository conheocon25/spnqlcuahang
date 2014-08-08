<?php		
	namespace MVC\Command;	
	class SellingPrintTemplate extends Command {
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
			$Date 		= $Session->getCurrentDate();
			
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
			
			$CLAll = $mCL->findByDate1(array($IdDomain, $Date));
			
			$ConfigName		= $mConfig->findByName("NAME");
			$ConfigPhone	= $mConfig->findByName("PHONE");
			$ConfigAddress	= $mConfig->findByName("ADDRESS");
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Date'		, date('d/m/Y', strtotime($Date )));
									
			$request->setObject('ConfigName'	, $ConfigName);
			$request->setObject('ConfigPhone'	, $ConfigPhone);
			$request->setObject('ConfigAddress'	, $ConfigAddress);
			$request->setObject('Domain'		, $Domain);			
			$request->setObject('CLAll'			, $CLAll);
																								
			return self::statuses('CMD_DEFAULT');
		}
	}
?>