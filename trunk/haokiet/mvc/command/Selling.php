<?php		
	namespace MVC\Command;	
	class Selling extends Command {
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
			$doAction 	= $request->getProperty('doAction');
			$Page 		= $request->getProperty('Page');
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
			$DomainAll 		= $mDomain->findAll();			
			if (!isset($Domain)){
				$Domain = $DomainAll->current();
				$IdDomain = $Domain->getId();
			}
			
			if (!isset($Date)){
				$Date = \date('Y-m-d');
			}else{
				
				if ($doAction=="next"){
					$Date = date('Y-m-d', strtotime($Date . ' + 1 day'));
				}else if ($doAction=="back"){
					$Date = date('Y-m-d', strtotime($Date . ' - 1 day'));
				}
				
			}
			$Session->setCurrentDate($Date);
						
			//Phát sinh dữ liệu CustomerLog cho ngày hiện tại
			$CustomerAll 	= $mCustomer->findAll();
			$CLAll = $mCL->findByDate1(array($IdDomain, $Date));
			$CLAll1 = $mCL->findByDate1Page(array($IdDomain, $Date, $Page, 12));
			
			if ($CLAll->count()==0){
				while ($CustomerAll->valid()){
					$Customer = $CustomerAll->current();
					$CL = new \MVC\Domain\CustomerLog(
						null,
						$Customer->getId(),
						$Date,
						0,0,0,0,0,0,0
					);
					$mCL->insert($CL);
					$CustomerAll->next();
				}
				$CLAll = $mCL->findByDate1(array($IdDomain, $Date));
			}
						
			$Title = mb_strtoupper($Domain->getName(), 'UTF8')." > ".date('d/m/Y', strtotime($Date));
			$Navigation 	= array();
			$ConfigName		= $mConfig->findByName("NAME");
			$PN 			= new \MVC\Domain\PageNavigation($CLAll->count(), 12, "/selling/".$IdDomain);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title'		, $Title);
			$request->setObject('Navigation'	, $Navigation);
			$request->setObject('PN'			, $PN);
			$request->setProperty('Date'		, $Date);
			
			$request->setObject('ConfigName'	, $ConfigName);
			$request->setObject('Domain'		, $Domain);
			$request->setObject('CLAll'			, $CLAll);
			$request->setObject('CLAll1'		, $CLAll1);
			$request->setObject('DomainAll'		, $DomainAll);
																		
			return self::statuses('CMD_DEFAULT');
		}
	}
?>