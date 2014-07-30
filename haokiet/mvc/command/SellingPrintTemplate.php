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
			
			$STicket1 = 0;
			$STicket2 = 0;
			$STicketD = 0;
			$SPaid1Remain = 0;
			
			while ($CLAll->valid())
			{
				$CL = $CLAll->current();
				$STicket1 += $CL->getTicket1();
				$STicket2 += $CL->getTicket2();
				$STicketD += $CL->getTicketD();
				$SPaid1Remain += $CL->getPaid1Remain();
				$CLAll->next();		
			}
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Date'		, date('d/m/Y', strtotime($Date )));
			
			$request->setProperty('STicket1'		, number_format($STicket1, 0, ',', '.'));
			$request->setProperty('STicket2'		, number_format($STicket2, 0, ',', '.'));
			$request->setProperty('STicketD'		, number_format($STicketD, 0, ',', '.'));
			$request->setProperty('SPaid1Remain'	, number_format($SPaid1Remain, 0, ',', '.')); 
			
			$request->setObject('ConfigName'	, $ConfigName);
			$request->setObject('ConfigPhone'	, $ConfigPhone);
			$request->setObject('ConfigAddress'	, $ConfigAddress);
			$request->setObject('Domain'		, $Domain);			
			$request->setObject('CLAll'			, $CLAll);
																								
			return self::statuses('CMD_DEFAULT');
		}
	}
?>