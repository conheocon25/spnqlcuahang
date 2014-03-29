<?php
	namespace MVC\Command;
	class PaidPondListDelExe extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdPaidPond = $request->getProperty('IdPaidPond');
											
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mPP = new \MVC\Mapper\PaidPond();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------													
			$PP = $mPP->find($IdPaidPond);
			if (!isset($PP))
				return self::statuses('CMD_OK');
				
			$mPP->delete(array($IdPaidPond));										
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Date', $PP->getDate() );

			return self::statuses('CMD_OK');
			
		}
	}
?>
