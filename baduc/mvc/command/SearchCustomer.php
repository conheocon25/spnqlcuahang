<?php
	namespace MVC\Command;	
	class SearchCustomer extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");	
			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();

			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$IdCard = $request->getProperty('IdCard');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$mCustomer 	= new \MVC\Mapper\Customer;
			$Customer 	= $mCustomer->findByCard(array($IdCard));			
			$CTAll		= $Customer->getTrackingAll();
			$A = array();
			while ($CTAll->valid()){
				$CT = $CTAll->current();				
				$A[] = 	array(
					'Id' 		=> $CT->getId(),				
					'Note'		=> $CT->getNote()
				);
				$CTAll->next();
			}
			$B = array(
				"name"	=> $Customer->getName(),
				"data"	=> $A
			);			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			echo json_encode($B);
		}
	}
?>