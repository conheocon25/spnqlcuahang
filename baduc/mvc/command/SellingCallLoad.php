<?php
	namespace MVC\Command;
	class SellingCallLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdTag = $request->getProperty('IdTag');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mOrder = new \MVC\Mapper\OrderExport();
			$mResource = new \MVC\Mapper\Resource();
			$mTagSelected = new \MVC\Mapper\TagSelected();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$OrderAll = $mOrder->findBy( array( $Session->getCurrentUser()->getId(), 0 ) );
			$Order = $OrderAll->current();
			
			$TagSelectedAll = $mTagSelected->findAll();
			if (!isset($IdTag)){
				$TagSelected = $TagSelectedAll->current();
			}else{
				$TagSelected = $mTagSelected->find($IdTag);
			}
			
			$Title = "CHỌN MÓN";
			$Navigation = array(array("BÁN HÀNG", "/selling"));
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title', $Title);
			$request->setObject('Order', $Order);
			$request->setObject('TagSelectedAll', $TagSelectedAll);
			$request->setObject('TagSelected', $TagSelected);
			
			$request->setObject('Navigation', $Navigation);
		}
	}
?>
