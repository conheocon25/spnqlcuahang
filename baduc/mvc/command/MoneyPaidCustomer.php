<?php		
	namespace MVC\Command;	
	class MoneyPaidCustomer extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdCustomer = $request->getProperty('IdCustomer');
			$Page = $request->getProperty('Page');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mCustomer 		= new \MVC\Mapper\Customer();
			$mPaidCustomer 	= new \MVC\Mapper\PaidCustomer();
			$mConfig 		= new \MVC\Mapper\Config();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$CustomerAll = $mCustomer->findAll();
			if (isset($IdCustomer)){
				$Customer = $mCustomer->find($IdCustomer);
			}else{
				$Customer = $CustomerAll->current();
				$IdCustomer = $Customer->getId();
			}						
			$Config = $mConfig->findByName('ROW_PER_PAGE');
			if (!isset($Page)) $Page = 1;
			$PaidAll = $mPaidCustomer->findByPage(array($IdCustomer, $Page, $Config->getValue() ));
			$PN = new \MVC\Domain\PageNavigation( $Customer->getPaidAll()->count(), $Config->getValue(), $Customer->getURLPaid());
			
			$Title = "ỨNG TIỀN > ".$Customer->getName();
			$Navigation = array(
				array("THU / CHI", "/money")			
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setObject('Customer'		, $Customer);
			$request->setObject('CustomerAll'	, $CustomerAll);
			$request->setObject('PaidAll'		, $PaidAll);
			$request->setObject('PN'			, $PN);
			$request->setProperty('Page'		, $Page);
			$request->setProperty('Title'		, $Title);			
			$request->setObject('Navigation'	, $Navigation);
		}
	}
?>