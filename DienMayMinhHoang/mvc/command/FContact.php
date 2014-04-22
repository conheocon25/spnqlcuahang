<?php
	namespace MVC\Command;	
	class FContact extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mConfig 	= new \MVC\Mapper\Config();
			$mCategory 	= new \MVC\Mapper\Category();
			$mTag 		= new \MVC\Mapper\Tag();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Title 			= "";
			$ConfigName 	= $mConfig->findByName("NAME");
			$ConfigSlogan 	= $mConfig->findByName("SLOGAN");
			$ConfigContact 	= $mConfig->findByName("CONTACT_NAME");
			$ConfigAddress 	= $mConfig->findByName("ADDRESS");
			$ConfigPhone 	= $mConfig->findByName("PHONE");
			
			$CategoryAll 	= $mCategory->findAll();
			$TagAll 		= $mTag->findByPosition(array(1));
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty("Title", 			$Title);
			$request->setProperty("Active", 		'Contact');
			$request->setObject("ConfigName", 		$ConfigName);
			$request->setObject("ConfigSlogan", 	$ConfigSlogan);
			$request->setObject("ConfigContact", 	$ConfigContact);
			$request->setObject("ConfigAddress", 	$ConfigAddress);
			$request->setObject("ConfigPhone", 		$ConfigPhone);
			$request->setObject("CategoryAll", 		$CategoryAll);
			$request->setObject("TagAll", 			$TagAll);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>