<?php		
	namespace MVC\Command;	
	class ExportPondOrderDelExe extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$IdPond = $request->getProperty("IdPond");
			$IdOrderExport = $request->getProperty("IdOrderExport");
			$IdResource = $request->getProperty("IdResource");
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------											
			$mOED = new \MVC\Mapper\OrderExportDetail();
			$mOE = new \MVC\Mapper\OrderExport();
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
										
			//Kiểm tra xem record có tồn tại chưa
			$IdOID = $mOED->exist(array($IdOrderExport, $IdResource));
			$mOED->delete(array($IdOID));
			$Order = $mOE->find($IdOrderExport);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Date', $Order->getDate() );
			$request->setProperty('Type', $Order->getType() );
			
			return self::statuses('CMD_OK');
		}
	}
?>