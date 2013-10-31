<?php
	namespace MVC\Command;	
	class UpdateUser extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			$ses = \MVC\Base\SessionRegistry::instance();	
			$mUser = new \MVC\Mapper\User();			
			$id_user = $ses->getCurrentIdUser();
			
			if (isset($id_user) ) {
			
				$User = $mUser->find($id_user);				
				$request->setObject('User', $User);	
				$UserID = $request->getProperty('UserID');
				$PassNew = $request->getProperty('PassNew');
				
				if(isset($PassNew)) {
					$rePass = $mUser->createPass($PassNew);
					$User->setPass($rePass);
					$User->setGender($request->getProperty('Sex_'));
					$mUser->update($User);
					return self::statuses('CMD_OK');
				}
				
			}
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
