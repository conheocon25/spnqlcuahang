<?php
	namespace MVC\Command;	
	use MVC\Library\Mail;
	class RegisterExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$Email = $request->getProperty('Email');
			$Name = $request->getProperty('Name');
			$Phone = $request->getProperty('Phone');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mUser = new \MVC\Mapper\User();			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			
			
			if ($Email != ""){				
				//lấy ngày hiện tại
				$Today = \getdate();
				$CurDateTime = $Today['year']."-".$Today['mon']."-".$Today['mday']." ".$Today['hours'].":".$Today['minutes'].":".$Today['seconds'];
				//Gửi mail về Admin
				$AdminMailName = "cafe.123app.net";
				$AdminMail ="contact@123app.net";
				$ToMail = $Email;
				$MailSubject = "Ngày $CurDateTime - Email: $Email đã Đăng ký tên quán Cafe: ". $Name;
				$MailContent = "Email: $Email đăng ký dùng thử hệ thống Cafe <br /> Tên Quán: $Name <br /> Số Điện Thoại: $Phone";
				//Mail($smtp_host, $admin_email, $smtp_username, $smtp_password);
				$mMail = new Mail('localhost', 'contact@123app.net', 'contact@123app.net', 'admin123456');
				$mMail->SendMail( $AdminMailName, $AdminMail, 'thanhbao2007vl@gmail.com', $MailSubject, $MailContent);
				$mMail->SendMail( $AdminMailName, $AdminMail, 'tuanbuithanh@gmail.com', $MailSubject, $MailContent);								
			}
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>