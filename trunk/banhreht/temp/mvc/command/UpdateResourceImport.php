<?php	
	namespace MVC\Command;
	class UpdateResourceImport extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			$ses = \MVC\Base\SessionRegistry::instance();
			$TableResource=array(
				1=>array(1), 
				2=>array(7), 
				3=>array(4), 
				4=>array(2), 
				5=>array(6), 
				6=>array(3,7,8,9,10,5),
				7=>array(5),
				8=>array(4)
			);
			$IdSupplier = $ses->getCurrentSupplier();
			
			$ColumnId = $request->getProperty('columnId');
			$RowId = $request->getProperty('rowId');
			$Value = $request->getProperty('value');
			
			$IdResource = $TableResource[$IdSupplier][$ColumnId-1];
			$mResource = new \MVC\Mapper\Resource();
			$Resource = $mResource->find($IdResource);
			
			$mFactory = new \MVC\Mapper\Supplier();			
			$Supplier = $mFactory->find($IdSupplier);
						
			$Today = $ses->getCurrentDate();
			$cd = strtotime($Today);
			$Date = date('Y-m-d', mktime(0,0,0,date('m',$cd),$RowId+1,date('Y',$cd)));
			
			//echo $Supplier->getName()."-".$Date."-".$Resource->getName();
			
			$mRI = new \MVC\Mapper\ResourceImport();													
			$Id = $mRI->checkExist(array(
				$IdSupplier,
				$IdResource,
				$Date
			));
			if ($Id == 0){
				if ($Value>0){
					$RI = new \MVC\Domain\ResourceImport(
						null,$IdSupplier,$IdResource,"",$Date,$Value,0,""
					);
					$mRI->insert($RI);
					$mRI->update($RI);
					return self::statuses('CMD_DEFAULT');
				}
			}
			if ($Value==0){
				$RI = $mRI->delete(array($Id));
				return self::statuses('CMD_DEFAULT');
			}
			$RI = $mRI->find($Id);
			$RI->setQuantity($Value);			
			$mRI->update($RI);																	
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
