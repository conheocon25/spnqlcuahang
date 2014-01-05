<?php		
	namespace MVC\Command;	
	class SellingCustomerOrderAllPrint extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$IdCustomer = $request->getProperty("IdCustomer");
									
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mCustomer 	= new \MVC\Mapper\Customer();
			$mOE 		= new \MVC\Mapper\OrderExport();
			$mCL 		= new \MVC\Mapper\CustomerLog();
			$mPaid		= new \MVC\Mapper\PaidCustomer();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$mCL->deleteBy(array($IdCustomer));
			
			$Customer = $mCustomer->find($IdCustomer);
			$OrderAll = $Customer->getOrders();
			
			$DateOld = null;
			while($OrderAll->valid()){
				$Order = $OrderAll->current();
				
				$PaidAll = $mPaid->findByTracking1( array($IdCustomer, $Order->getDate(), $Order->getDate()) );
				$SPaid = 0;
				$PaidAll->rewind();
				while ($PaidAll->valid()){
					$Paid = $PaidAll->current();
					$SPaid += $Paid->getValue();
					$PaidAll->next();
				}
				if ($DateOld == $Order->getDate())
					$SPaid = 0;
				$DateOld = $Order->getDate();
				
				$CL = new \MVC\Domain\CustomerLog(
					null,
					$Order->getId(),
					$IdCustomer,
					$SPaid
				);
				$mCL->insert($CL);
				$OrderAll->next();
			}			
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setObject('Customer', $Customer);			
		}
	}
?>