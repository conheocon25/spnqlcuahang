<?php		
	namespace MVC\Command;	
	class ASettingSupplierResource extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$Page = $request->getProperty('Page');
			$IdSupplier = $request->getProperty('IdSupplier');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mSupplier 	= new \MVC\Mapper\Supplier();
			$mResource 	= new \MVC\Mapper\Resource();
			$mCategory1	= new \MVC\Mapper\Category1();
			$mConfig 	= new \MVC\Mapper\Config();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$SupplierAll = $mSupplier->findAll();
						
			$Supplier = $mSupplier->find($IdSupplier);			
			$Title = mb_strtoupper($Supplier->getName(), 'UTF8');
			$Navigation = array(				
				array("THIẾT LẬP", "/admin/setting"),
				array("NHÀ CUNG CẤP", "/admin/setting/supplier")
			);
			if (!isset($Page)) $Page=1;
			$Config 	= $mConfig->findByName("ROW_PER_PAGE");
			$ConfigName = $mConfig->findByName("NAME");
			
			$ResourceAll1 = $mResource->findByPage(array($IdSupplier, $Page, $Config->getValue() ));
			$PN = new \MVC\Domain\PageNavigation( $Supplier->getResourceAll()->count(), $Config->getValue(), $Supplier->getURLResource() );
			$CategoryAll1 = $mCategory1->findAll();			
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title'		, $Title);
			$request->setProperty('ActiveAdmin'	, 'Resource');
			$request->setProperty('Page'		, $Page);
			$request->setObject('Navigation'	, $Navigation);
			
			$request->setObject('CategoryAll1'	, $CategoryAll1);
			$request->setObject('ResourceAll1'	, $ResourceAll1);
			$request->setObject('Supplier'		, $Supplier);
			$request->setObject('PN'			, $PN);
			$request->setObject('ConfigName'	, $ConfigName);
			
			$request->setObject('SupplierAll'	, $SupplierAll);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>