<?php	
	namespace MVC\Command;
	class PrintCustomerTracking extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//------------------------------------------------------------						
			
			$mCustomer 		= new \MVC\Mapper\Customer();
			$mCustomerLog 	= new \MVC\Mapper\CustomerLog();
			$mPE 			= new \MVC\Mapper\ProductExport();
			$mCP 			= new \MVC\Mapper\CustomerPaid();
			$mCL 			= new \MVC\Mapper\CustomerLoan();
			
			$IdCustomer 	= $request->getProperty('IdCustomer');						
			$DateStart 		= $request->getProperty('DateStart');
			$DateEnd 		= $request->getProperty('DateEnd');
			
			$Customer 		= $mCustomer->find($IdCustomer);			
			$CustomerLogAll = $mCustomerLog->findBy1(array($IdCustomer, $DateStart, $DateEnd));
			$CustomerLog 	= $CustomerLogAll->current();
			
			$cd 			= strtotime($DateStart);			
			$DateStart1 	= date('Y-m-d', mktime(0,0,0,1,1,2012));
			$DateEnd1 		= date('Y-m-d', mktime(0,0,0,date('m',$cd),date('d',$cd)-1,date('Y',$cd)));
												
			$PEs 			= $mPE->findByDate(array($IdCustomer, $DateStart, $DateEnd));
			$PEValue 		= $mPE->evalByDate(array($IdCustomer, $DateStart, $DateEnd));
			$PEValue1 		= $mPE->evalByDate(array($IdCustomer, $DateStart1, $DateEnd1));
						
			$CPs 			= $mCP->findByDate(array($IdCustomer, $DateStart, $DateEnd));
			$CPValue 		= $mCP->evalByDate(array($IdCustomer, $DateStart, $DateEnd));			
			$CPValue1 		= $mCP->evalByDate(array($IdCustomer, $DateStart1, $DateEnd1));
			
			$CLs 			= $mCL->findByDate(array($IdCustomer, $DateStart, $DateEnd));
			$CLValue 		= $mCL->evalByDate(array($IdCustomer, $DateStart, $DateEnd));						
			$CLValue1 		= $mCL->evalByDate(array($IdCustomer, $DateStart1, $DateEnd1));
			
			//Dư nợ cũ đầu kì của khách hàng
			$DebtOld 		= $Customer->getBalance() + ($PEValue1 + $CLValue1 - $CPValue1);
			
			//Dư nợ mới
			$DebtNew 		= $DebtOld + ($PEValue + $CLValue - $CPValue);
			
			$request->setObject('Customer', 	$Customer);
			$request->setObject('CustomerLog', 	$CustomerLog);
			$request->setProperty('DateStart', 	$DateStart);
			$request->setProperty('DateEnd', 	$DateEnd);
			
			$request->setObject('PEs', 			$PEs);
			$request->setProperty('PEValue', 	$PEValue);
						
			$request->setObject('CPs', 			$CPs);
			$request->setProperty('CPValue', 	$CPValue);
			
			$request->setObject('CLs', 			$CLs);
			$request->setProperty('CLValue', 	$CLValue);
												
			$request->setProperty('DebtOld', 	$DebtOld);
			$request->setProperty('DebtNew', 	$DebtNew);
			
			return self::statuses('CMD_OK');
		}
	}
?>