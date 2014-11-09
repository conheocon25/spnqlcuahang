<?php	
	namespace MVC\Command;
	class UpdateProductImport extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			$ses = \MVC\Base\SessionRegistry::instance();
			$TableProduct=array(48, 49, 52, 53, 2, 10, 16, 26, 50, 21, 30, 35, 40, 51, 54);
			
			$ColumnId = $request->getProperty('columnId');
			$RowId = $request->getProperty('rowId');
			$Value = $request->getProperty('value');
			
			$IdProduct = $TableProduct[$ColumnId-1];
			$mProduct = new \MVC\Mapper\Product();
			$Product = $mProduct->find($IdProduct);
			
			$mFactory = new \MVC\Mapper\Factory();
			$IdFactory = $ses->getCurrentFactory();
			$Factory = $mFactory->find($IdFactory);
						
			$Today = $ses->getCurrentDate();
			$cd = strtotime($Today);
			$Date = date('Y-m-d', mktime(0,0,0,date('m',$cd),$RowId+1,date('Y',$cd)));
										
			$mProductImport = new \MVC\Mapper\ProductImport();
			
			$Id = $mProductImport->checkExist(array(
				$IdFactory, $IdProduct, $Date
			));
			if ($Id == 0){
				if ($Value>0){
					$ProductImport = new \MVC\Domain\ProductImport(
						null, $IdFactory,	$IdProduct, "", $Date, $Value, 40, ""
					);
					$mProductImport->insert($ProductImport);
					$mProductImport->update($ProductImport);
					return self::statuses('CMD_DEFAULT');
				}
			}
			else{
				if ($Value==0){
					$mProductImport->delete(array($Id));
					return self::statuses('CMD_DEFAULT');
				}
				$ProductImport = $mProductImport->find($Id);
				$ProductImport->setQuantity($Value);
			}
			$mProductImport->update($ProductImport);
			return self::statuses('CMD_DEFAULT');
		}
	}
?>