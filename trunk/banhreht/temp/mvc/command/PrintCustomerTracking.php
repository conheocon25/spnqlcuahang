<?php	
	namespace MVC\Command;
	class PrintCustomerTracking extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//------------------------------------------------------------						
			
			$IdCustomer = $request->getProperty('IdCustomer');
			$mCustomer = new \MVC\Mapper\Customer();
			$Customer = $mCustomer->find($IdCustomer);
			
			$DateStart = $request->getProperty('DateStart');
			$DateEnd = $request->getProperty('DateEnd');
			
			$cd = strtotime($DateStart);
			//$DateStart1 = date('Y-m-d', mktime(0,0,0,1,1,date('Y',$cd)));
			$DateStart1 = date('Y-m-d', mktime(0,0,0,1,1,2012));
			$DateEnd1 = date('Y-m-d', mktime(0,0,0,date('m',$cd),date('d',$cd)-1,date('Y',$cd)));
												
			$mPE = new \MVC\Mapper\ProductExport();
			$PEs = $mPE->findByDate(array($IdCustomer, $DateStart, $DateEnd));
			$PEValue = $mPE->evalByDate(array($IdCustomer, $DateStart, $DateEnd));
			$PEValue1 = $mPE->evalByDate(array($IdCustomer, $DateStart1, $DateEnd1));
			
			$mCP = new \MVC\Mapper\CustomerPaid();
			$CPs = $mCP->findByDate(array($IdCustomer, $DateStart, $DateEnd));
			$CPValue = $mCP->evalByDate(array($IdCustomer, $DateStart, $DateEnd));			
			$CPValue1 = $mCP->evalByDate(array($IdCustomer, $DateStart1, $DateEnd1));
			
			//Dư nợ cũ đầu kì của khách hàng
			$DebtOld = $Customer->getBalance() + ($PEValue1 - $CPValue1);
			
			//Dư nợ mới
			$DebtNew = $DebtOld + ($PEValue - $CPValue);
			
			$request->setObject('Customer', $Customer);
			$request->setProperty('DateStart', $DateStart);
			$request->setProperty('DateEnd', $DateEnd);
			
			$request->setObject('PEs', $PEs);
			$request->setProperty('PEValue', $PEValue);
						
			$request->setObject('CPs', $CPs);
			$request->setProperty('CPValue', $CPValue);
												
			$request->setProperty('DebtOld', $DebtOld);
			$request->setProperty('DebtNew', $DebtNew);
			return self::statuses('CMD_OK');
		}
	}
?>
