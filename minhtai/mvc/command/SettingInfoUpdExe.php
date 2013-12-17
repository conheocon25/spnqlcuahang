<?php		
	namespace MVC\Command;	
	class SettingInfoUpdExe extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------						
			$Name = $request->getProperty('Name');
			$Phone = $request->getProperty('Phone');
			$Address = $request->getProperty('Address');
			$Email = $request->getProperty('Email');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mApp = new \MVC\Mapper\App();
								
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			if (!isset($Name))
				return self::statuses('CMD_OK');
				
			$App = $Session->getCurrentUser()->getApp();
			$App->setName($Name);
			$App->setPhone($Phone);
			$App->setAddress($Address);
			$App->setEmail($Email);
			$mApp->update($App);
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			return self::statuses('CMD_OK');
		}
	}
?>