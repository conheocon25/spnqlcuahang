<?php		
	namespace MVC\Command;	
	class SellingCustomerOrderExtUpdLoad extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$IdCustomer = $request->getProperty("IdCustomer");
			$IdOrderExport = $request->getProperty("IdOrderExport");
			$IdResource = $request->getProperty("IdResource");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			
			$mCustomer = new \MVC\Mapper\Customer();
			$mOE = new \MVC\Mapper\OrderExport();
			$mOED = new \MVC\Mapper\OrderExportDetail();
			$mOEDE = new \MVC\Mapper\OrderExportDetailExtra();
			$mResource = new \MVC\Mapper\Resource();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$User = $Session->getCurrentUser();
			
			$OE = $mOE->find($IdOrderExport);
			$Customer = $mCustomer->find($IdCustomer);
			$Resource = $mResource->find($IdResource);
			
			
			$Title = "KHUYẾN MÃI ".mb_strtoupper($Resource->getName(), 'UTF8');
			
			//Kiểm tra xem record có tồn tại chưa
			$IdOEDE = $mOEDE->exist(array($IdOrderExport, $IdResource));
			
			if ($IdOEDE>0){
				$OEDE = $mOEDE->find($IdOEDE);
				$Price = $OEDE->getPrice();
				$Count = $OEDE->getCount();
			}else{
				$IdOED = $mOED->exist(array($IdOrderExport, $IdResource));
				$OED = $mOED->find($IdOED);
				
				$Price = round((($OED->getPrice())*0.1),0);
				$Count = $OED->getCount();
			}
			$DetailURLUpdExe = "/".$User->getApp()->getAlias()."/selling/".$Customer->getId()."/".$OE->getId()."/".$Resource->getId()."/ext/upd/exe";
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