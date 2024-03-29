<?php
	namespace MVC\Command;	
	class SettingResourceTag extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$IdSupplier = $request->getProperty('IdSupplier');
			$IdResource = $request->getProperty('IdResource');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mSupplier 	= new \MVC\Mapper\Supplier();
			$mResource 	= new \MVC\Mapper\Resource();
			$mTag 		= new \MVC\Mapper\Tag();
			$mConfig 	= new \MVC\Mapper\Config();
			
			//-------------------------------------------------------------
			//XỬ LÍ CHÍNH
			//-------------------------------------------------------------						
			$TagAll 	= $mTag->findAll();
			$Supplier 	= $mSupplier->find($IdSupplier);
			$Resource 	= $mResource->find($IdResource);
			$Config 	= $mConfig->findByName('ROW_PER_PAGE');
						
			$Title = mb_strtoupper($Resource->getName(), 'UTF8');
			$Navigation = array(				
				array("THIẾT LẬP"		, "/setting"),
				array("NHÀ CUNG CẤP"	, "/setting/supplier"),
				array( mb_strtoupper($Supplier->getName(), 'UTF8'), $Supplier->getURLResource() )
			);
			$URL = $Resource->getURLSettingTag();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('Title'		, $Title);
			$request->setProperty('URL'			, $URL);
			$request->setObject("Navigation"	, $Navigation);
			$request->setObject("TagAll"		, $TagAll);
			$request->setObject("Supplier"		, $Supplier);
			$request->setObject("Resource"		, $Resource);
		}
	}
?>