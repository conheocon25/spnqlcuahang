<?php
	namespace MVC\Command;	
	class FHome extends Command {
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
			$mResource 	= new \MVC\Mapper\Resource();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Title = "";
			$ConfigName = $mConfig->findByName("NAME");
			$CategoryAll = $mCategory->findAll();
			$ResourceAll1 = $mResource->findAll();
			$ResourceAll2 = $mResource->findAll();
			$ResourceAll3 = $mResource->findAll();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty("Title", 		$Title);			
			$request->setProperty("Active", 	'Home');
			$request->setObject("ConfigName", 	$ConfigName);
			$request->setObject("CategoryAll", 	$CategoryAll);
			$request->setObject("ResourceAll1", $ResourceAll1);
			$request->setObject("ResourceAll2", $ResourceAll2);
			$request->setObject("ResourceAll3", $ResourceAll3);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>