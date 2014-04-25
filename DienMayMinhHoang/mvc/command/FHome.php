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
			$mConfig 		= new \MVC\Mapper\Config();
			$mSave 			= new \MVC\Mapper\Save();
			$mCategory 		= new \MVC\Mapper\Category();
			$mProduct 		= new \MVC\Mapper\Product();
			$mPresentation 	= new \MVC\Mapper\Presentation();
			$mTag 			= new \MVC\Mapper\Tag();
			$mOED 			= new \MVC\Mapper\OrderExportDetail();
			$mOID 			= new \MVC\Mapper\OrderImportDetail();
			$mManufacturer	= new \MVC\Mapper\Manufacturer();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$ConfigName 			= $mConfig->findByName("NAME");
			$ConfigSlogan 			= $mConfig->findByName("SLOGAN");
			$ConfigPHome 			= $mConfig->findByName("PRESENTATION_HOME");
			$ConfigPhone 			= $mConfig->findByName("PHONE");
			$ConfigYahooMessenger 	= $mConfig->findByName("CONTACT_YAHOOMESSENGER");
			$ConfigSkype 			= $mConfig->findByName("CONTACT_SKYPE");
			
			$ManufacturerAll= $mManufacturer->findAll();
			
			$SaveAll 		= $mSave->findAll();
			$Save	 		= $SaveAll->current();
			
			$CategoryAll 	= $mCategory->findAll();
			$ProductAll1 	= $mProduct->findByTop(array());			
			$Presentation 	= $mPresentation->find($ConfigPHome->getValue());
			
			$TagAll 		= $mTag->findByPosition(array(1));
			
			$OEDAll 		= $mOED->findTop(array());
			$OIDAll 		= $mOID->findTop(array());
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty("Active", 			'Home');
			$request->setObject("ConfigName", 			$ConfigName);
			$request->setObject("ConfigSlogan", 		$ConfigSlogan);
			$request->setObject("ConfigPhone", 			$ConfigPhone);
			$request->setObject("ConfigYahooMessenger", $ConfigYahooMessenger);
			$request->setObject("ConfigSkype", 			$ConfigSkype);
			
			$request->setObject("TagAll", 				$TagAll);
			
			$request->setObject("ManufacturerAll", 		$ManufacturerAll);
			$request->setObject("Save", 				$Save);
			$request->setObject("Presentation", 		$Presentation);
			$request->setObject("CategoryAll", 			$CategoryAll);
			$request->setObject("ProductAll1", 		$ProductAll1);
			
			$request->setObject("OEDAll", 				$OEDAll);
			$request->setObject("OIDAll", 				$OIDAll);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>