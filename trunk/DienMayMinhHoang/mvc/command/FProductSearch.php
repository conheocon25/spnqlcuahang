<?php
	namespace MVC\Command;	
	class FProductSearch extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$Term 			= 	$request->getProperty('Term');
			$Page 			= 	$request->getProperty('Page');
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mConfig 		= new \MVC\Mapper\Config();
			$mCategory 		= new \MVC\Mapper\Category();
			$mCategory1		= new \MVC\Mapper\Category1();
			$mTag			= new \MVC\Mapper\Tag();
			$mProduct		= new \MVC\Mapper\Product();
			$mBranch 		= new \MVC\Mapper\Branch();
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Title = "";
			$ConfigName 	= $mConfig->findByName("NAME");
			$ConfigSlogan 	= $mConfig->findByName("SLOGAN");
			$ConfigYahooMessenger 	= $mConfig->findByName("CONTACT_YAHOOMESSENGER");
			$ConfigSkype 	= $mConfig->findByName("CONTACT_SKYPE");
			$ConfigPhone1 	= $mConfig->findByName("PHONE1");
			$ConfigPhone2 	= $mConfig->findByName("PHONE2");
			$CategoryAll 	= $mCategory->findAll();			
			$TagAll 		= $mTag->findByPosition(array(1));
			$BranchAll 		= $mBranch->findAll();
												
			if (!isset($Term)) {
				$Term = $Session->getTermSearch();
			}else{
				$Session->setTermSearch( $Term );
			}
			
			if (!isset($Page)) $Page = 1;
						
			$ProductAll1 	= $mProduct->findByName(array($Term));
			$ProductAll 	= $mProduct->findByNamePage(array($Term, $Page, 9));
			$PN 			= new \MVC\Domain\PageNavigation($ProductAll1->count(), 9, "/tim-kiem");
						
			$Title = "TÌM KIẾM ";
			$Navigation = array();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty("Title", 				$Title);			
			$request->setProperty("Active", 			"Category");
			$request->setProperty("Term", 				$Term);			
			$request->setProperty("Page", 				$Page);
			$request->setObject("PN", 					$PN);
			$request->setObject("Navigation", 			$Navigation);
						
			$request->setObject("ConfigName", 			$ConfigName);
			$request->setObject("ConfigSlogan", 		$ConfigSlogan);
			$request->setObject("ConfigYahooMessenger", $ConfigYahooMessenger);
			$request->setObject("ConfigSkype", 			$ConfigSkype);
			$request->setObject("ConfigPhone1", 		$ConfigPhone1);
			$request->setObject("ConfigPhone2", 		$ConfigPhone2);
			
			$request->setObject("CategoryAll", 			$CategoryAll);			
			$request->setObject("TagAll", 				$TagAll);
			$request->setObject("ProductAll", 			$ProductAll);
			$request->setObject("ProductAll1", 			$ProductAll1);
			$request->setObject("BranchAll", 			$BranchAll);
									
			return self::statuses('CMD_DEFAULT');
		}
	}
?>