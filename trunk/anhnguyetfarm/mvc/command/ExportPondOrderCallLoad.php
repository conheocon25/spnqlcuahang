<?php
	namespace MVC\Command;
	class ExportPondOrderCallLoad extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdPond = $request->getProperty("IdPond");
			$Date = $request->getProperty("Date");
			$Type = $request->getProperty("Type");
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mSupplier = new \MVC\Mapper\Supplier();
			$mPond = new \MVC\Mapper\Pond();
			$mOrder = new \MVC\Mapper\OrderExport();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$DT = new \MVC\Domain\DateTracking(
				null,
				$IdPond,
				$Date
			);
			
			if ($Type == 1){
				$Suppliers = $mSupplier->findBy1();
				$Suppliers1 = $mSupplier->findBy1();
				$URLBack = $DT->getURLExportPond1();
			}else{
				$Suppliers = $mSupplier->findBy2();
				$Suppliers1 = $mSupplier->findBy2();
				$URLBack = $DT->getURLExportPond2();
			}
						
			$Pond = $mPond->find($IdPond);									
			$Title = "CHỌN DANH MỤC";
			
			$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
			$URLCallExe = "/".$App."/export/".$IdPond."/".$Date."/call/exe/".$Type;
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject("Suppliers", $Suppliers);
			$request->setObject("Suppliers1", $Suppliers1);
			$request->setObject("Pond", $Pond);
									
			$request->setProperty('Title', $Title);
			$request->setProperty('URLCallExe', $URLCallExe);
			$request->setObject("URLBack", $URLBack);
		}
	}
?>
