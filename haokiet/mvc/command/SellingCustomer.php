<?php		
	namespace MVC\Command;	
	class SellingCustomer extends Command{
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
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title'		, $Title);														
			$request->setObject('Navigation'	, $Navigation);			
			$request->setObject('ConfigName'	, $ConfigName);
			$request->setObject('Domain'		, $Domain);
			$request->setObject('Customer'		, $Customer);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>