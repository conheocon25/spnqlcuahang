<?php
	namespace MVC\Command;
	class ImportSupplierUpdExe extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdOrderImport = $request->getProperty('IdOrderImport');
			$IdStore = $request->getProperty('IdStore');
			$Date = $request->getProperty('Date');			
			$Note = $request->getProperty('Note');
														
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mOI = new \MVC\Mapper\OrderImport();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($Date))
				return self::statuses('CMD_OK');
				
			$OI = $mOI->find($IdOrderImport);
			$OI->setIdStore($IdStore);
			$OI->setDate($Date);
			$OI->setNote($Note);
			$mOI->update($OI);
					
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>
