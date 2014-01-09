<?php		
	namespace MVC\Command;	
	class ExportCustomerOrder extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdCustomer 	= $request->getProperty('IdCustomer');
			$IdOrder 		= $request->getProperty('IdOrder');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mOrderExport 	= new \MVC\Mapper\OrderExport();
			$mCustomer 		= new \MVC\Mapper\Customer();
			$mCL 			= new \MVC\Mapper\CustomerLog();
			$mPaidCustomer 	= new \MVC\Mapper\PaidCustomer();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$Order 		= $mOrderExport->find($IdOrder);
			$Customer 	= $mCustomer->find($IdCustomer);			
			$OrderPre 	= $mOrderExport->findPre(array($IdCustomer, $IdOrder));
			
			$Date2 = $Order->getDate();
			if ($OrderPre->count()==0){
				$Date1 = '2013-1-1';
			}else{
				$Date1 = $OrderPre->current()->getDateNext();								
			}
			$PCAll 	= $mPaidCustomer->findByDate( array($IdCustomer, $Date1, $Date2) );
			
			//TIỀN TRẢ TRƯỚC
			$SPaid = 0;
			while($PCAll->valid()){
				$PC = $PCAll->current();
				$SPaid += $PC->getValue();
				$PCAll->next();
			}
			$NSPaid = new \MVC\Library\Number($SPaid);
			
			//UPDATE CustomerLog
			$IdCL = $mCL->exist(array($IdCustomer, $IdOrder));
			if ($IdCL==-1){
				$CL = new \MVC\Domain\CustomerLog(
					null,
					$Order->getId(),
					$IdCustomer,
					$SPaid,
					0
				);								
				$mCL->insert($CL);
			}else{
				$CL = $mCL->find($IdCL);				
			}
			$CLPre = $mCL->findPre(array($IdCustomer, $CL->getId()));
			if ($CLPre->count()==0){
				$Debt = $Customer->getDebt() + $Order->getValue() - $SPaid;
			}else{
				$Debt = $CLPre->current()->getDebtValue() + $Order->getValue() - $SPaid;
			}			
			$CL->setPaidValue($SPaid);
			$CL->setDebtValue($Debt);
			$mCL->update($CL);			
						
			$Title = $Order->getDatePrint();
			$Navigation = array(
				array("XUẤT HÀNG", "/export"),
				array(mb_strtoupper($Customer->getName(), 'UTF8'), $Customer->getURLExport())
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title', $Title);			
			$request->setObject('Navigation', $Navigation);
									
			$request->setObject('Order'		, $Order);
			$request->setObject('Customer'	, $Customer);
			$request->setObject('CL'		, $CL);
			$request->setObject('PCAll'		, $PCAll);
			$request->setObject('SPaid'		, $NSPaid);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>