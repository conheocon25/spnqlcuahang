<?php
	namespace MVC\Command;	
	class SettingResourceTagExe extends Command {
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
			$IdTag 		= $request->getProperty('IdTag');
			$State 		= $request->getProperty('State');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------						
			$mR2T 		= new \MVC\Mapper\R2T();
			//-------------------------------------------------------------
			//XỬ LÍ CHÍNH
			//-------------------------------------------------------------						
			if ($State == "yes"){
				$R2T = new \MVC\Domain\R2T(
					null,
					$IdResource,
					$IdTag
				);
				$mR2T->insert($R2T);
			}else{
				$mR2T->deleteBy(array($IdResource, $IdTag));
			}
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$json = array('result' => "OK");
			echo json_encode($json);
		}
	}
?>