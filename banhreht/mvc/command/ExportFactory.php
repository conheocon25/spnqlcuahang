<?php
	namespace MVC\Command;
	class ExportFactory extends Command {
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
			$mFactory = new \MVC\Mapper\Factory();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$FactoryAll = $mFactory->findAll( );
									
			$Title = "LÒ SẢN XUẤT";
			$Navigation = array(
				array("XUẤT", "/export")
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title'		, $Title);
			$request->setObject('ActiveAdmin'	, 'Export');									
			$request->setObject('Navigation'	, $Navigation);
			$request->setObject('FactoryAll'	, $FactoryAll);
		}
	}
?>
