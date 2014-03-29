<?php
	namespace MVC\Command;	
	class SettingPondSessionInsExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$IdPond = $request->getProperty('IdPond');
			$Type = $request->getProperty('Type');
			$DateStart = $request->getProperty('DateStart');
			$DateEnd = $request->getProperty('DateEnd');
			$CountStart = $request->getProperty('CountStart');
			$ValueStart = $request->getProperty('ValueStart');
			$SampleStart = $request->getProperty('SampleStart');
			$ShipStart = $request->getProperty('ShipStart');
			$CountExport = $request->getProperty('CountExport');
			$PriceExport = $request->getProperty('PriceExport');
			$BankRate = $request->getProperty('BankRate');
			$CountWaste = $request->getProperty('CountWaste');
			$PriceWaste = $request->getProperty('PriceWaste');
			$Name = $request->getProperty('Name');
			$EmployeeName = $request->getProperty('EmployeeName');
			$EmployeePhone = $request->getProperty('EmployeePhone');
			$CountRemain = $request->getProperty('CountRemain');
			$PriceRemain = $request->getProperty('PriceRemain');
			$Net = $request->getProperty('Net');
			$Tip = $request->getProperty('Tip');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mPondSession = new \MVC\Mapper\PondSession();
					
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($DateStart))
				return self::statuses('CMD_OK');
				
			$PondSession = new \MVC\Domain\PondSession(
				null,
				$IdPond,
				$Type,
				$DateStart,
				$DateEnd,
				$CountStart,
				$ValueStart,
				$SampleStart,
				$ShipStart,
				$CountExport,
				$PriceExport,
				$BankRate,
				$CountWaste,
				$PriceWaste,
				$Name,
				$EmployeeName,
				$EmployeePhone,
				$CountRemain,
				$PriceRemain,
				$Net,
				$Tip
			);												
			$mPondSession->insert($PondSession);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			return self::statuses('CMD_OK');
		}
	}
?>
