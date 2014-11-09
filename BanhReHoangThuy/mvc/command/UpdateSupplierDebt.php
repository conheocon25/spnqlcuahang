<?php	
	namespace MVC\Command;
	class UpdateSupplierDebt extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------
			$ses = \MVC\Base\SessionRegistry::instance();
			
			$ColumnId = $request->getProperty('columnId');
			$RowId = $request->getProperty('rowId');
			$Value = $request->getProperty('value');
									
			$mSupplier = new \MVC\Mapper\Customer();
			$IdSupplier = $ses->getCurrentSupplier();
			$Supplier = $mSupplier->find($IdSupplier);
						
			$Today = $ses->getCurrentDate();
			$cd = strtotime($Today);
			$Date = date('Y-m-d', mktime(0,0,0,date('m',$cd),$RowId+1,date('Y',$cd)));
			//echo $Supplier->getName()." ".$Date." ".$Value;
						
			$mSD = new \MVC\Mapper\SupplierDebt();
			$Id = $mSD->checkExist(array( $IdSupplier, $Date ));
			if ($Id == 0){
				if ($Value>0){
					$SD = new \MVC\Domain\SupplierDebt(
						null, $IdSupplier, $Date, $Value, ""
					);
					$mSD->insert($SD);
					return self::statuses('CMD_DEFAULT');
				}	
			}else{
				if ($Value==0){
					$mSD->delete(array($Id));
					return self::statuses('CMD_DEFAULT');
				}
				$SD = $mSD->find($Id);
				$SD->setValue($Value);
				$mSD->update($SD);
			}
			return self::statuses('CMD_DEFAULT');
		}
	}
?>