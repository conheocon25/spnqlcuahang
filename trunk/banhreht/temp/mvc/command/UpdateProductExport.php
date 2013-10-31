<?php	
	namespace MVC\Command;
	class UpdateProductExport extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			$ses = \MVC\Base\SessionRegistry::instance();
			$TableProduct= array(
				1=>array(120, 128, 129, 131, 132, 133),
				2=>array(107, 110, 112, 117, 118, 123, 130, 134),
				3=>array(104, 105, 106, 107, 108, 109, 126, 127, 111, 112, 113, 114, 115, 116, 117, 118, 119, 123, 124, 125),
				4=>array(100, 101, 102, 103, 107, 121, 122, 129),
				5=>array(100, 101, 102, 103, 121, 122),
				6=>array(100, 101, 102, 103, 121, 122),
				7=>array(100, 101, 102, 103, 121, 122),
				8=>array(100, 101, 102, 103, 121, 122, 111),
				9=>array(107, 111, 117, 120, 128, 129, 131, 132, 133),
				10=>array(106, 107, 111, 117),
				11=>array(100, 101, 102, 103, 107, 121, 122, 129)
			);
						
			$mCustomer = new \MVC\Mapper\Customer();
			$IdCustomer = $ses->getCurrentCustomer();
			//$IdCustomer = $request->getProperty('IdCustomer');
			$Customer = $mCustomer->find($IdCustomer);
			
			$ColumnId = $request->getProperty('columnId');
			$RowId = $request->getProperty('rowId');
			$Value = $request->getProperty('value');
			
			$IdProduct = $TableProduct[$IdCustomer][$ColumnId-1];
			$mProduct = new \MVC\Mapper\Product();
			$Product = $mProduct->find($IdProduct);
												
			$Today = $ses->getCurrentDate();
			$cd = strtotime($Today);
			$Date = date('Y-m-d', mktime(0,0,0,date('m',$cd),$RowId+1,date('Y',$cd)));
			
			//echo $RowId."-".$Date."-".$Customer->getName()."-".$Product->getFullName();							
			$mPE = new \MVC\Mapper\ProductExport();									
			$Id = $mPE->checkExist(array(
				$IdCustomer,
				$IdProduct,
				$Date
			));
			if ($Id == 0){
				if ($Value>0){
					$PE = new \MVC\Domain\ProductExport(
						null,
						$IdCustomer,					
						$IdProduct,
						"",
						$Date,
						$Value,
						40,
						""
					);					
					$mPE->insert($PE);
					$mPE->update($PE);
					return self::statuses('CMD_DEFAULT');
				}
			}else{
				if ($Value==0){
					$PE = $mPE->delete(array($Id));
					return self::statuses('CMD_DEFAULT');
				}
				$PE = $mPE->find($Id);
				$PE->setQuantity($Value);
			}
			$mPE->update($PE);
			return self::statuses('CMD_DEFAULT');
		}
	}
?>