<?php
	namespace MVC\Command;	
	class S2AGet extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");	
			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();

			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$Type = $request->getProperty('Type');
			$Data = $request->getObject('Data');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			//Data[0]	:	Tên của Model
			//Data[1]	: 	Mã của Model
			if ($Type == "one"){
				$mMapper 	= \MVC\Domain\HelperFactory::getFinder($Data[0]);
				$Obj 		= $mMapper->find($Data[1]);
				$XML		= $Obj->toXML();
			}
			else if ($Type == "all"){
			
			}else if ($Type == "page"){
			
			}else if ($Type == "condition"){
			
			}
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			echo $XML;
		}
	}
?>