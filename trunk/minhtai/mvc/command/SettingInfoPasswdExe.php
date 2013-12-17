<?php		
	namespace MVC\Command;	
	class SettingInfoPasswdExe extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------						
			$Passwd1 = $request->getProperty('Passwd1');
			$Passwd2 = $request->getProperty('Passwd2');
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------						
			$mUser = new \MVC\Mapper\User();
					
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			if (!isset($Passwd1)|| $Passwd1!=$Passwd2 )
				return self::statuses('CMD_OK');
			$User = @\MVC\Base\SessionRegistry::getCurrentUser();						
			$User->setPass($Passwd1); 				
			$mUser->update($User);
					
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			return self::statuses('CMD_OK');
		}
	}
?>