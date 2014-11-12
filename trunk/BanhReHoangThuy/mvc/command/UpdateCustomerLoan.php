<?php	
	namespace MVC\Command;
	class UpdateCustomerLoan extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------
			$ses = \MVC\Base\SessionRegistry::instance();
			
			$ColumnId = $request->getProperty('columnId');
			$RowId = $request->getProperty('rowId');
			$Value = $request->getProperty('value');
									
			$mCustomer = new \MVC\Mapper\Customer();
			$IdCustomer = $ses->getCurrentCustomer();
			$Customer = $mCustomer->find($IdCustomer);
						
			$Today = $ses->getCurrentDate();
			$cd = strtotime($Today);
			$Date = date('Y-m-d', mktime(0,0,0,date('m',$cd),$RowId+1,date('Y',$cd)));
									
			$mCL = new \MVC\Mapper\CustomerLoan();
			$Id = $mCL->checkExist(array( $IdCustomer, $Date ));
			
			if ($Id == 0){
				if ($ColumnId==1){
					if ($Value>0){
						$CP = new \MVC\Domain\CustomerLoan(
							null, 
							$IdCustomer, 
							$Date, 
							$Value, 
							""
						);
						$mCL->insert($CP);
						return self::statuses('CMD_DEFAULT');
					}
				}else if ($ColumnId==2){
					$CP = new \MVC\Domain\CustomerLoan(
						null, 
						$IdCustomer, 
						$Date, 
						0,
						$Value 						
					);
					$mCL->insert($CP);
					return self::statuses('CMD_DEFAULT');
				}
			}else{
				$CL = $mCL->find($Id);
				
				if ($ColumnId==1){
					if ($Value==0){
						$mCL->delete(array($Id));
						return self::statuses('CMD_DEFAULT');
					}					
					$CL->setValue($Value);					
				}else if ($ColumnId==2){					
					$CL->setDescription($Value);					
				}				
				$mCL->update($CL);
			}
			return self::statuses('CMD_DEFAULT');
		}
	}
?>