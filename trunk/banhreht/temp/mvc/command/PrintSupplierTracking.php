<?php	
	namespace MVC\Command;
	class PrintSupplierTracking extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//------------------------------------------------------------						
			$ses = \MVC\Base\SessionRegistry::instance();
						
			$IdSupplier = $ses->getCurrentSupplier();
			$mSupplier = new \MVC\Mapper\Supplier();
			$Supplier = $mSupplier->find($IdSupplier);
			
			$DateStart = $request->getProperty('DateStart');
			$DateEnd = $request->getProperty('DateEnd');
			
			$cd = strtotime($DateStart);
			$DateStart1 = date('Y-m-d', mktime(0,0,0,1,1,date('Y',$cd)));
			$DateEnd1 = date('Y-m-d', mktime(0,0,0,date('m',$cd),date('d',$cd)-1,date('Y',$cd)));
												
			$mRI = new \MVC\Mapper\ResourceImport();
			$RIs = $mRI->findByDate(array($IdSupplier, $DateStart, $DateEnd));
			//echo $RIs->count();
			$RIValue = $mRI->evalByDate(array($IdSupplier, $DateStart, $DateEnd));
			//echo $RIValue;
			$RIValue1 = $mRI->evalByDate(array($IdSupplier, $DateStart1, $DateEnd1));
			
			$mSD = new \MVC\Mapper\SupplierDebt();
			$SDs = $mSD->findByDate(array($IdSupplier, $DateStart, $DateEnd));
			$SDValue = $mSD->evalByDate(array($IdSupplier, $DateStart, $DateEnd));			
			$SDValue1 = $mSD->evalByDate(array($IdSupplier, $DateStart1, $DateEnd1));
			
			//Dư nợ cũ đầu kì của khách hàng
			$DebtOld = $Supplier->getBalance() + ($RIValue1 - $SDValue1);
			//Dư nợ mới
			$DebtNew = $DebtOld + ($RIValue - $SDValue);
			
			$request->setObject('Supplier', $Supplier);
			$request->setProperty('DateStart', $DateStart);
			$request->setProperty('DateEnd', $DateEnd);
			
			$request->setObject('RIs', $RIs);
			$request->setProperty('RIValue', $RIValue);
						
			$request->setObject('SDs', $SDs);
			$request->setProperty('SDValue', $SDValue);
												
			$request->setProperty('DebtOld', $DebtOld);
			$request->setProperty('DebtNew', $DebtNew);
			return self::statuses('CMD_OK');
		}
	}
?>
