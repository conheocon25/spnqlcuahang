<?php
	namespace MVC\Command;	
	class FCategory extends Command {
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
			$Page 			= 	$request->getProperty('Page');
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mConfig 	= new \MVC\Mapper\Config();
			$mCategory 	= new \MVC\Mapper\Category();
			$mCategory1	= new \MVC\Mapper\Category1();
			$mTag		= new \MVC\Mapper\Tag();
			$mProduct	= new \MVC\Mapper\Product();
			$mBranch 	= new \MVC\Mapper\Branch();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Title = "";
			$ConfigName 	= $mConfig->findByName("NAME");
			$ConfigSlogan 	= $mConfig->findByName("SLOGAN");
			$ConfigYahooMessenger 	= $mConfig->findByName("CONTACT_YAHOOMESSENGER");
			$ConfigSkype 			= $mConfig->findByName("CONTACT_SKYPE");
			$ConfigPhone1 			= $mConfig->findByName("PHONE1");
			$ConfigPhone2 			= $mConfig->findByName("PHONE2");
			$CategoryAll 	= $mCategory->findAll();
			$Category1 		= $mCategory->findByKey($KCategory1);
			$Category2 		= $mCategory1->findByKey($KCategory2);
			$TagAll 		= $mTag->findByPosition(array(1));
			$BranchAll 				= $mBranch->findAll();
			
			if (!isset($Page)) $Page = 1;
			$ProductAll 	= $mProduct->findByCategoryPage(array($Category2->getId(), $Page, 6));
			$PN 			= new \MVC\Domain\PageNavigation($Category2->getProductAll()->count(), 6, $Category2->getURLView());
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty("Title", 		$Title);			
			$request->setProperty("Active", 	"Category");
			$request->setProperty("Page", 		$Page);
			$request->setObject("PN", 			$PN);
			$request->setObject("ConfigName", 	$ConfigName);
			$request->setObject("ConfigSlogan", $ConfigSlogan);
			$request->setObject("ConfigYahooMessenger", $ConfigYahooMessenger);
			$request->setObject("ConfigSkype", 			$ConfigSkype);
			$request->setObject("ConfigPhone1", 		$ConfigPhone1);
			$request->setObject("ConfigPhone2", 		$ConfigPhone2);
			$request->setObject("CategoryAll", 	$CategoryAll);
			$request->setObject("Category1", 	$Category1);			
			$request->setObject("Category2", 	$Category2);
			$request->setObject("TagAll", 		$TagAll);
			$request->setObject("ProductAll", 	$ProductAll);
			$request->setObject("BranchAll", 			$BranchAll);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>