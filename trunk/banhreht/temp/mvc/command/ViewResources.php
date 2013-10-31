<?php	
	namespace MVC\Command;
	class ViewResources extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			
			$mResource = new \MVC\Mapper\Resource();
			$Resources = $mResource->findAll();
			$request->setObject('Resources', $Resources);
			$request->setProperty('Title', 'DANH SÁCH NGUYÊN LIỆU');
						
			return self::statuses('CMD_OK');
		}
	}
?>
