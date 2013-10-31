<?php	
	namespace MVC\Command;
	class ViewSupplierTracking extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			require_once("mvc/PublicFunction.php");
			//------------------------------------------------------------						
						
			$ses = \MVC\Base\SessionRegistry::instance();			
			//-------------------------------------------------------------------
			$IdSupplier = $request->getProperty('IdSupplier');
			$mSupplier = new \MVC\Mapper\Supplier();
			$Supplier = $mSupplier->find($IdSupplier);
			$ses->setCurrentSupplier($IdSupplier);
			
			$DateStart = $request->getProperty('DateStart');
			if (isset($DateStart)){								
				$ses->setCurrentDateStart($DateStart);
				$ses->setCurrentDateEnd($DateEnd);
				
				return self::statuses('CMD_OK');
			}			
			$Today = getdate();
			$DateStart = date('Y-m-d', mktime(0,0,0,$Today['mon'],1,$Today['year']));
			$DateEnd = date('Y-m-d', mktime(0,0,0,$Today['mon'],$Today['mday'],$Today['year']));
			
			$request->setProperty('DateStart', $DateStart);
			$request->setProperty('DateEnd', $DateEnd);
			$request->setProperty('Title', "TỔNG KẾT ".$Supplier->getName());
						
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
