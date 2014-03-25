<?php		
	namespace MVC\Command;	
	class ASellingCustomer extends Command{
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
			$IdCustomer = $request->getProperty('IdCustomer');
			
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
			$Domain 	= $mDomain->find($IdDomain);
			$Customer 	= $mCustomer->find($IdCustomer);
											
						
			$Title = mb_strtoupper($Customer->getName(), 'UTF8');
			$Navigation = array(
				array(mb_strtoupper($Domain->getName(), 'UTF8'), $Domain->getURLSelling())
			);
			
			if (!isset($Page)) $Page=1;
			$Config 		= $mConfig->findByName("ROW_PER_PAGE");
			$ConfigName		= $mConfig->findByName("NAME");
			
			$CLAll = $Customer->getLogAll();
			
			$STicket1 		= 0;
			$STicket2 		= 0;
			$STicketD 		= 0;
			$STicketValue 	= 0;			
			$SPaid1 		= 0;
			$SPaid1Remain 	= 0;
			$SPaid2 		= 0;
			$SPaid2Remain 	= 0;
			$SDebt 			= 0;
			
			while ($CLAll->valid()){
				$CL = $CLAll->current();
				
				$STicket1 		+= $CL->getTicket1();
				$STicket2 		+= $CL->getTicket2();
				$STicketD 		+= $CL->getTicketD();
				$STicketValue 	+= $CL->getTicketValue();
				$SPaid1 		+= $CL->getPaid1();
				$SPaid1Remain	+= $CL->getPaid1Remain();
				$SPaid2 		+= $CL->getPaid2();
				$SPaid2Remain	+= $CL->getPaid2Remain();
				$SDebt 			+= $CL->getDebt();
				
				$CLAll->next();
			}
			$NSTicket1 		= new \MVC\Library\Number($STicket1);
			$NSTicket2 		= new \MVC\Library\Number($STicket2);
			$NSTicketD 		= new \MVC\Library\Number($STicketD);
			$NSTicketValue 	= new \MVC\Library\Number($STicketValue);
			$NSPaid1 		= new \MVC\Library\Number($SPaid1);
			$NSPaid1Remain 	= new \MVC\Library\Number($SPaid1Remain);
			$NSPaid2 		= new \MVC\Library\Number($SPaid2);
			$NSPaid2Remain 	= new \MVC\Library\Number($SPaid2Remain);
			$NSDebt 		= new \MVC\Library\Number($SDebt);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title'		, $Title);														
			$request->setObject('Navigation'	, $Navigation);
			
			$request->setProperty('STicket1'	, $NSTicket1->formatCurrency());
			$request->setProperty('STicket2'	, $NSTicket2->formatCurrency());
			$request->setProperty('STicketD'	, $NSTicketD->formatCurrency());
			$request->setProperty('STicketValue', $NSTicketValue->formatCurrency());
			$request->setProperty('SPaid1'		, $NSPaid1->formatCurrency());
			$request->setProperty('SPaid1Remain', $NSPaid1Remain->formatCurrency());
			$request->setProperty('SPaid2'		, $NSPaid2->formatCurrency());
			$request->setProperty('SPaid2Remain', $NSPaid2Remain->formatCurrency());
			$request->setProperty('SDebt'		, $NSDebt->formatCurrency());
			
			$request->setObject('ConfigName'	, $ConfigName);
			$request->setObject('Domain'		, $Domain);
			$request->setObject('Customer'		, $Customer);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>