<?php
	namespace MVC\Command;
	class PaidOtherListInsExe extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdTerm = $request->getProperty('IdTerm');						
			$Date = $request->getProperty('Date');			
			$Value = $request->getProperty('Value');
			$Note = $request->getProperty('Note');
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			
			$mPO = new \MVC\Mapper\PaidOther();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($Date))
				return self::statuses('CMD_OK');
				
			$PO = new \MVC\Domain\PaidOther(
				null,
				$IdTerm,
				$Date,
				$Value,
				$Note
			);
			$mPO->Insert($PO);
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
			
		}
	}
?>
