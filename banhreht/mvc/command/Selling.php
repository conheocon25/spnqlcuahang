<?php
	namespace MVC\Command;
	class Selling extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mOrder = new \MVC\Mapper\OrderExport();
			$mResource = new \MVC\Mapper\Resource();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$OrderAll = $mOrder->findBy( array( $Session->getCurrentUser()->getId(), 0 ) );
			$Order = $OrderAll->current();
			$ResourceAll = $mResource->findFreq(array());
			
			$Title = "BÁN HÀNG";
			$Navigation = array();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title', 'BÁN HÀNG');			
			$request->setObject('OrderAll', $OrderAll);
			$request->setObject('Order', $Order);
			$request->setObject('ResourceAll', $ResourceAll);
			
			$request->setObject('Navigation', $Navigation);
		}
	}
?>
