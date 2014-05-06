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
			$mResource 		= new \MVC\Mapper\Resource();
			$mPresentation 	= new \MVC\Mapper\Presentation();
			$mTag 			= new \MVC\Mapper\Tag();
			$mOED 			= new \MVC\Mapper\OrderExportDetail();
			$mOID 			= new \MVC\Mapper\OrderImportDetail();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$ConfigName 	= $mConfig->findByName("NAME");
			$ConfigSlogan 	= $mConfig->findByName("SLOGAN");
			$ConfigPHome 	= $mConfig->findByName("PRESENTATION_HOME");
			
			$SaveAll 		= $mSave->findAll();
			$Save	 		= $SaveAll->current();
			
			$CategoryAll 	= $mCategory->findAll();
			$ResourceAll1 	= $mResource->findByTop(array());			
			$Presentation 	= $mPresentation->find($ConfigPHome->getValue());
			
			$TagAll 		= $mTag->findByPosition(array(1));
			
			$OEDAll 		= $mOED->findTop(array());
			$OIDAll 		= $mOID->findTop(array());
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty("Active", 	'Home');
			$request->setObject("ConfigName", 	$ConfigName);
			$request->setObject("ConfigSlogan", $ConfigSlogan);
			
			$request->setObject("TagAll", 		$TagAll);
			
			$request->setObject("Save", 		$Save);
			$request->setObject("Presentation", $Presentation);
			$request->setObject("CategoryAll", 	$CategoryAll);
			$request->setObject("ResourceAll1", $ResourceAll1);
			
			$request->setObject("OEDAll", 		$OEDAll);
			$request->setObject("OIDAll", 		$OIDAll);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>