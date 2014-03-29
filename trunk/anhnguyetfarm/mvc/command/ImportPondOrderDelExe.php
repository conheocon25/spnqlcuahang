<?php		
	namespace MVC\Command;	
	class ImportPondOrderDelExe extends Command{
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
			$IdOrderImport = $request->getProperty("IdOrderImport");
			$IdResource = $request->getProperty("IdResource");
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------											
			$mOID = new \MVC\Mapper\OrderImportDetail();
			$mOI = new \MVC\Mapper\OrderImport();
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Order = $mOI->find($IdOrderImport);
			
			//Kiểm tra xem record có tồn tại chưa ?
			$IdOID = $mOID->exist(array($IdOrderImport, $IdResource));
			$mOID->delete(array($IdOID));
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Date', $Order->getDate() );
			$request->setProperty('Type', $Order->getType() );
						
			return self::statuses('CMD_OK');
		}
	}
?>