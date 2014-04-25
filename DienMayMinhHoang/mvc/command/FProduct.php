<?php
	namespace MVC\Command;	
	class FProduct extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$KCategory1 	= 	$request->getProperty('KCategory1');
			$KCategory2 	= 	$request->getProperty('KCategory2');
			$KProduct 		= 	$request->getProperty('KProduct');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mConfig 	= new \MVC\Mapper\Config();
			$mCategory 	= new \MVC\Mapper\Category();
			$mCategory1	= new \MVC\Mapper\Category1();
			$mProduct 	= new \MVC\Mapper\Product();
			$mTag 		= new \MVC\Mapper\Tag();
			$mBranch 	= new \MVC\Mapper\Branch();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Title = "";
			$ConfigName 	= $mConfig->findByName("NAME");
			$ConfigSlogan 	= $mConfig->findByName("SLOGAN");
			$ConfigPhone 	= $mConfig->findByName("PHONE");
			$ConfigYahooMessenger 	= $mConfig->findByName("CONTACT_YAHOOMESSENGER");
			$ConfigSkype 			= $mConfig->findByName("CONTACT_SKYPE");
			
			$CategoryAll 	= $mCategory->findAll();			
			$Product 		= $mProduct->findByKey($KProduct);
			$Category 		= $Product->getCategory()->getCategory();
			$TagAll 		= $mTag->findByPosition(array(1));
			$BranchAll 		= $mBranch->findAll();			
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty("Title", 		$Title);			
			$request->setProperty("Active", 	"");
			$request->setObject("ConfigName", 	$ConfigName);
			$request->setObject("ConfigSlogan", $ConfigSlogan);			
			$request->setObject("ConfigPhone", 	$ConfigPhone);
			$request->setObject("ConfigYahooMessenger", $ConfigYahooMessenger);
			$request->setObject("ConfigSkype", 			$ConfigSkype);
			$request->setObject("CategoryAll", 	$CategoryAll);
			$request->setObject("Category", 	$Category);
			$request->setObject("Product", 		$Product);
			$request->setObject("TagAll", 		$TagAll);
			$request->setObject("BranchAll", 	$BranchAll);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>