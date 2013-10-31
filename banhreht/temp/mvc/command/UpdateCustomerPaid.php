<?php	
	namespace MVC\Command;
	class UpdateCustomerPaid extends Command {
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
			//echo $Customer->getName()." ".$Date." ".$Value;
						
			$mCP = new \MVC\Mapper\CustomerPaid();			
			$Id = $mCP->checkExist(array( $IdCustomer, $Date ));
			if ($Id == 0){
				if ($Value>0){
					$CP = new \MVC\Domain\CustomerPaid(
						null, $IdCustomer, $Date, $Value, ""
					);
					$mCP->insert($CP);
					return self::statuses('CMD_DEFAULT');
				}	
			}else{
				if ($Value==0){
					$mCP->delete(array($Id));
					return self::statuses('CMD_DEFAULT');
				}
				$CP = $mCP->find($Id);
				$CP->setValue($Value);
				$mCP->update($CP);
			}
			return self::statuses('CMD_DEFAULT');
		}
	}
?>