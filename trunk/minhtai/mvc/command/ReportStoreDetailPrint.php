<?php		
	namespace MVC\Command;	
	class ReportStoreDetailPrint extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$IdStore = $request->getProperty('IdStore');
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mStore = new \MVC\Mapper\Store();
			$mResource = new \MVC\Mapper\Resource();			
			$Resources =  $mResource->findByStore(array($IdStore,$IdStore,$IdStore));
			
			$Title = "TỒN KHO";
			$Store = $mStore->find($IdStore);
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title', $Title);			
			$request->setProperty('NameStore', $Store->getName());			
			$request->setObject('Resources', $Resources);
		
		}
	}
?>