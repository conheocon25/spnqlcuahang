<?php		
	namespace MVC\Command;	
	class ASettingResourceImage extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$IdSupplier = $request->getProperty('IdSupplier');
			$IdResource = $request->getProperty('IdResource');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mSupplier 	= new \MVC\Mapper\Supplier();
			$mResource 	= new \MVC\Mapper\Resource();
			$mConfig 	= new \MVC\Mapper\Config();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------																		
			$Supplier = $mSupplier->find($IdSupplier);
			$Resource = $mResource->find($IdResource);
			
			$Title = mb_strtoupper($Resource->getName(), 'UTF8');
			$Navigation = array(				
				array("THIẾT LẬP", "/admin/setting"),
				array("NHÀ CUNG CẤP", "/admin/setting/supplier"),
				array(mb_strtoupper($Supplier->getName(), 'UTF8'), $Supplier->getURLResource())
			);
			
			$Config 	= $mConfig->findByName("ROW_PER_PAGE");
			$ConfigName = $mConfig->findByName("NAME");
												
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title'		, $Title);						
			$request->setObject('Navigation'	, $Navigation);
			$request->setObject('ConfigName'	, $ConfigName);
			
			$request->setObject('Resource'		, $Resource);
			$request->setObject('Supplier'		, $Supplier);
															
			return self::statuses('CMD_DEFAULT');
		}
	}
?>