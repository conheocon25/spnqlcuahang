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
			$Page 	= $request->getProperty('Page');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mConfig 	= new \MVC\Mapper\Config();
			$mCategory 	= new \MVC\Mapper\Category();
			$mPostTag	= new \MVC\Mapper\PostTag();
			$mTag 		= new \MVC\Mapper\Tag();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$ConfigName 			= $mConfig->findByName("NAME");
			$ConfigSlogan 			= $mConfig->findByName("SLOGAN");			
			$CategoryAll 			= $mCategory->findAll();
			
			if (!isset($Page)) $Page = 1;
			$TagAll 				= $mTag->findByPosition(array(1));
			$Tag 					= $mTag->findByKey($KTag);
			$PTAll 					= $mPostTag->findByTagPage(array($Tag->getId(), $Page, 6));
			$PN 					= new \MVC\Domain\PageNavigation($Tag->getPostAll()->count(), 6, $Tag->getURLView());
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setProperty("Active", 			'Post');
			$request->setProperty("Page", 				$Page);
			$request->setObject("ConfigName", 			$ConfigName);
			$request->setObject("ConfigSlogan", 		$ConfigSlogan);	
			$request->setObject("CategoryAll", 			$CategoryAll);
			$request->setObject("TagAll", 				$TagAll);
			$request->setObject("Tag", 					$Tag);
			$request->setObject("PTAll", 				$PTAll);
			$request->setObject("PN", 					$PN);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>