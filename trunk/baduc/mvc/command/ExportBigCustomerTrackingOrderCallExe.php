<?php		
	namespace MVC\Command;	
	class ExportBigCustomerTrackingOrderCallExe extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdDomain 		= $request->getProperty('IdDomain');
			$IdCustomer 	= $request->getProperty('IdCustomer');
			$IdTracking 	= $request->getProperty('IdTracking');
			$IdOrder 		= $request->getProperty('IdOrder');
			$IdSupplier 	= $request->getProperty('IdSupplier');
			$Data 			= $request->getProperty('Data');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mOrderExport 		= new \MVC\Mapper\OrderExport();
			$mOD 				= new \MVC\Mapper\OrderExportDetail();
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------															
			$Order 			= $mOrderExport->find($Data[0]);
			$OD 			= $Order->findItem($Data[1]);
			if (isset($OD)){
				$OD->setCount($Data[2]);
				$OD->setPrice($Data[3]);
				$mOD->update($OD);
			}else{
				$OD = new \MVC\Domain\OrderExportDetail(
					null,
					$Data[0],
					$Data[1],
					$Data[2],
					$Data[3]
				);
				$mOD->insert($OD);
			}			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$json = array('result' => "OK");
			echo json_encode($json);
		}
	}
?>