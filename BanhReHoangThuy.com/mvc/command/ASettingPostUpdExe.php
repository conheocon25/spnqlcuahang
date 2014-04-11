<?php
	namespace MVC\Command;	
	class ASettingPostUpdExe extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdPost = $request->getProperty('IdPost');						
			$Title = $request->getProperty('Title');
			$Content = \stripslashes($request->getProperty('Content'));
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mPost = new \MVC\Mapper\Post();
					
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------							
			$Str = new \MVC\Library\String($Title." ".$IdPost);
			$Post = $mPost->find($IdPost);
			
			$Post->setContent($Content);			
			$Post->setTitle($Title);			
			$Post->reKey();
			$mPost->update($Post);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>
