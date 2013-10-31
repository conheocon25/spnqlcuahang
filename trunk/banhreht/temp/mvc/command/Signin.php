<?php	
	namespace MVC\Command;
	class Signin extends Command {
		function doExecute( \MVC\Controller\Request $request ) {			
			require_once("mvc/base/domain/HelperFactory.php");
			$ses = \MVC\Base\SessionRegistry::instance();
			$UserName = $request->getProperty('User');
			$Pass = $request->getProperty('Pass');					
			if(isset($UserName)) {				
				$mUser = new \MVC\Mapper\User();
				//$IdUser = $mUser->check($UserName, $Pass);
				$IdUser = 2;
				if ($IdUser > 0) {					
					$User = $mUser->find($IdUser);					
					$ses->setCurrentIdUser($IdUser);
					$ses->setCurrentUser( strtoupper($UserName) );
					return self::statuses('CMD_OK');
				}
			}			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>