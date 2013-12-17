<?php		
	namespace MVC\Command;	
	class PaidEmployeeListInsLoad extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdEmployee = $request->getProperty("IdEmployee");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
						
			$mEmployee = new \MVC\Mapper\Employee();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Employee = $mEmployee->find($IdEmployee);			
			$Title = "TRẢ TIỀN ".mb_strtoupper($Employee->getName(), 'UTF8');
			
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('Title', $Title);
			
			$request->setObject('Employee', $Employee);
		}
	}
?>