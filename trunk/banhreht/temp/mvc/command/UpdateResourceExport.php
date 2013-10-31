<?php	
	namespace MVC\Command;
	class UpdateResourceExport extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			$ses = \MVC\Base\SessionRegistry::instance();
			$TableResource=array(1, 2, 3, 4, 5, 6, 7, 8, 9);
			
			$ColumnId = $request->getProperty('columnId');
			$RowId = $request->getProperty('rowId');
			$Value = $request->getProperty('value');
			
			$IdResource = $TableResource[$ColumnId-1];
			$mResource = new \MVC\Mapper\Resource();
			$Resource = $mResource->find($IdResource);
			
			$mFactory = new \MVC\Mapper\Factory();
			$IdFactory = $ses->getCurrentFactory();
			$Factory = $mFactory->find($IdFactory);
						
			$Today = $ses->getCurrentDate();
			$cd = strtotime($Today);
			$Date = date('Y-m-d', mktime(0,0,0,date('m',$cd),$RowId+1,date('Y',$cd)));
			
			//echo $Factory->getName()."-".$Date."-".$Resource->getName();			
			$mRE = new \MVC\Mapper\ResourceExport();													
			$Id = $mRE->checkExist(array(
				$IdFactory,
				$IdResource,
				$Date
			));
			if ($Id == 0){
				if ($Value>0){
					$ResourceExport = new \MVC\Domain\ResourceExport(
						null, $IdFactory, $IdResource, "", $Date, $Value, 0, ""
					);
					$mRE->insert($ResourceExport);
					$mRE->update($ResourceExport);
					return self::statuses('CMD_DEFAULT');
				}
			}
			if ($Value==0){
				$mRE->delete(array($Id));
				return self::statuses('CMD_DEFAULT');
			}
			$ResourceExport = $mRE->find($Id);
			$ResourceExport->setQuantity($Value);			
			$mRE->update($ResourceExport);
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
