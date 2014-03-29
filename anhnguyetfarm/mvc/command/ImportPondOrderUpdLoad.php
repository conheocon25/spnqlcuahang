<?php		
	namespace MVC\Command;	
	class ImportPondOrderUpdLoad extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$IdPond = $request->getProperty("IdPond");
			$IdOrderImport = $request->getProperty("IdOrderImport");
			$IdResource = $request->getProperty("IdResource");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			
			$mPond = new \MVC\Mapper\Pond();
			$mOE = new \MVC\Mapper\OrderImport();
			$mOED = new \MVC\Mapper\OrderImportDetail();
			$mResource = new \MVC\Mapper\Resource();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$User = $Session->getCurrentUser();
			
			$OE = $mOE->find($IdOrderImport);
			$Pond = $mPond->find($IdPond);
			$Resource = $mResource->find($IdResource);
						
			$Title = "CHI TIẾT ".mb_strtoupper($Resource->getName(), 'UTF8');
			
			//Kiểm tra xem record có tồn tại chưa
			$IdOID = $mOED->exist(array($IdOrderImport, $IdResource));
			
			if ($IdOID>0){
				$OED = $mOED->find($IdOID);
				$Price = $OED->getPrice();
				$Count = $OED->getCount();
			}else{
				$Price = $Resource->getPrice1();
				$Count = 1;
			}
			$DetailURLUpdExe = "/".$User->getApp()->getAlias()."/import/".$Pond->getId()."/".$OE->getId()."/".$Resource->getId()."/upd/exe";
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('Title', $Title);
			
			$request->setProperty('DetailURLUpdExe', $DetailURLUpdExe);
			$request->setProperty('Count', $Count);
			$request->setProperty('Price', $Price);
		}
	}
?>