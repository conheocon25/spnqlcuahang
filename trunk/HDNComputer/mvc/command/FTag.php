<?php
	namespace MVC\Command;	
	class FTag extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$KTag 	= $request->getProperty('KTag');
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mConfig 	= new \MVC\Mapper\Config();
			$mCategory 	= new \MVC\Mapper\Category();
			$mPost 		= new \MVC\Mapper\Post();
			$mTag 		= new \MVC\Mapper\Tag();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$ConfigName 			= $mConfig->findByName("NAME");
			$ConfigSlogan 			= $mConfig->findByName("SLOGAN");			
			$CategoryAll 			= $mCategory->findAll();
						
			$TagAll 				= $mTag->findByPosition(array(1));
			$Tag 					= $mTag->findByKey($KTag);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setProperty("Active", 			'Post');
			$request->setObject("ConfigName", 			$ConfigName);
			$request->setObject("ConfigSlogan", 		$ConfigSlogan);	
			$request->setObject("CategoryAll", 			$CategoryAll);
			$request->setObject("TagAll", 				$TagAll);
			$request->setObject("Tag", 					$Tag);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>