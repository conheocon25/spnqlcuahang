<?php
	namespace MVC\Command;	
	class Category extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdCategory1 	= 	$request->getProperty('IdCategory1');
			$IdCategory2 	= 	$request->getProperty('IdCategory2');
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mConfig 	= new \MVC\Mapper\Config();
			$mCategory 	= new \MVC\Mapper\Category();
			$mCategory1	= new \MVC\Mapper\Category1();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Title = "";
			$ConfigName 	= $mConfig->findByName("NAME");
			$CategoryAll 	= $mCategory->findAll();
			$Category 		= $mCategory1->find($IdCategory2);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty("Title", 		$Title);			
			$request->setObject("ConfigName", 	$ConfigName);
			$request->setObject("CategoryAll", 	$CategoryAll);
			$request->setObject("Category", 	$Category);			
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>