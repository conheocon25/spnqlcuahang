<?php		
	namespace MVC\Command;	
	class ASettingConfig extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$Page = $request->getProperty('Page');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mConfig 	= new \MVC\Mapper\Config();
			$mPost 		= new \MVC\Mapper\Post();
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$ConfigAll 		= $mConfig->findAll();
			$PostAll 		= $mPost->findAll();
						
			$Title = "CẤU HÌNH";
			$Navigation = array(				
				array("THIẾT LẬP", "/setting")
			);
			
			//Kiểm tra nếu chưa tồn tại trong DB thì sẽ tự động khởi tạo giá trị mặc định và lưu vào DB			
			$ConfigName 	= $mConfig->findByName("NAME");
			if ($ConfigName==null){
				$ConfigName = new \MVC\Domain\Config(null, 'NAME', 'QUÁN CAFE');
				$mConfig->insert($ConfigName);
			}
			
			$ConfigAddress 	= $mConfig->findByName("ADDRESS");
			if ($ConfigAddress==null){
				$ConfigAddress = new \MVC\Domain\Config(null, 'ADDRESS', 'Vĩnh Long');
				$mConfig->insert($ConfigAddress);
			}
			
			$ConfigPhone 	= $mConfig->findByName("PHONE");
			if ($ConfigPhone==null){
				$ConfigPhone = new \MVC\Domain\Config(null, 'PHONE', '0919 153 189');
				$mConfig->insert($ConfigPhone);
			}
			
			$ConfigRowPerPage	= $mConfig->findByName("ROW_PER_PAGE");
			if ($ConfigRowPerPage==null){
				$ConfigRowPerPage = new \MVC\Domain\Config(null, 'ROW_PER_PAGE', 12);
				$mConfig->insert($RowPerPage);
			}
			
			$ConfigEvery5Minutes = $mConfig->findByName("EVERY_5_MINUTES");
			if ($ConfigEvery5Minutes==null){
				$ConfigEvery5Minutes = new \MVC\Domain\Config(null, 'EVERY_5_MINUTES', 2000);
				$mConfig->insert($ConfigEvery5Minutes);
			}
			
			$ConfigGuestVisit 	= $mConfig->findByName("GUEST_VISIT");
			if ($ConfigGuestVisit==null){
				$ConfigGuestVisit = new \MVC\Domain\Config(null, 'GUEST_VISIT', 1);
				$mConfig->insert($ConfigGuestVisit);
			}
			
			$ConfigSlogan 	= $mConfig->findByName("SLOGAN");
			if ($ConfigSlogan==null){
				$ConfigSlogan = new \MVC\Domain\Config(null, 'SLOGAN', 'Khẩu hiệu của Shop');
				$mConfig->insert($ConfigSlogan);
			}
															
			$ConfigReceiptVirtualDouble	= $mConfig->findByName("RECEIPT_VIRTUAL_DOUBLE");
			if ($ConfigReceiptVirtualDouble==null){
				$ConfigReceiptVirtualDouble = new \MVC\Domain\Config(null, 'RECEIPT_VIRTUAL_DOUBLE', 1);
				$mConfig->insert($ConfigReceiptVirtualDouble);
			}
			
			$ConfignMonthLog	= $mConfig->findByName("N_MONTH_LOG");
			if ($ConfignMonthLog==null){
				$ConfignMonthLog = new \MVC\Domain\Config(null, 'N_MONTH_LOG', 1);
				$mConfig->insert($ConfignMonthLog);
			}
			
			$ConfigIntroduction = $mConfig->findByName("POST_INTRODUCTION");
			if ($ConfigIntroduction==null){
				$ConfigIntroduction = new \MVC\Domain\Config(null, 'POST_INTRODUCTION', 0);
				$mConfig->insert($ConfigIntroduction);
			}
			
			$ConfigFAQ = $mConfig->findByName("POST_FAQ");
			if ($ConfigFAQ==null){
				$ConfigFAQ = new \MVC\Domain\Config(null, 'POST_FAQ', 0);
				$mConfig->insert($ConfigFAQ);
			}
			
			$ConfigPolicy = $mConfig->findByName("POST_POLICY");
			if ($ConfigPolicy==null){
				$ConfigPolicy = new \MVC\Domain\Config(null, 'POST_POLICY', 0);
				$mConfig->insert($ConfigPolicy);
			}
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title', 				$Title);
			$request->setProperty('ActiveAdmin', 		'Config');
			$request->setObject('Navigation', 			$Navigation);
						
			$request->setObject('ConfigName', 				$ConfigName);			
			$request->setObject('ConfigAddress', 			$ConfigAddress);
			$request->setObject('ConfigPhone', 				$ConfigPhone);
			$request->setObject('ConfigRowPerPage', 		$ConfigRowPerPage);			
			$request->setObject('ConfigGuestVisit', 		$ConfigGuestVisit);
			$request->setObject('ConfigSlogan', 			$ConfigSlogan);			
			$request->setObject('ConfigReceiptVirtualDouble', $ConfigReceiptVirtualDouble);
			$request->setObject('ConfignMonthLog', 			$ConfignMonthLog);
			
			$request->setObject('ConfigIntroduction', 		$ConfigIntroduction);
			$request->setObject('ConfigPolicy', 			$ConfigPolicy);	
			$request->setObject('ConfigFAQ', 				$ConfigFAQ);			
			$request->setObject('PostAll', 					$PostAll);
												
			return self::statuses('CMD_DEFAULT');
		}
	}
?>