<?php		
	namespace MVC\Command;	
	class ExportCustomerOrderDetailClone extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$IdDetail 		= $request->getProperty("IdDetail");
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------									
			$mOED 		= new \MVC\Mapper\OrderExportDetail();
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$OED = $mOED->find($IdDetail);
						
			$OEDN = new \MVC\Domain\OrderExportDetail(
				null,
				$OED->getIdOrder(),
				$OED->getIdResource(),
				$OED->getCount(),
				0
			);
			$mOED->insert($OEDN);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			
		}
	}
?>