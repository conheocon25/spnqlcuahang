<?php		
	namespace MVC\Command;	
	class Setting extends Command {
		function doExecute( \MVC\Controller\Request $request ){
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
			require_once("mvc/base/mapper/MapperDefault.php");
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Title = "THIẾT LẬP";			
			$Navigation = array(
				
			);
						
			$SupplierAll 	= $mSupplier->findAll();
			$UnitAll 		= $mUnit->findAll();			
			$CustomerAll 	= $mCustomer->findAll();			
			$UserAll 		= $mUser->findAll();
			$TagAll 		= $mTag->findAll();
			$TagSelectedAll = $mTagSelected->findAll();
			$ConfigAll 		= $mConfig->findAll();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title'		, $Title);			
			$request->setProperty('ActiveAdmin'	, 'Setting');
			$request->setObject('Navigation'	, $Navigation);
						
			$request->setObject('SupplierAll'	, $SupplierAll);
			$request->setObject('UnitAll'		, $UnitAll);			
			$request->setObject('CustomerAll'	, $CustomerAll);			
			$request->setObject('UserAll'		, $UserAll);
			$request->setObject('ConfigAll'		, $ConfigAll);
			$request->setObject('TagAll'		, $TagAll);
			$request->setObject('TagSelectedAll', $TagSelectedAll);
									
			return self::statuses('CMD_DEFAULT');
		}
	}
?>