<?php
	namespace MVC\Command;	
	class FPolicy extends Command {
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
			$mPost 		= new \MVC\Mapper\Post();
			$mCategory 	= new \MVC\Mapper\Category();
			$mTag 		= new \MVC\Mapper\Tag();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Title = "";
			$ConfigName 	= $mConfig->findByName("NAME");
			$ConfigSlogan 	= $mConfig->findByName("SLOGAN");
			$ConfigPolicy 	= $mConfig->findByName("POST_POLICY");
			$CategoryAll 	= $mCategory->findAll();
			$Post			= $mPost->find($ConfigPolicy->getValue());
			$TagAll 		= $mTag->findByPosition(array(1));
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty("Title", 		$Title);			
			$request->setProperty("Active", 	"");
			$request->setObject("ConfigName", 	$ConfigName);
			$request->setObject("ConfigSlogan", $ConfigSlogan);
			$request->setObject("CategoryAll", 	$CategoryAll);
			$request->setObject("Post", 		$Post);
			$request->setObject("TagAll", 		$TagAll);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>