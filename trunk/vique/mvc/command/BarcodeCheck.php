<?php
	namespace MVC\Command;	
	class BarcodeCheck extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$Barcode = $request->getProperty('Barcode');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mResource = new \MVC\Mapper\Resource();
									
			//-------------------------------------------------------------
			//XỬ LÍ CHÍNH
			//-------------------------------------------------------------						
			$Resource = $mResource->findByBarcode(array($Barcode));
							
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject('Resource', $Resource);
		}
	}
?>