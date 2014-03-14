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
			//Phát sinh dữ liệu CustomerLog cho ngày hiện tại
			$CustomerAll 	= $mCustomer->findAll();
			
			$CLAll = $mCL->findByDate(array(\date('Y-m-d')));
			if ($CLAll->count()==0){
				while ($CustomerAll->valid()){
					$Customer = $CustomerAll->current();
					$CL = new \MVC\Domain\CustomerLog(
						null,
						$Customer->getId(),
						\date('Y-m-d'),
						0,0,0,0,0,0,0
					);
					$mCL->insert($CL);
					$CustomerAll->next();
				}
			}
						
			$Domain 		= $mDomain->find($IdDomain);
			$DomainAll 		= $mDomain->findAll();			
			if (!isset($Domain)){
				$Domain = $DomainAll->current();
				$IdDomain = $Domain->getId();
			}
			
			$Title = mb_strtoupper($Domain->getName(), 'UTF8');
			$Navigation = array();
			
			if (!isset($Page)) $Page=1;
			$Config 		= $mConfig->findByName("ROW_PER_PAGE");
			$ConfigName		= $mConfig->findByName("NAME");
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title'		, $Title);									
			$request->setObject('Navigation'	, $Navigation);
			
			$request->setObject('ConfigName'	, $ConfigName);
			$request->setObject('Domain'		, $Domain);
			$request->setObject('DomainAll'		, $DomainAll);
																		
			return self::statuses('CMD_DEFAULT');
		}
	}
?>