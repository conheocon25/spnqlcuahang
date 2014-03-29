<?php		
	namespace MVC\Command;	
	class ExportPondOrderUpdLoad extends Command{
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
			$IdOrderExport = $request->getProperty("IdOrderExport");
			$IdResource = $request->getProperty("IdResource");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			
			$mPond = new \MVC\Mapper\Pond();
			$mOE = new \MVC\Mapper\OrderExport();
			$mOED = new \MVC\Mapper\OrderExportDetail();
			$mResource = new \MVC\Mapper\Resource();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$User = $Session->getCurrentUser();
			
			$OE = $mOE->find($IdOrderExport);
			$Pond = $mPond->find($IdPond);
			$Resource = $mResource->find($IdResource);
						
			$Title = "CHI TIẾT ".mb_strtoupper($Resource->getName(), 'UTF8');
			
			//Kiểm tra xem record có tồn tại chưa
			$IdOID = $mOED->exist(array($IdOrderExport, $IdResource));
			
			if ($IdOID>0){
				$OED = $mOED->find($IdOID);
				$Price = $OED->getPrice();
				$Count = $OED->getCount();
			}else{
				$Price = $Resource->getPrice1();
				$Count = 1;
			}
			$DetailURLUpdExe = "/".$User->getApp()->getAlias()."/export/".$Pond->getId()."/".$OE->getId()."/".$Resource->getId()."/upd/exe";
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