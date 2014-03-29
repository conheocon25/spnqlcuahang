<?php
	namespace MVC\Command;	
	class SettingPondSessionUpdExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$IdPondSession = $request->getProperty('IdPondSession');
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
				
			$PondSession = $mPondSession->find($IdPondSession);
			$PondSession->setType($Type);
			$PondSession->setDateStart($DateStart);
			$PondSession->setDateEnd($DateEnd);
			$PondSession->setCountStart($CountStart);
			$PondSession->setValueStart($ValueStart);
			$PondSession->setSampleStart($SampleStart);
			$PondSession->setShipStart($ShipStart);
			$PondSession->setCountExport($CountExport);
			$PondSession->setPriceExport($PriceExport);
			$PondSession->setBankRate($BankRate);
			$PondSession->setCountWaste($CountWaste);
			$PondSession->setPriceWaste($PriceWaste);
			$PondSession->setName($Name);
			$PondSession->setEmployeeName($EmployeeName);
			$PondSession->setEmployeePhone($EmployeePhone);			
			$PondSession->setCountRemain($CountRemain);
			$PondSession->setPriceRemain($PriceRemain);
			$PondSession->setNet($Net);
			$PondSession->setTip($Tip);
			
			$mPondSession->update($PondSession);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>
