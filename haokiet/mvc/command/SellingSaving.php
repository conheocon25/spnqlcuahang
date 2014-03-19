<?php
	namespace MVC\Command;	
	class SellingSaving extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");	
			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();

			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$Id 		= $request->getProperty('row_id');
			$Value 		= $request->getProperty('value');
			$Column 	= $request->getProperty('column');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mCL = new \MVC\Mapper\CustomerLog();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$CL = $mCL->find($Id);
			if ($Column==2){
				$CL->setTicket1($Value);
				$CL->autoUpdate();
				$mCL->update($CL);
			}
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
					
			
			echo $Value;
		}
	}
?>