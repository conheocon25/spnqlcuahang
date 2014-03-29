<?php
	namespace MVC\Command;	
	class App extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$Alias = $request->getProperty('IdApp');
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mPond = new \MVC\Mapper\Pond();
			$mSupplier = new \MVC\Mapper\Supplier();
																		
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$User = $Session->getCurrentUser();
			$App = $User->getApp();
			$Ponds = $mPond->findAll();
			$Suppliers = $mSupplier->findAll();
			$Title = "HỆ THỐNG ".mb_strtoupper($App->getName(),'UTF8');
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty("Title", $Title);
			$request->setObject("App", $App);
			$request->setObject("Ponds", $Ponds);
			$request->setObject("Suppliers", $Suppliers);			
		}
	}
?>